@extends('layouts.app')

@section('content')
	{{-- @if(session('success'))
		<ul class="list-group">
			
				<li class="list-group-item text-success">{{session('success')}}</li>

		</ul>
	@endif --}}
	<div class="panel panel-default">
         <div class="panel-heading">About
            <div class="text-right">
               <a  class="btn btn-success " href="{{route('abouts.create')}}">Create About </a> 
            </div>
         </div>

        <div class="panel-body">
			<table class="table table-hover">
                <caption>This all of About</caption>
                <thead>
                    <tr  colspan="2">
                        <th>About Title</th>
                        <th>Featured Image</th>
                        <th>Content</th>
                        <th>Editing</th>{{-- 
                        <th>Deleteing</th>
                        <th>Viewing</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($abouts as $about)  
                    {{-- {{dd($about)}}; --}}
                    <tr>
                        <td>{{$about->title}}</td> 
                        <td>{{ Str::words($about->content, 50,'....')  }}</td> 
                        <td><img src="{{asset($about->featured)}}" alt="{{$about->title}}" width="200px" height="250px"></td> 
                        
                        <td><a href="{{route('abouts.edit',['id'=>$about->id])}}" class="btn glyphicon glyphicon-edit"></a></td> {{-- 
                        <td><a href="{{route('abouts.destroy',['id'=>$category->id])}}" class="btn glyphicon glyphicon-trash"></a></td>  --}}
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
        {{$abouts->links()}}
        </div>
    </div>
@stop
@section('scripts')
<script type="text/javascript">
    
</script>
@stop

