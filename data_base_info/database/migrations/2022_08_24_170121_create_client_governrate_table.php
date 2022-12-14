<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientGovernrateTable extends Migration {

	public function up()
	{
		Schema::create('client_governrate', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('client_id')->unsigned();
			$table->integer('governrate_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('client_governrate');
	}
}