<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $temp ="upload/evang/article1.png";
        //Save the candidate info
        $article = new Article(array(
                    'title'   => $request->get('title'),
                    'author_id' => $request->user()->id,
                    'type' => $request->get('type'),
                    'body' => $request->get('desc'),
                    'media_url' => $temp,
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

        Session::flash('success_message', 'Article créer avec succès!');
        return redirect('home');
	}


}
