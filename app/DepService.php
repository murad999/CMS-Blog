<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DepService extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'title','content','department_id','featured'
	];

	public function getFeaturedAttribute($featured){
		return asset($featured);
	}



	//protected $dates=['deleted_at'];

    // public function category(){
    // 	return $this->belongsTo('App\Category');
    // }


    // public function tags(){
    // 	return $this->belongsToMany('App\Tag');
    // }


}
