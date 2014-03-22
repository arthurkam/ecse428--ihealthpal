<?php

class StatusController extends BaseController
{
	public function showStatus()
	{
		if(Auth::check())
		{	
			$id = Auth::user()->id;
			$status = Status::find($id);
			return View::make('users.status')->with('status', '$status');
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

			$user = Auth::user();
			$user->height = Input::get('height');
			$user->weight = Input::get("weight");
			$user->save();
			$test = AchievementHelper::checkAchievements();

			return Redirect::to('status');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}