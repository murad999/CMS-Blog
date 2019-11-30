@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Messages
        
         </div>
            {{-- {{dd($appointments)}} --}}
        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of Messages</caption>
                <thead>
                    <tr  colspan="2">
                        <th>User name</th>
                        <th>User Email</th>
                        <th>User Messages</th>
                        <th>Action</th>{{-- 
                        <th>Deleteing</th>
                        <th>Viewing</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)  
                    {{-- {{dd($about)}}; --}}
                    <tr>
                        <td>{{$contact->user_name}}</td> 
                        <td>{{$contact->user_email}}</td> 
                        <td>{{$contact->text_message}}</td>
                        {{-- <td><a href="{{route('appointments.update',['id'=>$appointment->id])}}" class="btn glyphicon glyphicon-ok"></a></td> --}} {{-- 
                        <td><a href="{{route('abouts.destroy',['id'=>$category->id])}}" class="btn glyphicon glyphicon-trash"></a></td>  --}}
                        <td>
                            {!!Form::open(['action' => ['ContactsController@update', $contact->id], 'method' => 'POST'])!!}
                                {{Form::submit('Done!', ['class' => 'btn btn-success'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$contacts->links()}}
        </div>
    </div>
@stop
@section('scripts')
<script type="text/javascript">
    
</script>
@stop
