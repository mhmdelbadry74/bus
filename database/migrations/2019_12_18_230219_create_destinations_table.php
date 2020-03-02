<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDestinationsTable extends Migration {

	public function up()
	{
		Schema::create('destinations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('city_id');
			$table->string('gps');
		});
	}

	public function down()
	{
		Schema::drop('destinations');
	}
}