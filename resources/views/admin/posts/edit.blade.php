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
        	<form action="{{route('posts.update',['id'=>$post->id])}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="title">Title</label>
	            	<input name="title" class="form-control" type="text" value="{{$post->title}}"></input>
	            </div>
	            <div class="form-group">
	            	<label for="category_id">Select Category</label>
	            	<select name="category_id" class="form-control">
	            		<option value="default">Select Category</option>
	            		@foreach($categories as $category)
	            			<option value="{{$category->id}}" @if($post->category_id == $category->id) selected @endif>{{$category->name}}</option>
	            		@endforeach
	            	</select>
	            </div>
	             <div class="form-group">
	            	<label for="tags">Select Tags</label>
	            	@foreach($tags as $tag)
						<div class="checkbox">
						  <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
								{{-- {{$post->tags}} --}}
								@foreach( $post->tags as $t)
									@if($tag->id == $t->id)
										checked 
									@endif
								@endforeach
	
						  	>{{$tag->tag}}</label>
						</div>
	            	@endforeach
	            </div>
	            <div class="form-group">
	            	<label for="featured">Featured Image</label>
	            	<input name="featured" class="form-control" type="file"></input>
	            </div>
	            <div class="form-group">
	            	<label for="content">Content</label>
	            	<textarea name="content" id="editor" cols="5" rows="5" class="form-control">{{$post->content}}</textarea>
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