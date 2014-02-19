<?php
 
class UsersController extends BaseController 
{
 	protected $layout = "layouts.main";
 	
 	public function getRegister() 
 	{
    	$this->layout->content = View::make('users.register');
	}
	
	public function postCreate(){
		//$this->layout->content = View::make('users.create');

		 $validator = Validator::make(Input::all(), User::$rules);
 
		 if ($validator->passes()) {
	      
	      $user = new User;
		  $user->firstname = Input::get('firstname');
		  $user->lastname = Input::get('lastname');
		  $user->email = Input::get('email');
		  $user->password = Hash::make(Input::get('password'));
		  $user->height =0;
		  $user->weight =0;
		  $user->save();
 
		  return Redirect::to('/')->with('message', 'Thanks for registering!');
	   
	   } else {
		   return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		   }
	 }
	
	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post','only'=>array('postCreate')));
	   $this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}
	
	public function getDashboard()
	{
		Session::regenerate();
		    $this->layout->content = View::make('home', array('name' => Session::get('name')));	
	}

	public function BMICalculator()
	{
		Session::regenerate();
		if(Session::has('loggedIn')){
			$this->layout->content = 	View::make('BMI',array('height'=>Session::get("height"),'weight'=>Session::get('weight'),'name' => Session::get('name')));
			return;
			}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function updateBMI()
	{
		Session::regenerate();

		if(Session::has('loggedIn')){
			$user = Auth::user();
			$user->height = Input::get('height');
			$user->weight = Input::get("weight");
			$user->save();
			Session::put('weight',Auth::user()->weight);
			Session::put('height',Auth::user()->height);
			return "200";

		}
		// return "error in process your request";
		return "404";
	}
	
	public function showGoals()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$this->layout->content = View::make('goals');	
			return;
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}

	public function showSettings()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$this->layout->content = View::make('users.settings');	
			return;
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function showDiary()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$this->layout->content = View::make('diary');	
			return;
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
}


