@extends('layouts.app')

@section('content')
	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list-group-item text-danger">{{$error}}</li>
			@endforeach
		</ul>
	@endif
	<div class="panel panel-default">
         <div class="panel-heading">Create a New blog
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('blogs.create')}}">Create a New Post </a> 
            </div>
         </div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of Posts</caption>
                <thead>
                    <tr  colspan="2">
                        
                        <th>Posts Title</th>
                        <th>Posts Department</th>
                        <th>Posts Image</th>
                        <th>Editing</th>
                        <th>Trash</th>
                        {{-- <th>Viewing</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)  
                    <tr>
                        <td>{{$blog->title}}</td>
                        <td>{{$blog['department']->title}}</td>
                        <td><img src="{{$blog->featured}}" alt="{{$blog->title}}" width="90px" height="50px"></td>
                         
                        <td><a href="{{route('blogs.edit',['id'=>$blog->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('blogs.destroy',['id'=>$blog->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                       {{--  <td><a href="{{route('blogs.show',['id'=>$blog->id])}}" class="btn glyphicon glyphicon-open"></a></td>  --}}
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$blogs->links()}}
        </div>
    </div>
             
        <
@stop
