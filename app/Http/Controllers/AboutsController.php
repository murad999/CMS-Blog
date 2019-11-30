<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;
class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        //return view('admin.abouts.index');
        return view('admin.abouts.index')->with('abouts',About::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Category::all();
        // $tags=Tag::all();
        // if($categories->count() == 0 || $tags->count() == 0){

        //     Session::flash('info','You must have some categories and tags before attempting to create a post.');
        //     return redirect()->back();
        // }

        // return view('admin.posts.create')->with('categories',Category::all())
        //                                 ->with('tags',$tags);
        return view('admin.abouts.create');
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

            'title'=>'required|max:100',
            'featured'=>'required|image', 
            'content'=>'required'
        ]);

        $featured= $request->featured;

        $featured_new_name= time().$featured->getClientOriginalName();

        $featured->move('uploads/about', $featured_new_name);

        $abouts = About::create([

            'title'=>$request->title,
            'featured'=>'uploads/about/' . $featured_new_name,
            'content'=>$request->content,

        ]);

        Session::flash('success','Your Abouts was successfully save!');
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
        $about=About::find($id);

        return view('admin.abouts.edit')->with('about',$about);
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
        ]);

        $about=About::find($id);

        if($request->hasFile('featured')){
            
            $featured= $request->featured;

            $featured_new_name= time().$featured->getClientOriginalName();

            $featured->move('uploads/about', $featured_new_name);

            $about->featured= 'uploads/about/' . $featured_new_name;

        }

        $about->title=$request->title;
        $about->content=$request->content;

        $about->save();

        Session::flash('success','The About has successfully updated');

        return redirect()->route('abouts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);

        $post->delete();

        Session::flash('success','Your Post was successfully Deleted!');
        return redirect()->back();
    }

    public function trashed(){
        $posts=Post::onlyTrashed()->get();

        return view('admin.posts.trash')->withPosts($posts);
    }

    public function kill($id){
        $post=Post::withTrashed()->where('id',$id)->first();

        $post->forceDelete();

        Session::flash('success','Your Post was successfully delete permanently');
        return redirect()->back();
        //dd($post);
    }

    public function restore($id){
        $post=Post::withTrashed()->where('id',$id)->first();

        $post->restore();

        Session::flash('success','Your Post was successfully Restoring');
        return redirect()->back();
    }
}
