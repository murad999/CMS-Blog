@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
					
					<div class="modal-dialog modal-sm">
					    <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					          <h4 class="modal-title" style="text-align: center;"></h4>
					        </div>
					        <div class="modal-body">
					        	<form action="{{url('posts/create')}}" method="get" accept-charset="utf-8">
					        		{{csrf_field()}}
									<input type="text" name="title">

					        	</form>
					       
					        </div>
					    </div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
                
            </div>
        </div>
    </div>
</div>
@endsection
