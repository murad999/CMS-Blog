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
         <div class="panel-heading">Create a New Slider
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('sliders.create')}}">Create a New Slider </a> 
            </div>
         </div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of Posts</caption>
                <thead>
                    <tr  colspan="2">
                        
                        <th>Slider Title</th>
                        <th>Slider Image</th>
                        <th>Banner Title</th>
                        <th>Banner Image</th>
                        <th>Editing</th>
                        <th>Trash</th>
                        {{-- <th>Viewing</th> --}}
                    </tr>
                </thead>
                <tbody>
                   {{--  {{dd($sliders)}} --}}
                    @foreach($sliders as $sl)  
                    <tr>
                        <td>{{$sl->title_slider}}</td>
                        
                        <td><img src="{{asset($sl->featured_slider)}}" alt="{{$sl->title_slider}}" width="90px" height="50px"></td>
                        <td>{{$sl->title_banner}}</td>
                        <td><img src="{{asset($sl->featured_banner)}}" alt="{{$sl->title_banner}}" width="90px" height="50px"></td>
                         
                        <td><a href="{{route('sliders.edit',['id'=>$sl->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('sliders.destroy',['id'=>$sl->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
         <div class="panel-footer text-center">
        {{$sliders->links()}}
        </div>
    </div>
@stop