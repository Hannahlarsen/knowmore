<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model {

		protected $fillable = [

			'title',
			'subtitle',
			'description',
			'type',
			'scope',
			'pricerange',
			'startime',
			'endtime',
			'active',
			'user_id',
			'sender_read',
			'receiver_read'


	];

}

