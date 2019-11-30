<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Blog;
use Session;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with(['department'])->paginate(3);

        //return view('admin.posts.index')->with('posts',Post::all());
        return view('admin.blogs.index')->with('blogs',$blogs);
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
        //return view('admin.blogs.create');
        return view('admin.blogs.create')->with('departments',Department::all());
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
            'department_id'=>'required',
        ]);

        $featured= $request->featured;

        $featured_new_name= time().$featured->getClientOriginalName();

        $featured->move('uploads/blogs', $featured_new_name);

        $blogs = Blog::create([

            'title'=>$request->title,
            'featured'=>'uploads/blogs/' . $featured_new_name,
            'content'=>$request->content,
            'department_id'=>$request->department_id,
            'slug'=>str_slug($request->title),

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
        $blog=Blog::find($id);

        return view('admin.blogs.edit')->with('blog',$blog)
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

        $blog=Blog::find($id);

        if($request->hasFile('featured')){
            
            $featured= $request->featured;

            $featured_new_name= time().$featured->getClientOriginalName();

            $featured->move('uploads/blogs', $featured_new_name);

            $blog->featured= 'uploads/blogs/' . $featured_new_name;

        }

        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->department_id=$request->department_id;

        $blog->save();


        Session::flash('success','The blog has successfully updated');

        return redirect()->route('blogs');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog= Blog::find($id);

        $blog->delete();

        Session::flash('success','Your Post was successfully Deleted!');
        return redirect()->back();
    }

    
}
