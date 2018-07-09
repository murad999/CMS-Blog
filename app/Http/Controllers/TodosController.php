<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){

    	$todos = Todo::all();

    	//dd($todos);

    	return view('todos')->withTodos($todos);
    }

    public function store(Request $request){
    	//dd($request->all());
    	$todos= new Todo;

    	$todos->todo=$request->todo;

    	$todos->save();
    	return redirect()->back();
    }


    public function edit($id){


        
        //dd($id);

        $todo = Todo::find($id);

        return view('edit')->withTodo($todo);
    }


    public function update(Request $request, $id){
        //dd($request->all());
        //
        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->route('todos');
    }



    public function delete($id){

        //dd($id);

        $todo = Todo::find($id);

        $todo->delete();

        return redirect()->back();
    }


    /// completed
    public function completed($id){
        //dd($id);
        $todo= Todo::find($id);

        $todo->completed = 1 ;

        $todo->save();

        return redirect()->back();

    }
}
