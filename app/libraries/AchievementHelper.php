<?php
class AchievementHelper{
    public static function checkAchievements(){
        $currWeight  = Auth::user()->weight;
        $completedArray = array();
        $id = Auth::user()->id;
        $achievements = Achievement::where('uid',$id)->get();
        foreach($achievements as $achievement){
            //if the achievement hasnt been completed, you check it
            // echo(($achievement->completed==0 && $achievement->missed==0)?'true':"false");
            if($achievement->completed==0 && $achievement->missed==0){
                //convert time to epoch time
                $eta = strtotime($achievement->eta);
                //if within time limit
                if($eta>time()){
                    //if type==lose weight + currWeight is <= desired weight
                    if($achievement->goal_type==="Lose" && $currWeight<=($achievement->weight)){
                        $achievement->completed=true;
                        $achievement->completedDate = date( 'Y-m-d H:i:s', time());
                        $achievement->save();
                        array_push($completedArray,$achievement->id);
                    }
                    //if they successfully gain the desired of weight
                    else if($achievement->goal_type==="Gain" && ($currWeight>=$achievement->weight)){
                        $achievement->completed=true;
                        $achievement->completedDate = date( 'Y-m-d H:i:s', time());

                        $achievement->save();
                        array_push($completedArray,$achievement->id);
                    }
                }
                //user failed to achieve the goal
                else{
                    $achievement->missed=TRUE;
                    $achievement->save();
                }
            }
        }
        return $completedArray;

    }
}
?>