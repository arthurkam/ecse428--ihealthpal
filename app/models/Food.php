<?php

class Food extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'foods';


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the calories for the food.
	 *
	 * @return string
	 */
	public function getCalories()
	{
		return $this->calories;
	}
	
	/**
	 * Get the grams of fat for the food.
	 *
	 * @return string
	 */
	public function getGramsOfFat()
	{
		return $this->fat;
	}
	
	/**
	 * Get the grams of protein for the food.
	 *
	 * @return string
	 */
	public function getGramsOfProtein()
	{
		return $this->protein;
	}
	
	/**
	 * Get the grams of carbohydrates for the food.
	 *
	 * @return string
	 */
	public function getGramsOfCarbs()
	{
		return $this->carbohydrates;
	}

}