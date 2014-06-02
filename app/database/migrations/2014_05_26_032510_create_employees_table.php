<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
		    $table->unsignedInteger('employee_id');
			$table->string('employee_ln',60);
			$table->string('employee_name',60);
			$table->char('employee_mi');
			$table->string('employee_type',10);
			$table->date('employee_birthdate');
			$table->string('employee_contact',20);
			$table->string('employee_WorkSched',15);
			$table->string('employee_otsrsrc',3);
			$table->string('employee_Image');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
