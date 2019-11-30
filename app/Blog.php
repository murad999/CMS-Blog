<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'title','content','department_id','featured','slug'
	];

	public function getFeaturedAttribute($featured){
		return asset($featured);
	}



	//protected $dates=['deleted_at'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }




}
