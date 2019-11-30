<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Doctor;
use Session;
use DB;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $doctors = Doctor::with(['department'])->paginate(10);
        //$departments = Department::get();
        //dd($doctors);
        // $doctors = DB::table('doctors')
        //     ->join('departments', 'doctors.department_id', '=', 'departments.id') 
            
        //     ->get();

        // return View::make('admin.doctors.index', array(
        //     'doctors' => $doctors,
        //     'departments' => $departments
        //     ));

        return view('admin.doctors.index')->with('doctors',$doctors);
        //return view('admin.doctors.index')->withDoctors($doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        if($departments->count() == 0){

            Session::flash('info','You must have some departments and tags before attempting to create a post.');
            return redirect()->back();
        }

        return view('admin.doctors.create')->with('departments',Department::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[

            'name'=>'required|max:40',
            'featured'=>'required|image', 
            'designation'=>'required',
            'department_id'=>'required',
        ]);

        $featured= $request->featured;

        $featured_new_name= time().$featured->getClientOriginalName();

        $featured->move('uploads/doctors', $featured_new_name);

        $doctors = Doctor::create([

            'name'=>$request->name,
            'featured'=>'uploads/doctors/' . $featured_new_name,
            'designation'=>$request->designation,
            'department_id'=>$request->department_id,

        ]);

        

        Session::flash('success','Your Post was successfully save!');
        return redirect()->back();
        
        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctor::find($id);

        return view('admin.doctors.edit')->with('doctor',$doctor)
                                       ->with('departments',Department::all());
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
        //dd($request->all());
        //
        $this->validate($request,[

            'name'=>'required',
            'designation'=>'required',
            'department_id'=>'required'
        ]);

        $doctor=Doctor::find($id);

        if($request->hasFile('featured')){
            
            $featured= $request->featured;

            $featured_new_name= time().$featured->getClientOriginalName();

            $featured->move('uploads/doctors', $featured_new_name);

            $doctor->featured= 'uploads/doctors/' . $featured_new_name;

        }

        $doctor->name=$request->name;
        $doctor->designation=$request->designation;
        $doctor->department_id=$request->department_id;

        $doctor->save();

        Session::flash('success','The doctor has successfully updated');

        return redirect()->route('doctors');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor= Doctor::find($id);

        $doctor->delete();

        Session::flash('success','Your Post was successfully Deleted!');
        return redirect()->back();
    }

}
