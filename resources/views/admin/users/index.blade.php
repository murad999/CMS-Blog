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
         <div class="panel-heading">Create User</div>

        <div class="panel-body">
        	<table class="table table-hover">
                <caption>This all of Users</caption>
                <thead>
                    <tr  colspan="2">
                        <th>User Image</th>
                        <th>Name</th>
                        <th>Permission</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)  
                    <tr>
                        <td><img src="{{asset($user->profile->avatar)}}" alt="{{$user->name}}" width="90px" height="50px" style="border-radius: 50%"></td>
                        <td>{{$user->name}}</td>  
                        <td>
                            @if($user->admin)
                                <a href="{{route('users.not_admin',['id'=>$user->id])}}" class="btn glyphicon glyphicon-remove"> Remove_Permission_admin</a>
                            @else
                                <a href="{{route('users.admin',['id'=>$user->id])}}" class="btn glyphicon glyphicon-ok"> Permission_admin</a>
                            @endif
                        </td> 
                        @if(Auth::id() !== $user->id) 
                            <td><a href="{{route('users.destroy',['id'=>$user->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        @endif
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
@stop