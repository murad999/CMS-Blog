@extends('layouts.app')
@section('styles')

<style type="text/css">
    .thumbnail {
       box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
       transition: 0.3s;
       min-width: 40%;
       border-radius: 5px;
     }

     .thumbnail-description {
       min-height: 40px;
     }

     .thumbnail:hover {
       cursor: pointer;
       box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 1);
     }
     .activeCount{
        color: #06b2b6;
     }

</style>

@endsection
@section('content')

            <div class="panel panel-default">
                <div class="panel-heading" style="background:#06b2b6;color: #fff">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-sm-4">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <div class="position-relative">
                          <i class="glyphicon glyphicon glyphicon-user"></i>
                        </div>
                        <h4 id="thumbnail-label"><a href="" target="_blank">USERS</a></h4>
                       {{--  <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Auditor</p> --}}
                        <div class="thumbnail-description smaller">
                             <h3 class="activeCount">{{$users}} <br/>  USERS</h3>
                        </div>
                      </div>
                      {{-- <div class="caption card-footer text-center">
                        <ul class="list-inline">
                          <li><i class="people lighter"></i>&nbsp;7 Active Users</li>
                          <li></li>
                          <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <div class="position-relative">
                          <i class="glyphicon glyphicon glyphicon-tint"></i>
                        </div>
                        <h4 id="thumbnail-label"><a href="" target="_blank">DOCTORS</a></h4>
                       {{--  <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Auditor</p> --}}
                        <div class="thumbnail-description smaller">
                             <h3 class="activeCount">{{$doctors}} <br/>  DOCTORS</h3>
                        </div>
                      </div>
                      {{-- <div class="caption card-footer text-center">
                        <ul class="list-inline">
                          <li><i class="people lighter"></i>&nbsp;7 Active Users</li>
                          <li></li>
                          <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <div class="position-relative">
                          <i class="glyphicon glyphicon glyphicon-tint"></i>
                        </div>
                        <h4 id="thumbnail-label"><a href="" target="_blank">DEPARTMENT</a></h4>
                       {{--  <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Auditor</p> --}}
                        <div class="thumbnail-description smaller">
                             <h3 class="activeCount">{{$departments}} <br/>  DEPARTMENT</h3>
                        </div>
                      </div>
                      {{-- <div class="caption card-footer text-center">
                        <ul class="list-inline">
                          <li><i class="people lighter"></i>&nbsp;7 Active Users</li>
                          <li></li>
                          <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <div class="position-relative">
                          <i class="glyphicon glyphicon glyphicon-th-list"></i>
                        </div>
                        <h4 id="thumbnail-label"><a href="" target="_blank">BLOGS</a></h4>
                       {{--  <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Auditor</p> --}}
                        <div class="thumbnail-description smaller">
                             <h3 class="activeCount">{{$blogs}} <br/>  POSTS</h3>
                        </div>
                      </div>
                      {{-- <div class="caption card-footer text-center">
                        <ul class="list-inline">
                          <li><i class="people lighter"></i>&nbsp;7 Active Users</li>
                          <li></li>
                          <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="thumbnail">
                      <div class="caption text-center">
                        <div class="position-relative">
                          <i class="glyphicon glyphicon glyphicon-tint"></i>
                        </div>
                        <h4 id="thumbnail-label"><a href="" target="_blank">APPOINTMENTS</a></h4>
                       {{--  <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Auditor</p> --}}
                        <div class="thumbnail-description smaller">
                             <h3 class="activeCount">{{$appointments}} <br/>  APPOINTMENTS</h3>
                        </div>
                      </div>
                      {{-- <div class="caption card-footer text-center">
                        <ul class="list-inline">
                          <li><i class="people lighter"></i>&nbsp;7 Active Users</li>
                          <li></li>
                          <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;Help</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
                    
                </div>
            </div>
                
              
@endsection
