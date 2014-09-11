<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePupilsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pupils', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pupilid', 5)->unique();
			$table->string('firstname');
			$table->string('lastname');
			$table->boolean('havework')->default(false);
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
		Schema::drop('pupils');
	}

}
