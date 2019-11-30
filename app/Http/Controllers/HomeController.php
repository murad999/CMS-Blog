<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use App\DepService;
use App\Service;
use App\About;
use App\Slider;
use App\Department;
use App\Doctor;
use App\Blog;
use App\Appointment;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with('doctors',Doctor::count())
                           ->with('departments',Department::count())
                           ->with('appointments',Appointment::count())
                           ->with('users',User::count())
                           ->with('blogs',Blog::count());
    }
}
