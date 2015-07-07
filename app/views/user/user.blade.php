@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master User</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>User ID</th>
							<th>Name</th>
			                <th>Role</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	<!-- looping for user start here -->
			        	@foreach ($users as $user)
						<tr>
							<td>{{ $user->userID }}</td>
							<td>{{ $user->userName }}</td>
							<td>{{ $user->userRole}}</td>
							<td>

								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('user.destroy' , $user->userID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this user?')" class="btn btn-danger btn-info">
									<span class="glyphicon glyphicon-remove"></span>Delete
								</button>

								{{ Form::close() }}
								<!-- action delete end here -->

							</td>
						</tr>
						@endforeach
						<!-- looping for user end here -->
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New User</a>
            	</h3>
            </div>
        </div>
    </div>
@stop