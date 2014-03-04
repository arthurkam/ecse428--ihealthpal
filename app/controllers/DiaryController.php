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
			$val  =$food->id;
			array_push($foods,array("label"=>$name,"value"=>$val));
		}
		// print_r($search);
		// $res = array("result"=>$foods);
		return json_encode($foods);
	}


	public function addToDiary(){
		//TO BE COMPLETED
	}

}
?>