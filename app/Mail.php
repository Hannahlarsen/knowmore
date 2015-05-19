<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model {

	protected $fillable = [
	'content',
	'headline', 
	'sender_id',
	'receiver_id',
	'sender_name',
	'receiver_name'

	];

}
