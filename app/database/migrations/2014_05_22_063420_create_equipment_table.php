<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('equipment_id');
			$table->string('equipment_name',60);
			$table->integer('equipment_rentprice');
			$table->string('equipment_type',20);
			$table->integer('equipment_avail');
			$table->string('equipment_otsrsrc',3);
			$table->string('equipment_Image');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipment');
	}

}
