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
//            table->string('title');
//            $table->string('slug')->nullable();
//            $table->text('body')->nullable();
//
//            $table->string('image')->nullable();
//            $table->integer('user_id');
//
			$table->increments('id');
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->integer('prize');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('user_id');
            $table->string('platform');
			$table->timestamps();
		});

        Schema::table('missions', function(Blueprint $table)
        {
            $table->boolean('status');
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
