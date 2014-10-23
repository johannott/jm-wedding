<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUniqueConstraintOnEmail extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('rsvp', function(Blueprint $table)
        {
            $table->dropUnique('rsvp_email_unique');
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
            $table->dropColumn('email');
        });
    }

}
