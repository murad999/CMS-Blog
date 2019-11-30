<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'name','designation','department_id','featured'
	];

	public function getFeaturedAttribute($featured){
		return asset($featured);
	}



	//protected $dates=['deleted_at'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }


    // public function tags(){
    // 	return $this->belongsToMany('App\Tag');
    // }


}
