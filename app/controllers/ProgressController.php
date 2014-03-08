<?php

class ProgressController extends BaseController
{
			
	public function showProgress()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('users.progress');	
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
}