@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Departments Heare..
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('departments.create')}}">Create Department </a> 
            </div>
         </div>
         

        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of Departments</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Department Name</th>
                        <th>Editing</th>
                        <th>Deleteing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departments as $department)  
                    <tr>
                        <td>{{$department->title}}</td> 
                        <td><a href="{{route('departments.edit',['id'=>$department->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('departments.destroy',['id'=>$department->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        {{-- <td><a href="{{route('departments.show',['id'=>$department->id])}}" class="btn glyphicon glyphicon-open"></a></td> --}} 
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$departments->links()}}
        </div>
    </div>
@stop

