@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Salesman</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Salesman ID</th>
							<th>Nama Salesman</th>
			                <th>First Salesman Address</th>
			                <th>Second Salesman Address</th>
			                <th>Area</th>
			               	<th>Region</th>
			               	<th>Salesman Phone</th>
			              	<th>First Salesman Mobile</th>
						   	<th>Second Salesman Mobile</th>	
						   	<th>Salesman Pin BB</th>
						   	<th>Salesman Email</th>
						   	<th>Salesman PO Birth</th>
						   	<th>Salesman DO Birth</th>
						   	<th>Salesman Religion</th>
						   	<th>Salesman Position</th>
						   	<th>Salesman Status</th>
						   	<th>Salesman Children</th>
			            	<th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	<!-- looping for salesman start here -->
			        	@foreach ($salesmans as $salesman)
						<tr>
							<td>{{ $salesman->salesID }}</td>
							<td>{{ $salesman->salesName }}</td>
							<td>{{ $salesman->salesAddress1 }}</td>
							<td>{{ $salesman->salesAddress2 }}</td>
							<td>{{ $salesman->area->areaName }}</td>
							<td>{{ $salesman->region->regionName }}</td>
							<td>{{ $salesman->salesPhone }}</td>
							<td>{{ $salesman->salesMobile1 }}</td>
							<td>{{ $salesman->salesMobile2 }}</td>
							<td>{{ $salesman->salesPinBB }}</td>
							<td>{{ $salesman->salesEmail }}</td>
							<td>{{ $salesman->POBirth }}</td>
							<td>{{ $salesman->DOBirth }}</td>
							<td>{{ $salesman->salesReligion }}</td>
							<td>{{ $salesman->salesPosition }}</td>
							<td>{{ $salesman->salesStatus }}</td>
							<td>{{ $salesman->salesChildren }}</td>
							<td>


								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('salesman.destroy' , $salesman->salesID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this salesman?')" class="btn btn-danger btn-info">
									<span class="glyphicon glyphicon-remove"></span>Delete
								</button>

								{{ Form::close() }}
								<!-- action delete end here -->

							</td>
						</tr>
						@endforeach
						<!-- looping for salesman end here -->
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Salesman</a>
            	</h3>
            </div>
        </div>
    </div>
@stop