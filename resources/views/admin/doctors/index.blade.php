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
         <div class="panel-heading">Doctor
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('doctors.create')}}">Add New Doctor </a> 
            </div>
         </div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of Doctors</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Image</th>
                        <th>Editing</th>
                        <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{dd($doctors)}} --}}
                    @foreach($doctors as $doctor) 

                         
                    <tr>
                        <td>{{$doctor->name}}</td> 
                       
                        <td>{{$doctor['department']->title}}</td> 
                        
                        <td>{{ $doctor->designation}}</td> 
                        <td><img src="{{$doctor->featured}}" alt="{{$doctor->name}}" width="90px" height="50px"></td>
                        <td><a href="{{route('doctors.edit',['id'=>$doctor->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('doctors.destroy',['id'=>$doctor->id])}}" class="btn glyphicon glyphicon-trash"></a></td>  
                            
                    </tr>
            
                    @endforeach
                </tbody>
            </table>
        </div>
         <div class="panel-footer text-center">
            {{$doctors->links()}}
        </div>
    </div>
@stop