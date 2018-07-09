@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Tags Heare..</div>

        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of tags</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Tags Name</th>
                        <th>Editing</th>
                        <th>Deleteing</th>
                        <th>Viewing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)  
                    <tr>
                        <td>{{$tag->tag}}</td> 
                        <td><a href="{{route('tags.edit',['id'=>$tag->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('tags.destroy',['id'=>$tag->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        <td><a href="{{route('tags.show',['id'=>$tag->id])}}" class="btn glyphicon glyphicon-open"></a></td> 
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop