@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Region</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Region ID</th>
							<th>Region Name</th>
							<th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	@foreach ($regions as $region)
						<tr>
							<td>{{ $region->regionID }}</td>
							<td>{{ $region->regionName }}</td>							
							<td>


								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('region.destroy' , $region->regionID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this region?')" class="btn btn-danger btn-info">
									<span class="glyphicon glyphicon-remove"></span>Delete
								</button>

								{{ Form::close() }}
								<!-- action delete end here -->

							</td>

						</tr>
						@endforeach
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Region</a>
            	</h3>
            </div>
        </div>
    </div>
@stop