<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('subscription', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_profile_id');
			$table->integer('driver_profile_id');
            $table->integer('kid_id');
           

		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}
