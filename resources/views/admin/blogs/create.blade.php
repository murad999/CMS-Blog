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
         <div class="panel-heading"> Posts
			<div class="text-right">
               <a  class="btn btn-success " href="{{route('blogs')}}">Back To Blogs </a> 
            </div>
         </div>

        <div class="panel-body">
        	<form action="{{route('blogs.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="title">Title</label>
	            	<input name="title" class="form-control" type="text"></input>
	            </div>
	            <div class="form-group">
	            	<label for="department_id">Select Department</label>
	            	<select name="department_id" class="form-control">
	            		<option value="default">Select Department</option>
	            		@foreach($departments as $department)
	            			<option value="{{$department->id}}">{{$department->title}}</option>
	            		@endforeach
	            	</select>
	            </div>
	            <div class="form-group">
	            	<label for="featured">Featured Image</label>
	            	<input name="featured" class="form-control" type="file"></input>
	            </div>
	            <div class="form-group">
	            	<label for="content">Content</label>
	            	<textarea name="content" id="editor" cols="5" rows="5" class="form-control"></textarea>
	            </div>
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Save Post</button>
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