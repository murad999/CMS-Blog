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
        	<form action="{{route('doctors.update',['id'=>$doctor->id])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="name">Name</label>
	            	<input name="name" class="form-control" type="text" value="{{$doctor->name}}"></input>
	            </div>
	            <div class="form-group">
	            	<label for="category_id">Select Department</label>
	            	<select name="department_id" class="form-control">
	            		<option value="default">Select Department</option>
	            		@foreach($departments as $department)
	            			<option value="{{$department->id}}" @if($doctor->department_id == $department->id) selected @endif>{{$department->title}}</option>
	            		@endforeach
	            	</select>
	            </div>
	            <div class="form-group">
	            	<label for="featured">Featured Image</label>
	            	<input name="featured" class="form-control" type="file"></input>
	            </div>
	             <div class="form-group">
	            	<label for="designation">Designation</label>
	            	<input name="designation" class="form-control" type="text" value="{{$doctor->designation}}"></input>
	            </div>
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Update</button>
	            	</div>
	            </div>
        	</form>
        </div>
    </div>
@stop
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop
@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
	  $('#editor').summernote();
	});
</script>
@stop