<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Actors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('real_name')->nullable();
			$table->string('img')->nullable();
			$table->string('hight')->nullable();
			$table->string('born')->nullable();
			$table->string('died')->nullable();
			$table->string('country')->nullable();
			$table->string('country_flag')->nullable();
			$table->string('origin')->nullable();
			$table->string('origin_flag')->nullable();
			$table->string('residing')->nullable();
			$table->string('residing_flag')->nullable();
			$table->string('marital_status')->nullable();
			$table->integer('rate')->default(0);
			$table->integer('rate_count')->default(0);
			$table->string('tags')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actors');		
	}

}
