<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	// Route for the index page
	Route::any('/', array( 'as' => 'home', 'uses' => 'HomeController@showIndex' ));	
	
	// Route for the About page
	Route::any('about', array('uses' => 'HomeController@showAbout'));
	
	// Route for the Contact page
	Route::any('contact', array('uses' => 'HomeController@showContact'));
	
	// Route to show the login form
	Route::get('users/login', array('uses' => 'HomeController@showLogin'));

	// Route to process the form
	Route::post('users/login', array('uses' => 'HomeController@doLogin'));
	
	// Route to facebook login
	Route::get('login/facebook', array('uses' => 'HomeController@loginFacebook'));
	
	// Route for facebook callback
	Route::get('login/facebook/callback', function() {
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
});	
	// Route to the home page, after login
	Route::any('home', array('uses' => 'UsersController@getDashboard'));
	
	// Route to logout the current user
	Route::get('logout', array('uses' => 'HomeController@doLogout'));
	
	// Route to Goals page
	Route::any('goals', array('uses' => 'UsersController@showGoals'));

	// Route to the account settings, after login
	Route::any('settings', array('uses' => 'UsersController@showSettings'));
	
		// Route to the Diary page, after login
	Route::any('diary', array('uses' => 'UsersController@showDiary'));
	
	Route::controller('users', 'UsersController');

	// Route::post('deploy',array('uses' => 'HomeController@deploy'));
	Route::get('deploy',array('uses' => 'HomeController@deploy'));

	Route::get('BMI', array('uses' => 'UsersController@BMICalculator'));
	Route::post('BMI', array('uses' => 'UsersController@updateBMI'));
