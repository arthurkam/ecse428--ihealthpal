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

	public function saveExercises()
	{
		if(Auth::check()){
			
			return Redirect::to('exercises')->with('message', 'Your exercise has been saved!');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}
?>