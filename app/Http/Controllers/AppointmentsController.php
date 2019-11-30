<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Doctor;
use App\Appointment;

use Session;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments= Appointment::where(['status'=>1])->with(['department','doctor'])->paginate(10);
        return view('admin.appointments.index')->with('appointments',$appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
//dd($request);
        $this->validate($request,[
            'name'=>'required',
            'doctor_id'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'department_id'=>'required',
        ]);
        
        $appoinment= new Appointment;

        $appoinment->name=$request->name;
        $appoinment->doctor_id=$request->doctor_id;
        $appoinment->phone=$request->phone;
        $appoinment->date=$request->date;
        $appoinment->department_id=$request->department_id;
        $appoinment->status=1;
        $appoinment->save();
        Session::flash('success','Your Appointment was successfully Added!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment=Appointment::find($id);
       
        $appointment->status=0;
        $appointment->save();
        Session::flash('success','Your Appointment was successfully Done!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
