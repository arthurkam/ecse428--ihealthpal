<?php

class HomeController extends BaseController {
	  
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
		Session::regenerate();
		if(Session::has('loggedIn')){
			return Redirect::to('home');
		}
		return View::make('index');
	}
	
	public function deploy()
	{
		return View::make('deploy');
	}
	
	public function showAbout()
	{
		return View::make('about');	
	}
	
	public function showContact()
	{		
		return View::make('contact');
	}
	
	public function showLogin()
	{
		// show the form
		return View::make('users/login');
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
			return Redirect::to('users/login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// now lets create session
				Session::put('name',Auth::user()->firstname);
				Session::put('loggedIn',true);
				Session::put('weight',Auth::user()->weight);
				Session::put('height',Auth::user()->height);
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::to('home');
				
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('users/login');

			}

		}
	}
	
	public function loginFacebook()
	{
		$facebook = new Facebook(Config::get('facebook'));	
		$params = array(
			'redirect_uri'=>url('/login/facebook/callback'),
			'scope'=>'email',
		);
		return Redirect::to($facebook->getLoginUrl($params));
	}
	
	public function callbackFacebook()
	{
	    $code = Input::get('code');
	    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
	 
	    $facebook = new Facebook(Config::get('facebook'));
	    $uid = $facebook->getUser();
	 
	    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');
	 
	    $me = $facebook->api('/me');
	 
	    $profile = Profile::whereUid($uid)->first();
	    if (empty($profile)) {
	 
	        $user = new User;
	        $user->firstname = $me['first_name'];
	        $user->lastname = $me['last_name'];
	        $user->email = $me['email'];
	        //$user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';
	 
	        $user->save();
	 
	        $profile = new Profile();
	        $profile->uid = $uid;
	        $profile->username = $me['username'];
	        $profile = $user->profiles()->save($profile);
	    }
	 
	    $profile->access_token = $facebook->getAccessToken();
	    $profile->save();
	 
	    $user = $profile->user;
	 
	    Auth::login($user);
	 
	    return Redirect::to('/')->with('message', 'Logged in with Facebook');
		}
	
	public function doLogout()
	{
		Session::flush();
		Auth::logout();
		// redirect the user to the login screen
		return Redirect::to('/')->with('message', 'Your are now logged out!'); 	
	}
}