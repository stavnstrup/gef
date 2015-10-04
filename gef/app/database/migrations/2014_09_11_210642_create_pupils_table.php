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
			$table->string('pupilid', 5);
			$table->string('firstname');
			$table->string('lastname');
			$table->boolean('ODselected')->default(false);
			$table->boolean('havework');
			$table->integer('phone')->unsigned();
			$table->string('email');
                        $table->string('workplace');
			$table->string('road');
			$table->integer('zip')->unsigned();
                        $table->string('town');
                        $table->integer('workshop_id')->unsigned();
			$table->foreign('workshop_id')->references('id')->on('workshops');
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
