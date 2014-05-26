<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package', function(Blueprint $table)
		{
			$table->increments('pkg_id');
			$table->integer('pkg_equiplistid');
			$table->integer('pkg_price');
			$table->integer('pkg_discount');
			$table->string('pkg_name',15);
		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('package');
	}

}
