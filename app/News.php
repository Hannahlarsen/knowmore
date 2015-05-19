<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model {


	protected $fillable = [

		'title',
		'name', 
		'user_id', 
		'published',
		'active',
		'picture',
		'content'


	];

	protected $dates =['published'];

	public function setPublishedAttribute($date)
	{

		$this->attributes['published'] = Carbon::createFromFormat('Y-d-m', $date);

	}

	public function scopePublished($query) 
	{
		$query->where('published', '<=', Carbon::now());
	}

	public function scopeUnpublised($query) 
	{
		$query->where('published', '>=', Carbon::now());
	}

	public function user() 
	{
		return $this->belongsTo('App\Users');
	}


}
