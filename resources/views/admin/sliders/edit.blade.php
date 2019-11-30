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
         <div class="panel-heading">Create a New Post
			 <div class="text-right">
               <a  class="btn btn-success " href="{{route('sliders')}}"> Back to Sliders </a> 
            </div>
         </div>

        <div class="panel-body">
        	<form action="{{route('sliders.update',['id'=>$slider->id])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="title_slider">Slider Title</label>
	            	<input name="title_slider" value="{{$slider->title_slider}}" class="form-control" type="text"></input>
	            </div>
	           
	            <div class="form-group">
	            	<label for="featured_slider">Slider Image</label>
	            	<input name="featured_slider" class="form-control" type="file"></input>
	            </div>
	           <div class="form-group">
	            	<label for="title_banner">Banner Title</label>
	            	<input name="title_banner" value="{{$slider->title_banner}}" class="form-control" type="text"></input>
	            </div>
	           
	            <div class="form-group">
	            	<label for="featured_banner">Banner Image</label>
	            	<input name="featured_banner" class="form-control" type="file"></input>
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