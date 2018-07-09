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
         <div class="panel-heading">User Update Information</div>

        <div class="panel-body">
            <form action="{{route('users.profile.update')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input name="name" class="form-control" value="{{$user->name}}" type="text"></input>
                </div>
                <div class="form-group">
                  
               
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" class="form-control" value="{{$user->email}}" type="email"></input>
                </div>
                <div class="form-group">
                    <label for="avatar">Updtae Image</label>
                    <input name="avatar" class="form-control" type="file"></input>
                </div>
                 <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input name="facebook" class="form-control" value="{{$user->profile->facebook}}" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input name="youtube" class="form-control" value="{{$user->profile->youtube}}" type="text"></input>
                </div> 
                <div class="form-group">
                    <label for="gitbub">Github</label>
                    <input name="gitbub" class="form-control" value="{{$user->profile->gitbub}}" type="text"></input>
                </div>
                <div class="form-group">
                    <label for="about">About Me</label>
                    <textarea name="about" id="" cols="5" rows="5" class="form-control">{{$user->profile->about}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update User Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop