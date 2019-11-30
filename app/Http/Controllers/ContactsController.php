<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use Session;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts= Contact::where(['status'=>1])->paginate(10);
        return view('admin.contacts.index')->with('contacts',$contacts);
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
            'user_name'=>'required',
            'user_email'=>'required|email:rfc,dns',
            'text_message'=>'required',
        ]);
        
        $contact= new Contact;

        $contact->user_name=$request->user_name;
        $contact->user_email=$request->user_email;
        $contact->text_message=$request->text_message;
        $contact->status=1;
        $contact->save();
        Session::flash('success','Your Messsage was successfully Send!');
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
        $contact= Contact::find($id);
       
        $contact->status=0;
        $contact->save();
        Session::flash('success','Your Contact was successfully Done!');
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
