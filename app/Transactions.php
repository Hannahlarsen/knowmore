<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model {

	protected $fillable = [

		'buyerid',
		'sellerid',
		'value',
		'hours',
		'price',
		'currency',
		'comission',
		'confirmation',
		'rating'

	];

}
			