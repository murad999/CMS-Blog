@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Appointments
        
         </div>
            {{-- {{dd($appointments)}} --}}
        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of Appointments</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Patient name</th>
                        <th>Patient Phone</th>
                        <th>Doctor Name</th>
                        <th>Department Name</th>
                        <th>appointment Date</th>
                        <th>Action</th>{{-- 
                        <th>Deleteing</th>
                        <th>Viewing</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)  
                    {{-- {{dd($about)}}; --}}
                    <tr>
                        <td>{{$appointment->name}}</td> 
                        <td>{{$appointment->phone}}</td> 
                        <td>{{$appointment['doctor']->name}}</td> 
                        <td>{{$appointment['department']->title}}</td> 
                        <td>{{$appointment->date}}</td> 
                        {{-- <td><a href="{{route('appointments.update',['id'=>$appointment->id])}}" class="btn glyphicon glyphicon-ok"></a></td> --}} {{-- 
                        <td><a href="{{route('abouts.destroy',['id'=>$category->id])}}" class="btn glyphicon glyphicon-trash"></a></td>  --}}
                        <td>
                            {!!Form::open(['action' => ['AppointmentsController@update', $appointment->id], 'method' => 'POST'])!!}
                                {{Form::submit('Done!', ['class' => 'btn btn-success'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$appointments->links()}}
        </div>
    </div>
@stop
@section('scripts')
<script type="text/javascript">
    
</script>
@stop
