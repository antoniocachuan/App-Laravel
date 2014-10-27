<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankingTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ranking_total', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_usuario');
			$table->integer('puesto');
			$table->integer('puntaje');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ranking_total');
	}

}
