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
         <div class="panel-heading">Create a New Service
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('depServices.create')}}">Create Department Service </a> 
            </div>
         </div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of Department Service</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Editing</th>
                        <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($depServices as $depService)  
                    <tr>
                        <td>{{$depService->title}}</td> 
                        <td>{{Str::words($depService->content, 50,'....') }}</td> 
                        <td><img src="{{$depService->featured}}" alt="{{$depService->title}}" width="90px" height="50px"></td>
                        <td><a href="{{route('depServices.edit',['id'=>$depService->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('depServices.destroy',['id'=>$depService->id])}}" class="btn glyphicon glyphicon-trash"></a></td>  
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$depServices->links()}}
        </div>
    </div>
@stop