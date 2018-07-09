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
         <div class="panel-heading">Edit Site Setting</div>

        <div class="panel-body">
        	<form action="{{route('settings.update')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="site_name">Site Title</label>
	            	<input name="site_name" class="form-control" value="{{$settings->site_name}}" type="text"></input>
	            </div>
	            <div class="form-group">
	            	<label for="contact_email">Site Email</label>
	            	<input name="contact_email" class="form-control" value="{{$settings->contact_email}}" type="email"></input>
	            </div>
	            <div class="form-group">
	            	<label for="contact_number">Site Contact</label>
	            	<input name="contact_number" class="form-control" value="{{$settings->contact_number}}" type="text"></input>
	            </div>

	            <div class="form-group">
	            	<label for="address">Site Address</label>
	            	<textarea name="address" id="editor" cols="4" rows="4" class="form-control">{{$settings->address}}</textarea>
	            </div>
	          
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Update Sittings</button>
	            	</div>
	            </div>
        	</form>
        </div>
    </div>
@stop