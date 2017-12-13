<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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


	/**
	 * Contact us .
	 *
	 * @return Response
	 */
	public function contactUs(Request $request)
	{

		//define sender
		$this->sender_email = $request->get('email');

		//Send mail to Lacouronnedegloire.org
		Mail::send('emails.contactus', [
			'name' => 'MEICG',
			'sender_name' => $request->get('name'),
			'sender_message' => $request->get('message'),
			'sender_tel' =>  $request->get('tel'),
			'sender_email' =>  $request->get('email')
		],
			function($message){

				$message->to('support@lacouronnedegloire.org', 'MEICG')->subject('La Couronne de Gloire: Réquette Prière');
			});

		$success_message ='<span style="background-color: #A7C139; border-radius: 10px; -webkit-border-radius: 8px; color: #fff; padding: 0px 10px;">Thanks for contacting us. You will get a reply within 24hrs</span>';

		
		return view('contacts', compact('success_message'));
	}

}
