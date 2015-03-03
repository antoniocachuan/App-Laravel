<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
			Schema::table('activities', function(Blueprint $table)
		{

			$table->longText('description_img1');
			$table->longText('description_img2');
			$table->longText('description_img3');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
				Schema::table('activities', function(Blueprint $table)
		{
			$table->string('paragraph1');
			$table->string('paragraph2');
		});
	}

}
