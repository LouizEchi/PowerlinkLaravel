<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentlistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment_list', function(Blueprint $table)
		{
			$table->increments('list_id');
			$table->integer('equipmentlist_id');
			$table->integer('equipment_id');
			$table->integer('equipment_qty');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipment_list');
	}

}
