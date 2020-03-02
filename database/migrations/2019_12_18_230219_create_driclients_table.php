<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriclientsTable extends Migration {

	public function up()
	{
		Schema::create('driclients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191)->nullable();
			$table->string('nid', 191)->nullable();
			$table->bigInteger('phone')->nullable();
			$table->enum('gender', array('male','fmale'))->nullable();
			$table->string('email', 191)->nullable();
			$table->string('city_id', 191)->nullable();
			$table->enum('statue', array('active','desactive'))->nullable();
			$table->enum('type', array('client','driver'))->nullable();
			$table->string('api_token', 60)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('driclients');
	}
}