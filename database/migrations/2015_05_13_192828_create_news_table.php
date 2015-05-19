<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->text('content');
			$table->string('published');
			$table->integer('active');
			$table->string('picture');
			$table->timestamps();


			$table->foreign('user_id')
			->references('user_id')
			->on('user')
			->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news');
	}

}
