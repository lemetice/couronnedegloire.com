<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	

        //Get all articles
        //$articles = DB::table('articles')->get();
        
        
        return view('index');
	}
	/**
	 * Show the application actualites to the user.
	 *
	 * @return Response
	 */
	public function actualites()
	{	

        //Get all articles
        $articles = DB::table('articles')->get();
        
        
        return view('actualites', compact('articles'));
	}

	/**
	 * Show all articles on blog page.
	 *
	 * @return Response
	 */
	public function blog()
	{	

        //Get all articles
        $articles = DB::table('articles')->get();
        
        
        return view('blog', compact('articles'));
	}

}
