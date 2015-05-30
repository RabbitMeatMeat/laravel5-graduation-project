<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('missions', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->integer('prize');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('user_id');
            $table->string('platform');
            $table->boolean('status');
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
		Schema::drop('missions');
	}

}
