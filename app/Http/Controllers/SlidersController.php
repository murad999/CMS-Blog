<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Department;
use App\Slider;
use Session;
class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders= Slider::paginate(10);
       return view('admin.sliders.index')->withSliders($sliders);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'title_slider','title_banner','featured_slider','featured_banner'
        //dd($request->all());
        $this->validate($request,[

            'title_slider'=>'required',
            'featured_slider'=>'required|image',
            'title_banner'=>'required',
            'featured_banner'=>'required|image', 
        ]);

        $featured_slider= $request->featured_slider;

        $featured_slider_new_name= time().$featured_slider->getClientOriginalName();

        $featured_slider->move('uploads/sliders', $featured_slider_new_name);

        $featured_banner= $request->featured_banner;

        $featured_banner_new_name= time().$featured_banner->getClientOriginalName();

        $featured_banner->move('uploads/sliders', $featured_banner_new_name);

        $sliders = Slider::create([

            'title_slider'=>$request->title_slider,
            'featured_slider'=>'uploads/sliders/' . $featured_slider_new_name,
            'title_banner'=>$request->title_banner,
            'featured_banner'=>'uploads/sliders/' . $featured_banner_new_name,
            'status'=>'1',

        ]);

        //$posts->tags()->attach($request->tags);//in this tags() function is a rellationship that setup on Post model

        Session::flash('success','Your Slider was successfully save!');
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
        $slider=Slider::find($id);

        return view('admin.sliders.edit')->with('slider',$slider);
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
        // $this->validate($request,[

        //     'title'=>'required',
        //     'content'=>'required',
        //     'department_id'=>'required'
        // ]);

        $slider=Slider::find($id);

        if($request->hasFile('featured_slider')){
            
            $featured_slider= $request->featured_slider;

            $featured_slider_new_name= time().$featured->getClientOriginalName();

            $featured_slider->move('uploads/sliders', $featured_slider_new_name);

            $slider->featured_slider= 'uploads/sliders/' . $featured_slider_new_name;

        }

        if($request->hasFile('featured_banner')){
            
            $featured_banner= $request->featured_banner;

            $featured_banner_new_name= time().$featured_banner->getClientOriginalName();

            $featured_banner->move('uploads/sliders', $featured_banner_new_name);

            $slider->featured_banner= 'uploads/sliders/' . $featured_banner_new_name;

        }

        $slider->title_slider=$request->title_slider;
        $slider->title_banner=$request->title_banner;
        $slider->status=1;
        $slider->save();


        Session::flash('success','The slider has successfully updated');

        return redirect()->route('sliders');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider= Slider::find($id);

        $slider->delete();

        Session::flash('success','Your slider was successfully Deleted!');
        return redirect()->back();
    }

    
}
