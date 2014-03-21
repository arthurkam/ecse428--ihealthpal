<?php

class AchievementsController extends BaseController {
// public function checkAchievements(){
// 	$currWeight  = Auth:user()->weight;
// 	$completedArray = array();
// 	foreach($achievements as $achievement){
// 		//if the achievement hasnt been completed, you check it
// 		if($achievement->completed===0 && $achievement->missed===0){
// 			//convert time to epoch time
// 			$eta = strtotime($achievement->eta);
// 			//if within time limit
// 			if($eta>time()){
// 				//if type==lose weight + currWeight is <= desired weight
// 				if($achievement->goal_type==="Lose" && $currWeight<=$achievements->weight){
// 					$achievement->completed=true;
// 					$achievement->save();
// 					array_push($completedArray,$achievement->id);
// 				}
// 				//if they successfully gain the desired of weight
// 				else if($achievement->goal_type==="Gain" && $currWeight>=$achievements->weight){
// 					$achievement->completed=true;
// 					$achievement->save();
// 					array_push($completedArray,$achievement->id);
// 				}
// 			}
// 			//user failed to achieve the goal
// 			else{
// 				$achievement->missed=TRUE;
// 				$achievement->save();
// 			}
// 		}
// 	}
// 	return $completedArray;

// }
public function showAchievements()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;
			//get all the gaols
			$achievements = Goal::where('uid',$id)->get();
			return View::make('users.achievements');
		}
		
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>