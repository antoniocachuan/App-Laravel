<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateActivitiesTable extends Migration {

	public function up()
	{
		Schema::table('activities', function(Blueprint $table)
		{
			$table->string('url_badged');
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
			//
		});
	}

}
