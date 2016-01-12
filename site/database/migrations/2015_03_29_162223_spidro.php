<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Spidro extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spidro_users', function(Blueprint $table) {
			$table->increments('id');
			$table->string("site_type");
			$table->string("site_id");
			$table->string("site_type_id");
			$table->string('email')->nullable();
			$table->string('name')->nullable();
			$table->string('avatar')->nullable();
			$table->string('gender')->nullable();
			$table->string('relationshipStatus')->nullable();
			$table->string('url')->nullable();

			$table->timestamps();		
		});
		Schema::create('spidro_ads', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ad_title');
			$table->string('desc');
			$table->string('cost');			
			$table->string('user_id');
			$table->string('cate');
			$table->string('sub_cate_1')->nullable();
			$table->string('sub_cate_2')->nullable();
			$table->string('sub_cate_3')->nullable();
			$table->string('year')->nullable();;
			$table->string('km')->nullable();;
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
		Schema::drop('spidro_users');
		Schema::drop('spidro_ads');
	}

}
