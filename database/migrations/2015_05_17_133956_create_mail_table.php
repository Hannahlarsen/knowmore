<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Mails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('sender_id')->unsigned();
			$table->integer('receiver_id')->unsigned();
			$table->string('sender_name');
			$table->string('receiver_name');
			$table->string('headline');
			$table->text('content');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Mails');
	}

}
