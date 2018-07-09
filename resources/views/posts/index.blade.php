@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
					<!-- Trigger the modal with a button -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">create post</button>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Modal Header</h4>
				      </div>
				      <div class="modal-body">
				        <form action="/posts" method="post">
				        	{{csrf_token()}}
						  <div class="form-group">
						    <label for="title">title</label>
						    <input type="title" class="form-control" id="title">
						  </div>
						    <button type="submit" class="btn btn-default">Submit</button>
						  </div>
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
                
            </div>
        </div>
    </div>
</div>
@endsection
