@extends('layouts.app')

@section('content')
	@if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif
	<div class="panel panel-default">
         <div class="panel-heading">All Categories Heare..</div>

        <div class="panel-body">
            <button class="btn btn-info"><a href="{{route('categories')}}">Back To Categories Lists</a></button>
			<h4 class="text-default">{{$category->name}}</h4>
        </div>
    </div>
@stop