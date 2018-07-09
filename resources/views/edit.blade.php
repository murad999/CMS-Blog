@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
        <div class="div">
            <div class="col-md-6">
                 <form class="form" action="{{route('todos.update',['id'=>$todo->id])}}" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                    <input class="form-control" type="text" name="todo" value="{{$todo->todo}}" placeholder="Update ToDO">
                </form>
            </div>
        </div>
    </div>
</div>
@stop