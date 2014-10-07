<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVegCheckToRsvpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rsvp', function(Blueprint $table)
		{
			//
            $table -> increments('id');
            $table -> string('guest1')->unique();
            $table -> string('email')->unique();
            $table->boolean('attending');
            $table->boolean('vegetarian');
            $table -> timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rsvp', function(Blueprint $table)
		{
			//
            Schema::drop('rsvp');
        });
	}

}
