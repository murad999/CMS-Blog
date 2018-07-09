<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$t=Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first();

        //dd($t);

        return view('index')
                ->with('title',Setting::first()->site_name)
                ->with('categories',Category::take(4)->get())
                ->with('first_post',Post::orderBy('created_at','desc')->first())
                ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                ->with('laravel_articles',Category::find(1))
                ->with('wordpress',Category::find(2))
                ->with('javascript',Category::find(4))
                ->with('settings',Setting::first());
    }

    public function singlePost($slug){

        $post= Post::where('slug',$slug)->first();

        $next_post= Post::where('id', '>' , $post->id)->min('id');

        $prev_post= Post::where('id', '<' , $post->id)->max('id');

        return view('single')->with('post',$post)
                             ->with('title',$post->title)
                             ->with('categories',Category::take(4)->get())
                             ->with('settings',Setting::first())
                             ->with('next',Post::find($next_post))
                             ->with('prev',Post::find($prev_post))
                             ->with('tags',Tag::all());
    }

    public function getCategory($id){
        $category=Category::find($id);

        //dd($id);

        //dd($categories->first());

        return view('single_category')->with('category',$category)
                                      ->with('title',$category->name)
                                      ->with('categories',Category::take(4)->get())
                                      ->with('settings',Setting::first())
                                      ->with('tags',Tag::all());
    }

    public function getTag($id){
        $tag=Tag::find($id);

        return view('single_tag')->with('tag',$tag)
                                 ->with('title',$tag->tag)
                                 ->with('categories',Category::take(4)->get())
                                 ->with('settings',Setting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
