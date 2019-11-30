<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // public function posts(){
    // 	return $this->hasMany('App\Post');
    // }

    protected $fillable=[
		'title','description','icon',
	];
}
