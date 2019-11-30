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
         <div class="panel-heading">Create a Service
			      <div class="text-right">
               <a  class="btn btn-success " href="{{route('services')}}">Back To Services </a> 
            </div>
         </div>

        <div class="panel-body">
        	<form action="{{route('services.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        		{{csrf_field()}}
	        	<div class="form-group">
	            	<label for="title">Title</label>
	            	<input name="title" class="form-control" type="text"></input>
	            </div>
	            <div class="form-group">
	            	<label for="discription">Content</label>
	            	<textarea name="description" id="editor" cols="5" rows="5" class="form-control"></textarea>
	            </div>
              <div class="form-group">
                <label for="icon">Icon</label>
                <input name="icon" class="form-control" type="text"></input>
              </div>
	            <div class="form-group">
	            	<div class="text-center">
	            		<button class="btn btn-success" type="submit">Save Service</button>
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
	$('.newPics').change(function(){
    var img = this.files[0];
    //console.log('img',img);
    //var imgType = img['type'];
    //console.log(imgType);
    //var img['type'] = imgType.toLowerCase();
    //console.log(imgTolower);
    if(img['type'] != "image/jpeg" && img['type'] != "image/jpg" &&  img['type'] != "image/png"){
        $(".newPics").val("");
        swal({
          type: "error",
          title: "OPPS!error",
          text:"image should be jpeg or jpg or png",
          showConfirmButton: true,
          confirmButtonText: "Close"
        });

    }else if(img['size'] > 2000000){
        $(".newPics").val("");
        swal({
          type: "error",
          title:"OPPS!error",
          text: "image size should be under 2MB",
          showConfirmButton: true,
          confirmButtonText: "Close"
        });

    }else{
        var dataImage = new FileReader;
        dataImage.readAsDataURL(img);
        $(dataImage).on('load',function(event){
            var rootImage = event.target.result;
            $('.preview').attr('src',rootImage);
        });
    }
});
</script>
@stop