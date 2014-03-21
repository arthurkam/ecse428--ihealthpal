<?php

class AchievementsController extends BaseController {
public function checkAchievements(){
	$currWeight  = Auth:user()->weight;
	foreach($achievements as $achievement){
		//if the achievement hasnt been completed, you check it
		if($achievement->completed===0 && $achievement->missed===0){
			$eta = $achievement->eta;
		}
	}
}
public function showAchievements()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;
			//get all the gaols
			$achievements = Goal::where('uid',$id)->get();
			foreach($achievements as $achievement){
				
			}
			return View::make('users.achievements');
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>