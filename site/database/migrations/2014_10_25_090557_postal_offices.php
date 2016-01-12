<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostalOffices extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postal_offices', function(Blueprint $table) {
			$table->increments('id');
			$table->string('area');
			$table->string('city');
			$table->string('office');
			$table->string('address');
			$table->integer('tel');
			$table->integer('local_id');
			$table->boolean('atm');
			$table->boolean('pos');
			$table->boolean('night_shift');
			$table->boolean('fast_mail');
			$table->boolean('full_window');
			$table->boolean('inner');
			$table->boolean('outer');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postal_offices');		
	}

}
