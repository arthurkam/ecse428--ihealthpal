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
			$foodEntry->name = Input::get('name');
			$foodEntry->quantity = Input::get('quantity');
			$foodEntry->calories = Input::get('calories');
			$foodEntry->fat = Input::get('fat');
			$foodEntry->sodium = Input::get('sodium');
			$foodEntry->carbohydrates = Input::get('carbohydrates');
			$foodEntry->fibre = Input::get('fibre');
			$foodEntry->sugars = Input::get('sugars');
			$foodEntry->protein = Input::get('protein');
			$foodEntry->vitaminA = Input::get('vitaminA');
			$foodEntry->vitaminC = Input::get('vitaminC');
			$foodEntry->calcium = Input::get('calcium');
			$foodEntry->iron = Input::get('iron');

			$foodEntry->save();
			
			return Redirect::to('diary');
		}	
		return Redirect::to('/')->with('message', 'Please log in first!');
	}


	public function showDiary()
	{
		Session::regenerate();
		
		if(Auth::check())
		{
			$id = Auth::user()->id;
			$food_entries = FoodEntry::where('uid', $id)->get();

			return View::make('users.diary')->with('food_entries', $food_entries);	
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}

}
?>
