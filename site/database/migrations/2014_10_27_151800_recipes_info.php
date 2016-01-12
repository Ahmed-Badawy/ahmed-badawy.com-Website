<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecipesInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes_info', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('recipe_orgin');
			$table->integer('num');
			$table->string('difficulty');
			$table->string('price');
			$table->integer('prepare_time');
			$table->integer('cook_time');
			$table->text('components');
			$table->text('prepreation_method');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes_info');		
	}

}
