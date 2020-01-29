<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriverProfilesTable extends Migration {

	public function up()
	{
		Schema::create('driver_profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('driclient_id');
			$table->integer('city_id');
			$table->string('image');
			$table->enum('gender', array('male','fmale'));
			$table->float('rate');
			$table->integer('bloode_type_id');
			$table->string('img_id');
			$table->string('dl');
			$table->integer('car_id');
		});
	}

	public function down()
	{
		Schema::drop('driver_profiles');
	}
}