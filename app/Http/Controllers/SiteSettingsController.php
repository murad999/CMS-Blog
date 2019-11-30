<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SiteSetting;

use Session;

class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.siteSettings.index')->with('SiteSettings',SiteSetting::first());
        // view('admin.siteSettings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.siteSettings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[

            'site_title'=>'required',  
            'site_email'=>'required|email',   
            'site_contact'=>'required',    
            'address'=>'required'
        ]);
        $settings=SiteSetting::first();

        $settings->site_title=$request->site_title;
        $settings->site_email=$request->site_email;
        $settings->site_contact=$request->site_contact;
        $settings->address=$request->address;

        $settings->save();

        Session::flash('success','Site Setting successfully updated');

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
        //
    }
}
