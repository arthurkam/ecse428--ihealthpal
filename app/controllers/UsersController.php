<?php
 
class UsersController extends BaseController 
{
	 	
 	public function getRegister() 
 	{
    	return View::make('auth.register');
	}
	
	public function postCreate(){

		 $validator = Validator::make(Input::all(), User::$rules);
 
		 if ($validator->passes()) {
	      
	      $user = new User;
		  $user->firstname = Input::get('firstname');
		  $user->lastname = Input::get('lastname');
		  $user->email = Input::get('email');
		  $user->password = Hash::make(Input::get('password'));
		  $user->security_question = Input::get('security_question');
		  $user->security_answer = Input::get('security_answer');
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
		    return View::make('users.home', array('name' => Session::get('name')));	
	}

	public function BMICalculator()
	{
		Session::regenerate();
		if(Session::has('loggedIn')){
			return View::make('users.BMI',array('height'=>Session::get("height"),'weight'=>Session::get('weight'),'name' => Session::get('name')));
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
	
	public function showSettings()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('users.settings');	
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
		
	public function showProgress()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('users.progress');	
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function deleteAccount()
	{
		if(Auth::check())
		{
			$id = Auth::user()->id;
			$password=Input::get("password");
			$user = User::find($id);
			$email = $user->email;
			if (Auth::attempt(array('email' => $email, 'password' => $password)))
			{
				$user->delete();
				Auth::logout();
				return Redirect::to('/');
			}
			
			
		}
	}
	
	public function postUpdate()
	{
		if(Auth::check()){
			$user = Auth::user();

			$validator = Validator::make(
		 		array(	'firstname' => Input::get('firstname'),
		 				'lastname'  => Input::get('lastname'),
		 				'email'		=> Input::get('email'),
		 				'weight'	=> Input::get('weight'),
		 				'height'	=> Input::get('height')
		 				
		 		),
		 		array( 	'firstname' => 'required|min:3',
		 				'lastname'	=> 'required|min:3',
		 				// 'email'		=> 'required|email|unique:users',
		 				'weight'	=> 'required|numeric|min:0',
		 				'height'	=> 'required|numeric|min:0'
		 		)	
		 	);

			if($user->email != Input::get('email')){
				$validator2 = Validator::make(
				    array('email' => Input::get('email')),
				    array('email' => 'unique:users,email')
				);

				if($validator2->fails()){
					return Redirect::to('/settings')->with('message', 'The following errors occurred :')->withErrors($validator2)->withInput();
				}
			}


		 	if($validator->passes()){
				$user->firstname = Input::get('firstname');
				$user->lastname = Input::get('lastname');
				$user->email = Input::get('email');
				$user->height = Input::get('height');
				$user->weight = Input::get("weight");
		 		$user->save();

				Session::put('firstname',Auth::user()->firstname);
				Session::put('lastname',Auth::user()->lastname);
				Session::put('email',Auth::user()->email);
				Session::put('weight',Auth::user()->weight);
				Session::put('height',Auth::user()->height);

				return Redirect::to('/settings')->with('message',"Success! User information updated.");
		 	}
		}
		
		return Redirect::to('/settings')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
	}

}


