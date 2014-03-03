<?php

class HomeController extends BaseController {
	  
	protected $layout = "layouts.main";
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function showIndex()
	{

		if(Auth::check()){
		
			return Redirect::to('home');
		}
		$this->layout->content = View::make('index');
	}
	
	public function deploy()
	{
		return View::make('deploy');
	}
	
	public function showAbout()
	{
		return View::make('common.about');	
	}
	
	public function showContact()
	{		
		return View::make('common.contact');
	}

	public function showResource()
	{		
		return View::make('common.resource');
	}

	public function showHelp()
	{		
		return View::make('common.help');
	}
	
	public function showLogin()
	{
		// show the form
		return View::make('auth/login');
	}
		public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('auth/login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata) || Auth::check()) {

				// validation successful!
				// now lets create session
				Session::put('name',Auth::user()->firstname);
				Session::put('loggedIn',true);
				Session::put('weight',Auth::user()->weight);
				Session::put('height',Auth::user()->height);
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('home')->with('Success', 'You are already logged in!');
				
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('auth/login');

			}

		}
	}
	
	public function doLogout()
	{
		Session::flush();
		Auth::logout();
		// redirect the user to the login screen
		return Redirect::to('/')->with('message', 'Your are now logged out!'); 	
	}
}