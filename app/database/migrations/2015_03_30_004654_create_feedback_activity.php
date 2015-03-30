<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackActivity extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity_feedback', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->timestamps();
			$table->integer('starts');
			$table->integer('id_user');
			$table->integer('id_activity');
			$table->string('coment');
			
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
