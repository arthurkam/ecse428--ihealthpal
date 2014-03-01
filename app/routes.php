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
	
	// Route for the Resource page
	Route::any('resource', array('uses' => 'HomeController@showResource'));
	
	// Route for the Help page
	Route::any('help', array('uses' => 'HomeController@showHelp'));
	
	// Route to show the login form
	Route::get('users/login', array('uses' => 'HomeController@showLogin'));

	// Route to process the form
	Route::post('users/login', array('uses' => 'HomeController@doLogin'));
	
	// Route of reminding password
	Route::controller('password', 'RemindersController');
	
	// Route to facebook login
	Route::get('login/facebook', array('uses' => 'HomeController@loginFacebook'));
	
	// Route for facebook callback
	Route::get('login/facebook/callback', array('uses' => 'HomeController@callbackFacebook'));	
	// Route to the home page, after login
	Route::any('home', array('uses' => 'UsersController@getDashboard'));
	
	// Route to logout the current user
	Route::get('logout', array('uses' => 'HomeController@doLogout'));
	
	// Route to Goals page
	Route::any('goals', array('uses' => 'UsersController@showGoals'));
	
	// Route to set Goal
	Route::any('goals/set',array('uses' => 'UserController@setGoals'));

	// Route to the account settings, after login
	Route::any('settings', array('uses' => 'UsersController@showSettings'));
	
	// Route to update the info
	Route::any('users/update', array('uses' => 'UsersController@postUpdate'));
	
	// Route to the Diary page, after login
	Route::any('diary', array('uses' => 'UsersController@showDiary'));
	
	// Route to the Deleting account.
	Route::any('delete',array('uses' => 'UsersController@deleteAccount'));
	
	Route::controller('users', 'UsersController');

	// Route::post('deploy',array('uses' => 'HomeController@deploy'));
	Route::get('deploy',array('uses' => 'HomeController@deploy'));

	Route::get('BMI', array('uses' => 'UsersController@BMICalculator'));
	Route::post('BMI', array('uses' => 'UsersController@updateBMI'));
