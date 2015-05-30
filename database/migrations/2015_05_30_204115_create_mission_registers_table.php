<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionRegistersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mission_registers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('mission_id');
            $table->integer('user_id');
            $table->boolean('b_submit');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mission_registers');
	}

}
