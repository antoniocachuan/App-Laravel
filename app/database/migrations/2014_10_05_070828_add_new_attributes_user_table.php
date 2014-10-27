<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewAttributesUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user', function($table){
			$table->string('name');
			$table->integer('ranking_mensual');
			$table->integer('ranking_semanal');
			$table->integer('ranking_total');
			$table->integer('total_badges');
			$table->integer('total_medals');
			$table->integer('total_campains');
			$table->string('url_avatar');
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
