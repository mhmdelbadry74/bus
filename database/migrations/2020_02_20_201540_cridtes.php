<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cridtes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('cridtes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('date');
			$table->string('img_payments');
			$table->integer('client_profile_id');
		});
	}

	public function down()
	{
		Schema::drop('cridtes');
	}
}
