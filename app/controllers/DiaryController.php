<?php

class DiaryController extends BaseController {

	public function showMatchingFoods() {
		return View::make('found_foods');	
	}

	public function getMatchingFood(){
		$term = Input::get( 'term' );

		$foods = array();

		$search = DB::select("
			select *
			from foods
			where match (name) 
				against ('+{$term}*' IN BOOLEAN MODE)
		");

		foreach ($search as $results => $food ){
			// $foods[$food->id] = $food->name;
			$name = $food->name;
			// $val  =array('id'=>$food->id);
			// print_r(get_object_vars);
			array_push($foods,array("label"=>$name,"id"=>get_object_vars($food)));
		}
		// print_r($search);
		// $res = array("result"=>$foods);
		return json_encode($foods);
	}


	public function addToDiary(){
		if(Auth::check())
		{
			$foodEntry = new FoodEntry;
			$foodEntry->uid = Auth::user()->id;
			$foodEntry->foodname = Input::get('food');
			$foodEntry->save();
			
			return Redirect::to('diary');
		}	
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>