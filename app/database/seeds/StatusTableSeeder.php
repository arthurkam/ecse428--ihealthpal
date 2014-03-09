<?php

class StatusTableSeeder extends Seeder{ 
	public function run()
	{ 
		//DB::table('status')->delete();
		Status::create(array(
			'id' 			=> '6',
			'weight' 		=> '100',
			'weight_unit'	=> 'Kg',
			'height'		=> '100',
			'height_unit'	=> 'Cm',
		));
	}
}