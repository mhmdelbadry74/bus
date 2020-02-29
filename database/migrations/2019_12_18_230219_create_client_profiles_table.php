<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientProfilesTable extends Migration {

	public function up()
	{
		Schema::create('client_profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('driclient_id');
			$table->string('image');
			$table->integer('bloode_type_id');
			$table->integer('age')->nullable();
			$table->string('home_gps');
		});
	}

	public function down()
	{
		Schema::drop('client_profiles');
	}
}