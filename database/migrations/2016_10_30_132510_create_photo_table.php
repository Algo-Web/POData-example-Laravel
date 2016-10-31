<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->binary('Content', 16777215);
			$table->string('Rel-Type')->nullable();
			$table->integer('Rel-ID')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photo');
	}

}
