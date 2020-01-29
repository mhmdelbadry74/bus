<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	public function up()
	{
		Schema::create('cars', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('driclient_id');
			$table->string('img1', 191);
			$table->string('img2', 191);
			$table->string('img3', 191);
			$table->string('type', 191);
			$table->string('modal', 191);
			$table->integer('passenger');
			$table->string('car_number', 191);
			$table->string('lc', 191);
			$table->float('price');
			$table->enum('statue', array('active','desactive'));
		});
	}

	public function down()
	{
		Schema::drop('cars');
	}
}