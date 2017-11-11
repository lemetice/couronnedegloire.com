<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Utility;

use DB;
use Input;
use Image;
use Session;
use Storage;
use Purifier;
use App\Article;
use Carbon\Carbon;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{	
		//Get authenticated user
        $auth_user = $request->user();
        
        //Get all articles
        $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();
        //$articles->setPath('home');
        
        return view('home', compact('articles', 'auth_user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//get the current date and time
		
		$carbon = Carbon::now('Europe/paris');
		$dt = $carbon->format('Y-m-d H:i:s');

       /* $this->validate($request, array(
            'title'  => 'required',
            'tag'   => 'required',
            'body'   => 'required'
            //'photos'       => 'required|image|mimes:jpeg,png|min:1|max:1024'
            ));*/

        $type = 1;
        
        /*Save the article info  dd($article);*/
        $article = new Article(array(
                    'title'   => $request->get('title'),
                    'author_id' => $request->user()->id,
                    'type' => $type,
                    'slug' => str_slug($request->get('title')), 
                    'body' => $request->get('article'),//Purifier::clean($request->get('article')),                    
                    'published_at' => $dt,
                    'created_at' => $dt,
                    'updated_at' => $dt
                    ));

        /*Save image*/
        if (Input::hasFile('media_url')){
            $image    = $request->file('media_url');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/'.$filename);
            Image::make($image)->resize(800,400)->save($location);
            $article->media_url = 'uploads/'.$filename;
         }

        $article->save();

        $tagIds = $request->input('tag');
        $article->tags()->attach($tagIds);
                     

        Session::flash('success_message', 'Article créer avec succès!');
        return redirect('home');
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {   
        //Get authenticated user
        $auth_user = $request->user();
        $article = DB::table('articles')->where('slug','=',$id)->get();
        if(empty($article))
            return view('errors.404');
        else
        return view('single-article', compact('article', 'auth_user'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {   

        $article = DB::table('articles')->where('slug','=',$id)->get();

        //$tags = Tag::Join()->where('article','=',$article[0]->id)->get();
        
        if(!isset($article) )
            return view('errors.404');
        else
        return view('articles.edit', compact('article'));
    }

	/**
	 * Update the specified candidate in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{  
	   //get the current date and time
		
		$dt = Carbon::now('Africa/douala')->format('Y-m-d H:i:s');
        
        $article = DB::table('articles')->where('slug','=',$id)->get();
        
        /*Updation*/
        if (Input::hasFile('media_url')){
            $image    = $request->file('media_url');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/'.$filename);
            Image::make($image)->resize(800,400)->save($location);
            $oldFilename = public_path()."/".$article[0]->media_url;

            //Update media_url in Database
            $article[0]->media_url = 'uploads/'.$filename;
            
            //Delete the old image
            //Storage::delete($oldFilename);
         }
            $article[0]->title = $request->input('title');
            $article[0]->slug  = time().'-'.str_slug($request->input('title'));
            $article[0]->body  = Purifier::clean($request->input('body'));
            $article[0]->updated_at = $dt;                

            DB::table('articles')->update([
                'title' => $article[0]->title,
                'slug' => $article[0]->slug,
                'body' => $article[0]->body,
                'updated_at' => $article[0]->updated_at,
                'media_url'=> $article[0]->media_url
                ]);

            /*Flash the user on action executed*/
            $request->session()->flash('success_message', 'Mise à  jour du article effectuer avec succès!');
            return redirect('home/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {   

        $dt = Carbon::now('Africa/douala')->format('Y-m-d H:i:s');
        try{

            $article = Article::findOrFail($id);
            $article->deleted_at = $dt;
            $article->save();

            Session::flash('success_message', 'Article supprimée avec succès!');

            return view('home');

        }catch(ModelNotFoundException $e){

            if ($e instanceof ModelNotFoundException)
            {

                Session::flash('error_message', 'une erreur c\'est! produit');

                return view('home');
            }
        }
    }
        

}
