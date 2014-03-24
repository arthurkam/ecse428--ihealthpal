<?php

class ExercisesController extends BaseController {

	public function showExercises()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$uid = Auth::user()->id;
			$exercises = DB::table('exercises')->where('uid',$uid)->get();
			return View::make('users.exercises')->with('exercises',$exercises);	
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

	public function saveExercises()
	{
		if(Auth::check()){
			$id = Auth::user()->id;
			$exercise = new Exercise;
			$exercise->uid = $id;
			$exercise->exercise = Input::get('exercise');
			$exercise->weight = Input::get('weight');
			$exercise->sets = Input::get('sets');
			$exercise->reps = Input::get('reps');
			$exercise->save();
			return Redirect::to('exercises')->with('message', 'Your exercise has been saved!');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}
?>