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
         <div class="panel-heading">Edit Department</div>

        <div class="panel-body">
        	<form action="{{route('departments.update',['id'=>$department->id])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="name">Name</label>
	            	<input name="title" class="form-control" type="text" value="{{$department->title}}"></input>
	            </div>
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Update Department</button>
	            	</div>
	            </div>
        	</form>
        </div>
    </div>
@stop