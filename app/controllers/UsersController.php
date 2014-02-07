<?php
 
class UsersController extends BaseController 
{
 	protected $layout = "layouts.main";
 	
 	public function getRegister() 
 	{
    	$this->layout->content = View::make('users.register');
	}
	
	public function postCreate(){
	
		 $validator = Validator::make(Input::all(), User::$rules);
 
		 if ($validator->passes()) {
		    $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 
		    return Redirect::to('login')->with('message', 'Thanks for registering!');
			} else {
		    	return Redirect::to('/')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
			}	
		}
	
	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post'));
	   $this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}
	
	public function getDashboard()
	{
		    $this->layout->content = View::make('home');	
	}
}

?>