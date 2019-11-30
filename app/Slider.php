<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
	//use SoftDeletes;

	protected $fillable=[
		'title_slider','title_banner','featured_slider','featured_banner'
	];

	// public function getFeaturedAttributeSlider($featured){
	// 	return asset($featured);
	// }
	// public function getFeaturedAttributeBanner($featured){
	// 	return asset($featured);
	// }



	//protected $dates=['deleted_at'];

    // public function department(){
    // 	return $this->belongsTo('App\Department');
    // }




}
