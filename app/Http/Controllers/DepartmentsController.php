<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

use Session;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments= Department::paginate(10);
       return view('admin.departments.index')->withDepartments($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request,[
            'title'=>'required'
        ]);
        
        $department= new Department;

        $department->title=$request->title;
        $department->save();
        Session::flash('success','Your Department was successfully save!');
        return redirect()->route('departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $category=Category::find($id);
        // return view('admin.categories.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $department=Department::find($id);
         return view('admin.departments.edit')->withDepartment($department);
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
        $department=Department::find($id);
        $this->validate($request,[
            'title'=>'required'
        ]);
        $department->title=$request->title;
        $department->save();
        Session::flash('success','Your Department was successfully Updated!');
        return redirect()->route('departments');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department=Department::find($id);

        // foreach($department->posts as $post){
        //     $post->delete();//forcedelete()//parmantly delete
        // }

        $department->delete();
        Session::flash('success','Your Department was successfully Deleted!');
        return redirect()->back();
    }
}
