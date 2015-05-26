<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('subtitle')->nullable();
			$table->text('description')->nullable();
			$table->string('type')->nullable();
			$table->text('scope')->nullable();
			$table->string('pricerange')->nullable();
			$table->date('starttime')->nullable();
			$table->date('endtime')->nullable();
			$table->integer('active');
			$table->integer('user_id')->unsigned();
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
		Schema::drop('projects');
	}

}
