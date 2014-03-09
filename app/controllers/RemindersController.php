<?php

class RemindersController extends BaseController {

	protected $layout = "layouts.main";

	
	public function goToReset()
	{
		$this->layout->content = View::make('password.reset');
	}
	
	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		$this->layout->content = View::make('password.remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		switch ($response = Password::remind(Input::only('email')))
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));

			case Password::REMINDER_SENT:
				return Redirect::back()->with('status', Lang::get($response));
		}
	}
	
	/**
	 * 
	 *
	 * @return Response
	 */
	public function checkUser()
	{
		$email = Input::get('email');
		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');
		
		$db_user = User::where('email', $email)->get();
		if (sizeof($db_user)=== 1 && $db_user[0]->firstname === $firstname){
			if ($db_user[0]->lastname === $lastname){
				$sq = $db_user[0]->security_question;
				return $sq;
			}
		}	
	$msg = "Inputed combination does not exist in the database!";
	App::abort(403, $msg);
	}
	
	
	public function checkSecurityQuestion()
	{
		$email = Input::get('email2');
		$answer = Input::get('security_answer');
		
		$db_user = User::where('email', $email)->get();
		if (sizeof($db_user)===1 && $db_user[0]->security_answer === $answer){
/* 			return "success"; */
			return View::make('password.reset');
		}	
	$msg = "Wrong answer!";
	App::abort(403, $msg);
	}	

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('password.reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
	
		$email = Input::get('email');
		$password = Input::get('password');
		$password_confirm = Input::get('password_confirmation');
		$db_user = User::where('email', $email)->get();
		if (sizeof($db_user)=== 1 && ($password === $password_confirm)){
			$password = Input::get('password');
			$db_user = User::where('email', $email)->get();
			$db_user[0]->password = Hash::make($password);
			
			$db_user[0]->save();
			return Redirect::to('/')->with('message',"Password reset successful");
		}	
		return Redirect::to('/password/remind');
	}
}