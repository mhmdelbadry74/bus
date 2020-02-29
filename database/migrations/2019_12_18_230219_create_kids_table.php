<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKidsTable extends Migration {

	public function up()
	{
		Schema::create('kids', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('age');
			$table->integer('bloode_type_id');
			$table->enum('gender', array('male','fmale'));
			$table->integer('destination_id');
			$table->string('image');
			$table->integer('client_profile_id');
		});
	}

	public function down()
	{
		Schema::drop('kids');
	}
}