<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\DepService;
//use App\Tag;
use Session;
class DepServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        //return view('admin.depServices.index');
       return view('admin.depServices.index')->with('depServices',DepService::paginate(4));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        //$tags=Tag::all();
        if($departments->count() == 0){

            Session::flash('info','You must have some departments before attempting to create a post.');
            return redirect()->back();
        }

        return view('admin.depServices.create')->with('departments',Department::all());
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

            'title'=>'required',
            'featured'=>'required|image', 
            'content'=>'required',
        ]);

        $featured= $request->featured;

        $featured_new_name= time().$featured->getClientOriginalName();

        $featured->move('uploads/depServices', $featured_new_name);

        $depServices = DepService::create([

            'title'=>$request->title,
            'featured'=>'uploads/depServices/' . $featured_new_name,
            'content'=>$request->content,
            'department_id'=>$request->department_id

        ]);

        //$posts->tags()->attach($request->tags);//in this tags() function is a rellationship that setup on Post model

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
        $depService=DepService::find($id);

        return view('admin.depServices.edit')->with('depService',$depService)
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

            'title'=>'required', 
            'content'=>'required',
            'department_id'=>'required'
        ]);

        $depService=DepService::find($id);

        if($request->hasFile('featured')){
            
            $featured= $request->featured;

            $featured_new_name= time().$featured->getClientOriginalName();

            $featured->move('uploads/depServices', $featured_new_name);

            $depService->featured= 'uploads/depServices/' . $featured_new_name;

        }

        $depService->title=$request->title;
        $depService->content=$request->content;
        $depService->department_id=$request->department_id;

        $depService->save();

        Session::flash('success','The post has successfully updated');

        return redirect()->route('depServices');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= DepService::find($id);

        $post->delete();

        Session::flash('success','Your Post was successfully Deleted!');
        return redirect()->back();
    }

}
