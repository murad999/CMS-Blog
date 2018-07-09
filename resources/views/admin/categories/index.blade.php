@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">All Categories Heare..</div>

        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of categories</caption>
                <thead>
                    <tr  colspan="2">
                        <th>Category Name</th>
                        <th>Editing</th>
                        <th>Deleteing</th>
                        <th>Viewing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)  
                    <tr>
                        <td>{{$category->name}}</td> 
                        <td><a href="{{route('categories.edit',['id'=>$category->id])}}" class="btn glyphicon glyphicon-edit"></a></td> 
                        <td><a href="{{route('categories.destroy',['id'=>$category->id])}}" class="btn glyphicon glyphicon-trash"></a></td> 
                        <td><a href="{{route('categories.show',['id'=>$category->id])}}" class="btn glyphicon glyphicon-open"></a></td> 
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop