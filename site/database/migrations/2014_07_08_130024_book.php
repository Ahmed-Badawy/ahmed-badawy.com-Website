<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Book extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->string('book_name');
			$table->string('cate');
			$table->string('name_in_server');
			$table->string('report')->default('false');
			$table->string('img');
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
		Schema::drop('books');		
	}

}
