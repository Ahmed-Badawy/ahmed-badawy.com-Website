<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WebsitesManager extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('website_manager', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title',100)->nullable();
			$table->string('desc',255)->nullable();
			$table->string('url')->nullable();
			$table->integer('sub')->nullable();
			$table->string('list',100)->default('General');
			$table->integer('visits')->default(0);
			$table->string('img')->default('_default');
			$table->timestamps();		
		});	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('website_manager');		
	}

}
