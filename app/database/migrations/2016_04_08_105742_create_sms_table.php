<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->string('title', 100);
			$table->string('slug', 100);
			$table->longtext('sms_content');
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
		Schema::drop('sms');
	}

}
