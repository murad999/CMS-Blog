<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // public function posts(){
    // 	return $this->hasMany('App\Post');
    // }

    protected $fillable=[
		'title','content','featured',
	];
}
