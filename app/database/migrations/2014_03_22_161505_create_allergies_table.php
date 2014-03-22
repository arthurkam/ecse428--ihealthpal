<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('allergies', function($table){
			$table->integer('uid');
			$table->string('Eggs');
			$table->string('Fish');
			$table->string('Milk');
			$table->string('Peanuts');
			$table->string('Shellfish');
			$table->string('Soya');
			$table->string('Wheat');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('allergies');
	}

}
