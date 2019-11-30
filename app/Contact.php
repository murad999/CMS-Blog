<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'user_name','user_email','text_message'
	];

	public function getFeaturedAttribute($featured){
		return asset($featured);
	}




}
