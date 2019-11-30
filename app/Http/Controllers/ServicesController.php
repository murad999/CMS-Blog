<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::paginate(10);
       return view('admin.services.index')->withServices($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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

            'title'=>'required',
            'icon'=>'required', 
            'description'=>'required'
        ]);

        $service = Service::create([

            'title'=>$request->title,
            'icon'=>$request->icon,
            'description'=>$request->description,

        ]);

        Session::flash('success','Your Service was successfully save!');
        return redirect()->route('services');
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
         $service=Service::find($id);
         return view('admin.services.edit')->withService($service);
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


         $this->validate($request,[

            'title'=>'required',
            'description'=>'required',
        ]);

        $service=Service::find($id);


        $service->title=$request->title;
        $service->description=$request->description;

        $service->save();

        Session::flash('success','The Service has successfully updated');

        return redirect()->route('services');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);

        // foreach($department->posts as $post){
        //     $post->delete();//forcedelete()//parmantly delete
        // }

        $service->delete();
        Session::flash('success','Your Service was successfully Deleted!');
        return redirect()->back();
    }
}
