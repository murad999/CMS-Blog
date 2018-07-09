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
         <div class="panel-heading">Create a New Category</div>

        <div class="panel-body">
        	<form action="{{route('categories.update',['id'=>$category->id])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="name">Name</label>
	            	<input name="name" class="form-control" type="text" value="{{$category->name}}"></input>
	            </div>
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Update Category</button>
	            	</div>
	            </div>
        	</form>
        </div>
    </div>
@stop