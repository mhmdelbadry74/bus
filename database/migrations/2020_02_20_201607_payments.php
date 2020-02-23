<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('request_time');
			$table->string('img_payments');
			$table->string('request_img');
			$table->integer('client_profile_id');
			$table->integer('driver_profile_id');
			$table->integer('driclient_id');
            $table->integer('kid_id');
            $table->enum('statue', array('active','desactive'));

		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}
