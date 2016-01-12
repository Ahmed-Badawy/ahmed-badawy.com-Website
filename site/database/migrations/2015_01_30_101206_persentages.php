<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persentages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persentages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',100);
			$table->double('persent');
			$table->integer('persentage_id');
			$table->string('persentage_name');
			$table->integer('user_id')->default(0);
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
		Schema::drop('persentages');
	}

}
