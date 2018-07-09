<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new(){

    	$datas=[
    		'id'=>10,
    		'name'=>'Murad',
    		'email'=>'murad@gmail.com',
    		'password'=>'12345',
    	];
    	//dd($data);

    	return view('new')->withDatas($datas);
    }
}
