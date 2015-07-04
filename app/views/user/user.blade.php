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
			            </tr>
			        </thead>
			 
			        <tbody>
			        	@foreach ($users as $user)
						<tr>
							<td>{{ $user->userID }}</td>
							<td>{{ $user->userName }}</td>
							<td>{{ $user->userRole}}</td>
						</tr>
						@endforeach
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Staff</a>
            	</h3>
            </div>
        </div>
    </div>
@stop