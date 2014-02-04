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
		  $user->save();
 
		  return Redirect::to('users/login')->with('message', 'Thanks for registering!');
	   
	   } else {
		   return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		   }
	 }
	
	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post'));
	}
}

