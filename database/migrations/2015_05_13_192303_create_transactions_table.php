<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('buyerid');
			$table->integer('sellerid');
			$table->decimal('value');
			$table->decimal('hours');
			$table->decimal('price');
			$table->string('currency');
			$table->decimal('comission');
			$table->integer('confirmation');
			$table->string('rating');
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
		Schema::drop('transactions');
	}

}
