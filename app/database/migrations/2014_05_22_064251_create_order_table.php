<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('order_id');
			$table->unsignedInteger('order_custid');
			
			$table->unsignedInteger('equipment_id');
			
			$table->unsignedInteger('order_agentid');
			
			$table->unsignedInteger('order_eventid');
				
			$table->unsignedInteger('order_employlistid');
			
			$table->date('ordersched_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}
