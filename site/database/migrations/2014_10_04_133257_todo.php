<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title',100)->nullable();
			$table->string('desc',255)->nullable();
			$table->integer('inside')->nullable();
			$table->string('list',100)->default('main');
			$table->integer('done')->default(0);
			$table->integer('done_persentage')->nullable();
			$table->integer('vote')->default(0);
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
		Schema::drop('todos');		
	}

}
