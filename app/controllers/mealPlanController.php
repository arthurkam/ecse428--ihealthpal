<?php

class mealPlanController extends BaseController {

public function showMealPlan()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;

			$goals = Goal::where('uid',$id)->get();
			$lastGoal= null;
			$latestStart = 0;
			foreach($goals as $goal){
			        if(strtotime($goal->created_at)>$latestStart){
			            $latestStart = strtotime($goal->created_at);
			            $lastGoal = $goal;
			        }
			    }
			
			$ret = array('lastGoal'=>$lastGoal,
				'goals'=>$goals);
			return View::make('users.mealPlan',$ret);
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>