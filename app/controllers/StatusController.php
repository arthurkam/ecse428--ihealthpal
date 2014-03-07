<?php

class StatusController extends BaseController
{
	public function showStatus()
	{
		if(Auth::check())
		{	
			return View::make('users.status');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function setStatus()
	{
		if(Auth::check())
		{
			$status = new Status;
			$status->id = Auth::user()->id;
			$status->weight = Input::get('weight');
			$status->weight_unit = Input::get('weight_unit');
			$status->height = Input::get('height');
			$status->height_unit = Input::get('height_unit');
			$status->save();
			
			return Redirect::to('status');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}