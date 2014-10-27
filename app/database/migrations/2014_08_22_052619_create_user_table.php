<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{		
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->integer('points');
			$table->string('email');
			$table->string('name');
			$table->integer('ranking_mensual');
			$table->integer('ranking_semanal');
			$table->integer('ranking_total');
			$table->integer('total_badges');
			$table->integer('total_medals');
			$table->integer('total_campains');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('avatar');
			$table->string('lastLogin')->nullable();
			$table->string('remember_token')->nullable();
			$table->boolean('currentLogin')->nullable();
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
		Schema::drop('user');
	}

}
