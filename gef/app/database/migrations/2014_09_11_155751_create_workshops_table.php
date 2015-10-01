<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workshops', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('subtitle');
                        $table->longText('description');
			$table->string('teaser_image');
			$table->integer('freeplaces');
			$table->string('uri');
			$table->enum('wstype', ['normal','od','od.have.job','address'])->default('normal');
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
		Schema::drop('workshops');
	}

}
