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
			$table->float('rate')->nullable();
			$table->integer('age')->nullable();
			$table->integer('bloode_type_id')->nullable();
			$table->string('nidimg')->nullable();
			$table->string('dl')->nullable();
			$table->integer('car_id')->nullable();
			$table->enum('statue', array('بداية الرحلة','لم يتم بداء الرحلة بعد','بانتظار تفغيل الحساب'))->nullable();

		});
	}

	public function down()
	{
		Schema::drop('driver_profiles');
	}
}