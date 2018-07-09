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
</div>
@stop