<?php

class DiaryController extends BaseController {

	public function getMatchingFood(){
		$term = Input::get( 'term' );
		$foods = array();

		$search = DB::query("
			select *
			from foods
			where match (name) 
				against ('+{$term}*' IN BOOLEAN MODE)
		");

		foreach ($search as $results => $food ){
			$foods[] = array(
				'id' => $food->id,
				'value' => $food->name,
			);
		}

		return json_encode ( $foods );
	}


	public function addToDiary(){
		//TO BE COMPLETED
	}

}