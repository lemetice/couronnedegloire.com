<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Application Routes protection
	|--------------------------------------------------------------------------
	| Protecting CRUD operations on article . Only signed in user(s) can view article page
	| 
	|
	*/
    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Get authenticated user
        $auth_user = $request->user();
        
        //Get all articles
        $articles = Article::all();
        //$candidates->setPath('home');return $articles
        
        return view('home', compact('articles', 'auth_user'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//get the current date and time
		
		$carbon = Carbon::now('Africa/douala');
		$dt = $carbon->format('Y-m-d H:i:s');
        
        //Save the candidate info
        $article = new Article(array(
                    'title'   => $request->get('title'),
                    'author_id' => Auth::user()->id,
                    'type' => $request->get('type'),
                    'body' => $request->get('desc'),
                    'media_url' => $request->get('media_url'),
                    'published_at' => $dt,
                    'created_at' => $dt,
                    'updated_at' => $dt
                    ));
        $article->save();
        
        /*upload & resize image to application
        if (Input::hasFile('photos'))
        	{
        	    
                $file                  = $request->file('photos'); // here is the uploaded file
                $destFolderName        = '';            // the name of the folder you want to keep your uploaded pics
                $updateMode            = 0;
                $tableName             = 'candidats';               // the name of database where the data are coming from
                $objectId              = $Article->id;             // here the id of the new object you just saved
                $imageName             = Utility::handleImages($file, $destFolderName, $objectId, $tableName, $updateMode);
                $Article->photos  = 'uploads/'.$imageName;
                $Article->save();
        	}    
        if($imageName == 'failed'){
            Session::flash('error_message', "Votre image doit avoir une taille d'au moins 120x136 pixel");
        }else{
            /*Flash the user on action executed
            Session::flash('success_message', 'Article ajouté avec succès!');
        }
        */
        return redirect('home');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
