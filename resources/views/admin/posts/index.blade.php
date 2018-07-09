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
         <div class="panel-heading">Create a New Post</div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of categories</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Posts Image</th>
                        <th>Posts Title</th>
                        <th>Editing</th>
                        <th>Trash</th>
                        <th>Viewing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)  
                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                        <td>{{$post->title}}</td> 
                        <td><a href="{{route('posts.edit',['id'=>$post->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('posts.destroy',['id'=>$post->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        <td><a href="{{route('posts.show',['id'=>$post->id])}}" class="btn glyphicon glyphicon-open"></a></td> 
                            
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
@stop