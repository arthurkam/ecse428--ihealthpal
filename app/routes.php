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
	
	// route to show the login form
	Route::get('login', array('uses' => 'HomeController@showLogin'));

	// route to process the form
	Route::post('login', array('uses' => 'HomeController@doLogin'));
	
	// route to the home page, after login
	Route::any('home', array('uses' => 'UsersController@getDashboard'));
	
	// route to logout the current user
	Route::get('logout', array('uses' => 'HomeController@doLogout'));
	
	Route::controller('users', 'UsersController');

	// Route::post('deploy',array('uses' => 'HomeController@deploy'));
	Route::get('deploy',array('uses' => 'HomeController@deploy'));

	Route::get('BMI', array('uses' => 'UsersController@BMICalculator'));
	Route::post('BMI', array('uses' => 'UsersController@updateBMI'));
