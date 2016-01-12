<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SellingManager extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('selling_manager_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_name');
			$table->string('product_img')->default("product_avatar.jpg");
			$table->integer('count')->nullable();
			$table->integer('sort_order')->default(999);
			$table->string('buy_cost')->nullable();
			$table->string('sell_cost')->nullable();
			$table->string('desc')->nullable();
			$table->string("cate")->default("general");
			$table->timestamps();
		});
		Schema::create('selling_manager_invoice', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('customer_name');
			$table->string('customer_phone');
			$table->string('over_all_cost');
			$table->string('discount');
			$table->string('final_over_all_cost');
			$table->text('desc');
			$table->timestamps();
		});
		Schema::create('selling_manager_invoice_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('product_id');
			$table->string('product_name');
			$table->integer('invoice_id');
			$table->integer('order_number');
			$table->string('buy_cost');
			$table->string('sell_cost');
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
		Schema::drop('selling_manager_products');
		Schema::drop('selling_manager_invoice');
		Schema::drop('selling_manager_invoice_items');
	}

}
