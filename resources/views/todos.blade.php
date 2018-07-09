@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
        <div class="div">
            <div class="col-md-6">
                 <form class="form" action="/create/todos" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="todo" placeholder="Add new ToDO">
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <caption>table title and/or explanatory text</caption>
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($todos as $todo)  
                    <tr>
                        <td>{{$todo->todo}} <a href="{{route('todos.delete',['id'=>$todo->id])}}" class="btn btn-danger"> X </a> <a href="{{route('todos.edit',['id'=>$todo->id])}}" class="btn btn-info btn-xs"> edit </a> 
                            @if(!$todo->completed)

                             <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-success btn-xs"> Mark as Completed</a></td> 
                            @else
                                <span class="text-success">Completed!</span>
                            @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop