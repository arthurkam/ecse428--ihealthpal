<?php

class ProgressController extends BaseController
{
			
	public function showProgress()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;
      		$status = Status::where('id', $id)->get();
			return View::make('users.progress')->with('status',$status);	
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
}