<?php namespace App\Http\Controllers;

use App\Post;
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
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$postAll	= Post::where('category_id','=',1)->orderBy('created_at','desc')->limit(4)->get();
		$postnews	= Post::where('category_id','=',2)->orderBy('created_at','desc')->limit(4)->get();
		$postprog	= Post::where('category_id','=',3)->orderBy('created_at','desc')->limit(3)->get();
		$posthruaite	= Post::where('category_id','=',4)->orderBy('created_at','desc')->limit(3)->get();
		return view('welcome',compact('postAll','postnews','postprog','posthruaite'));
	}

}
