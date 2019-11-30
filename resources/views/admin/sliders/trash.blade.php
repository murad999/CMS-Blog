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
                        <th>Restoring</th>
                        <th>Deleting</th>
                    </tr>
                </thead>
                <tbody>
                   @if($posts->count()>0)
                         @foreach($posts as $post)  
                            <tr>
                                <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="90px" height="50px"></td>
                                <td>{{$post->title}}</td> 
                                <td><a href="{{route('posts.restore',['id'=>$post->id])}}" class="btn glyphicon glyphicon-ok-circle"></a></td> 
                                <td><a href="{{route('posts.kill',['id'=>$post->id])}}" class="btn glyphicon glyphicon-remove"></a></td>  
                            </tr>
                        @endforeach
                   @else
                        <tr>
                            <th colspan="5">They has no post yet</th>
                        </tr>
                   @endif
                </tbody>
        </div>
    </div>
@stop