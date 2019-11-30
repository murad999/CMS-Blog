<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function doctors(){
    	return $this->hasMany('App\Doctor');
    }
    public function blogs(){
    	return $this->hasMany('App\Blog');
    }
}
