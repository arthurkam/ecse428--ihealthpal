<?php

class mealPlanController extends BaseController {

public function showMealPlan()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('users.mealPlan');
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>