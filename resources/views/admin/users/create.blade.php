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
         <div class="panel-heading">Create a New User
            

         </div>

        <div class="panel-body">
            <form action="{{route('users.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input name="name" class="form-control" type="text"></input>
                </div>
                <div class="form-group">
                  
               
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" type="email"></input>
                </div>
                
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop