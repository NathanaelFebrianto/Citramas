@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Customer</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Customer ID</th>
							<th>Customer First Address</th>
			                <th>Customer Second Address</th>
			                <th>Customer Third Address</th>
			                <th>Customer Fourth Address</th>
			                <th>Customer Area</th>
			                <th>Customer Region</th>
			                <th>Customer Phone Number</th>
			                <th>Customer Fax</th>
			                <th>Customer Email</th>
			                <th>Customer Contact</th>
			                <th>Customer PO Birth</th>
			                <th>Customer DO Birth</th>
			                <th>Customer Religion</th>
			                <th>Customer Position</th>
			                <th>Customer Status</th>
			                <th>Customer Children</th>
			                <th>Customer Phone</th>
			                <th>Customer Mobile</th>
			                <th>Customer PIN BB</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	<!-- looping for customer start here -->
			        	@foreach ($customers as $customer)
						<tr>
							<td>{{ $customer->customerID }}</td>
							<td>{{ $customer->customerAddress1 }}</td>
							<td>{{ $customer->customerAddress2 }}</td>
							<td>{{ $customer->customerAddress3 }}</td>
							<td>{{ $customer->customerAddress4 }}</td>
							<td>{{ $customer->area->areaName }}</td>
							<td>{{ $customer->region->regionName }}</td>
							<td>{{ $customer->customerPhone }}</td>
							<td>{{ $customer->customerFax }}</td>
							<td>{{ $customer->customerEmail }}</td>
							<td>{{ $customer->customerContact }}</td>
							<td>{{ $customer->POBirth }}</td>
							<td>{{ $customer->DOBirth }}</td>
							<td>{{ $customer->customerReligion }}</td>
							<td>{{ $customer->customerPosition }}</td>
							<td>{{ $customer->customerStatus }}</td>
							<td>{{ $customer->customerChildren }}</td>
							<td>{{ $customer->customerPhoneHome }}</td>
							<td>{{ $customer->customerMobile }}</td>
							<td>{{ $customer->customerPinBB }}</td>
							
							<td>


								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('customer.destroy' , $customer->customerID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this customer?')" class="btn btn-danger btn-info">
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
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Customer</a>
            	</h3>
            </div>
        </div>
    </div>
@stop