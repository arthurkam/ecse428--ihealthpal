<?php

class StatusController extends BaseController
{
	public function showStatus()
	{
		if(Auth::check())
		{	
			$id = Auth::user()->id;
			$status = Status::find($id);
			return View::make('users.status')->with('status', '$status');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function setStatus()
	{
		if(Auth::check())
		{
			$status = new Status;
			$status->id = Auth::user()->id;
			$status->weight = Input::get('weight');
			$status->weight_unit = Input::get('weight_unit');
			$status->height = Input::get('height');
			$status->height_unit = Input::get('height_unit');
			$status->save();

			$user = Auth::user();
			$user->height = Input::get('height');
			$user->weight = Input::get("weight");
			$user->save();
			$test = AchievementHelper::checkAchievements();
			if(count($test)>0){
				return Redirect::to('status')->with('message',"Congratulations! You have completed a goal!");
			}
			return Redirect::to('status');
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function setAllergy()
	{	
		if(Auth::check())
		{		
			$id = Auth::user()->id;
			$numOfUser = DB::table('allergies')->where('uid',$id)->count();
			if($numOfUser != 0){
				DB::table('allergies')->where('uid', $id)->update(array(
		            'Eggs' => Input::get('eggs'), 
		            'Fish' => Input::get('fish'),
		            'Milk' => Input::get('milk'),
		            'Peanuts' => Input::get('peanuts'),
		            'Shellfish' => Input::get('shellfish'),
		            'Soya' => Input::get('soya'),
		            'Wheat' => Input::get('wheat')
		            	)
				);
			}
			else{
				$allergy = new Allergy;
		 		$allergy->uid = Auth::user()->id;
		 		$allergy->Eggs = Input::get('eggs');
		 		$allergy->Fish = Input::get('fish');
		 		$allergy->Milk = Input::get('milk');
		 		$allergy->Peanuts = Input::get('peanuts');
		 		$allergy->Shellfish = Input::get('shellfish');
		 		$allergy->Soya = Input::get('soya');
		 		$allergy->Wheat = Input::get('wheat');
		 		$allergy->save();
			}
		return Redirect::to('status')->with('message', "You have set your allergies");
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
	
	public function setDisease()
	{
		if(Auth::check()) {
			$id = Auth::user()->id
			$numOfUser = DB:table('diseases')->where('uid',$id)->count();
			if($numOfUser != 0) {
				DB::table('diseases')->where('uid', $id)->update(array(
					'Fibromyalgia' => Input::get('Fibromyalgia'), 
					'Diabetes' => Input::get('Diabetes'),
					'Depression' => Input::get('Depression'),
					'Metabolic Syndrome' => Input::get('Metabolic Syndrome'),
					'Binge-eating Disorder' => Input::get('Binge-eating Disorder'),
					'Adult ADHD' => Input::get('Adult ADHD'),
					)
				);
			}
			else {
				$disease = new Disease;
				$disease->uid = Auth::user()->id;
				$disease->Fibromyalgia = Input::get('Fibromyalgia');
				$disease->Diabetes = Input::get('Diabetes');
				$disease->Depression = Input::get('Depression');
				$disease->Metabolic = Input::get('Metabolic syndrome');
				$disease->Binge = Input::get('Binge-eating disorder');
				$disease->ADHD = Input::get('Adult ADHD');
			}
			return Redirect::to('status')->with('message', "You have set your diseases");
		}
		return Redirect::to('/')->with('message', 'Please log in first!');
	}
}