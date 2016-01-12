<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Porn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('porn', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title',500);
			$table->string('desc',1000);
			$table->string('full_path',1000);
			$table->integer('rating')->default(0);
			$table->string('tags',2000);//json
			$table->string('actors',2000);//json
			$table->integer('file_size');
			$table->integer('last_modified');
			$table->string('ext',5);
			$table->string('features',1000);//json
			$table->string('main_cate',100);
			$table->string('sub_cate1',100)->nullable();
			$table->string('sub_cate2',100)->nullable();
			$table->string('sub_cate3',100)->nullable();
			$table->string('sub_cate4',100)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('porn');		
	}

}
