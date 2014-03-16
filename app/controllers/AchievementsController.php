<?php

class AchievementsController extends BaseController {

public function showAchievements()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('achievements');
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>