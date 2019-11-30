@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Services Heare..
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('services.create')}}">Create Service </a> 
            </div>
         </div>
         

        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of Services</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Service Name</th>
                        <th>Service Description</th>
                        <th>Editing</th>
                        <th>Deleteing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)  
                    <tr>
                        <td>{{$service->title}}</td> 
                        <td>{{$service->description}}</td> 
                        <td><a href="{{route('services.edit',['id'=>$service->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('services.destroy',['id'=>$service->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        {{-- <td><a href="{{route('departments.show',['id'=>$department->id])}}" class="btn glyphicon glyphicon-open"></a></td> --}} 
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            {{$services->links()}}
        </div>
    </div>
@stop

