<?php

class GoalsController extends BaseController 
{
	
	public function showGoals()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;
			$goals = Goal::where('id', $id)->get();
  			
  			return View::make('users.goals')->with('goals',$goals);	
			
		}
			return Redirect::to('/')->with('message', 'Please log in first!');
	}
	public function setGoals()
	{
		$day_len = 86400;
		$month_len = 2592000;
		$year_len = 31536000;

		$validator = Validator::make(
			array(
				'weight' => Input::get('weight'),
				'time_interval'=>Input::get('time_interval'),			
			),
			array(
				'time_interval'=>'required|integer',
				'weight' => 'required|integer',
			)
		);
		if(Auth::check() && $validator->passes())
		{
			$goal = new Goal;
			$goal->uid = Auth::user()->id;
			$goal->goal_type = Input::get('goal_type');
			$goal->weight = Input::get('weight');
			$goal->weight_unit = Input::get('weight_unit');
			$goal->time_interval = Input::get('time_interval');
			$goal->time_unit = Input::get('time_unit');
			$goal->save();

			$achievement = new Achievement;
			$achievement->uid = Auth::user()->id;
			$weightMultiplier = Input::get("goal_type")==="Lose"?-1:1;
			//weight is goal weight
			$achievement->weight = $weightMultiplier*Input::get('weight')+Auth::user()->weight;
			$achievement->oWeight = Auth::user()->weight;
			$achievement->weight_unit = Input::get('weight_unit');
			$achievement->goal_type = Input::get('goal_type');

			// ugly ternary operator chain, dont copy me.
			$endDate = ((int)Input::get('time_interval'))*
				(Input::get('time_unit')==='Days'?$day_len:(
						Input::get('time_unit')==='Months'?$month_len:
							$year_len));
			$endDate+=time();
			$achievement->start_date = date( 'Y-m-d H:i:s', time());
			$achievement->eta = date( 'Y-m-d H:i:s', $endDate);

			$achievement->completed = false;
			$achievement->missed = false;
			$achievement->save();
			$test = AchievementHelper::checkAchievements();
			return Redirect::to('goals');
		}	
		else if(Auth::check() && $validator->fails()){
			return Redirect::to('goals')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}

