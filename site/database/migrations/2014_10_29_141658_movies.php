<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('franchises');
			$table->string('attach_files',5000);
			$table->string('link_id');
			$table->integer('year');
			$table->integer('rank');
			$table->string('genre',300);
			$table->string('sub_genres',1000);
			$table->string('runtime',300);
			$table->string('rating');
			$table->string('players',2000);
			$table->string('production_budget');
			$table->string('studio');
			$table->integer('gross1');
			$table->integer('gross2');
			$table->integer('opening1');
			$table->integer('opening2');
			$table->string('open');
			$table->string('close');
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');		
	}

}
