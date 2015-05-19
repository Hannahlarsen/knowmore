<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model {

	protected $fillable = [

			'buyerid',
			'sellerid',
			'rating',
			'comment',
			'hours',
			'recommended'

	];

}
