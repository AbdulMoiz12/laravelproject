<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebmastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webmasters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullname', 100)->unique();
			$table->string('city', 100);
			$table->string('mobile', 100);
			$table->string('email', 100)->unique();
			$table->string('webmaster_img')->unique;
			$table->string('status', 10);
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
		Schema::drop('webmasters');
	}

}
