<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'name','phone','department_id','date','doctor_id'
	];

	public function getFeaturedAttribute($featured){
		return asset($featured);
	}



	//protected $dates=['deleted_at'];

    public function department(){
    	return $this->belongsTo('App\Department');
    }

     public function doctor(){
    	return $this->belongsTo('App\Doctor');
    }




}
