<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Utility;

use DB;
use Input;
use Session;
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
        $articles = DB::table('articles')->get();
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
        //dd($request);
        //Save the candidate info
        $article = new Article(array(
                    'title'   => $request->get('title'),
                    'author_id' => $request->user()->id,
                    'type' => $request->get('type'),
                    'slug' => str_slug($request->get('title')), 
                    'body' => $request->get('desc'),                    
                    'published_at' => $dt,
                    'created_at' => $dt,
                    'updated_at' => $dt
                    ));
        $article->save();
        
        /*upload  to application*/
        if (Input::hasFile('media_url'))
        	{
        	    
                $file                  = $request->file('media_url'); // here is the uploaded file
                $destFolderName        = '';            // the name of the folder you want to keep your uploaded pics
                $updateMode            = 0;
                $tableName             = 'articles';               // the name of database where the data are coming from
                $objectId              = $article->id;             // here the id of the new object you just saved
                $imageName             = Utility::handleImages($file, $destFolderName, $objectId, $tableName, $updateMode);
                $article->media_url  = 'uploads/article'.$imageName;
                $article->save();
        	}    
        if($imageName == 'failed'){
            Session::flash('error_message', "Votre image doit avoir une taille d'au moins 120x136 pixel");
        }else{
            //Flash the user on action executed
            Session::flash('success_message', 'Article ajouté avec succès!');
        }
        

        //Session::flash('success_message', 'Article créer avec succès!');
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

        return view('single-article', compact('article', 'auth_user'));

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
        
        /*upload & resize image to application*/
        if (Input::hasFile('media_url'))
        	{
                $file                  = $request->file('media_url'); // here is the uploaded file
                $destFolderName        = '';            // the name of the folder you want to keep your uploaded pics
                $updateMode            = 1;
                $tableName             = 'articles';               // the name of database where the data are coming from
                $objectId              = $article[0]->id;             // here the id of the new object you just saved
                $imageName             = Utility::handleImages($file, $destFolderName, $objectId, $tableName, $updateMode); 
                
                if($imageName == $article[0]->media_url){
                    
                    $article[0]->media_url = $article[0]->media_url;
                    Session::flash('error_message', "Votre image doit avoir une taille d'au moins 120x136 pixel");
                    return redirect('home/');
                }
                                
                $article[0]->media_url = 'uploads/article'.$imageName;
                $article[0]->title = $request->input('title');
                $article[0]->slug  = str_slug($request->input('title'));
                $article[0]->body  = $request->input('body');
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
            }else{
                //$article->media_url = 'uploads/article'.$imageName;
                $article[0]->title = $request->get('title');
                $article[0]->slug = str_slug($request->get('title'));
                $article[0]->body = $request->get('body');
                $article[0]->updated_at = $dt;

                DB::table('articles')->update([
                    'title' => $article[0]->title,
                    'slug' => $article[0]->slug,
                    'body' => $article[0]->body,
                    'updated_at' => $article[0]->updated_at]);

                /*Flash the user on action executed*/
                $request->session()->flash('success_message', 'Mise à  jour du article effectuer avec succès!');
                return redirect('home/');
                                
            }  
	}

}
