<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->text('description')->nullable();
			$table->string('skills')->nullable();
			$table->integer('active')->nullable();
			$table->string('email')->unique();
			$table->string('name');
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps('');	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
