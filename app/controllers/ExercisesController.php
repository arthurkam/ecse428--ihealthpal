<?php

class ExercisesController extends BaseController {

public function showExercises()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			return View::make('users.exercises');
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>