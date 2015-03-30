<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('level', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('level');
			$table->integer('limitI');
			$table->integer('limitS');
			$table->string('titleLevel');
			$table->integer('idMedal');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
