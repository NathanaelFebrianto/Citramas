@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Supplier</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Supplier ID</th>
							<th>Nama Supplier</th>
			                <th>Supplier Address</th>
			                <th>Second Supplier Address</th>
			                <th>Supplier Phone	</th>
			               	<th>Supplier Fax</th>
			               	<th>Supplier Email</th>
			              	<th>Supplier Contact</th>
						   	<th>Supplier Mobile</th>	
						   	<th>Area Name</th>
						   	<th>Region Name</th>
			            	<th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	<!-- looping for supplier start here -->
			        	@foreach ($suppliers as $supplier)
						<tr>
							<td>{{ $supplier->supplierID }}</td>
							<td>{{ $supplier->supplierName }}</td>
							<td>{{ $supplier->supplierAddress1 }}</td>
							<td>{{ $supplier->supplierAddress2 }}</td>
							<td>{{ $supplier->supplierPhone }}</td>
							<td>{{ $supplier->supplierFax }}</td>
							<td>{{ $supplier->supplierEmail }}</td>
							<td>{{ $supplier->supplierContact }}</td>
							<td>{{ $supplier->supplierMobile }}</td>
							<td>{{ $supplier->area->areaName }}</td>
							<td>{{ $supplier->region->regionName }}</td>
							<td>

								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('supplier.destroy' , $supplier->supplierID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this supplier?')" class="btn btn-danger btn-info">
									<span class="glyphicon glyphicon-remove"></span>Delete
								</button>

								{{ Form::close() }}
								<!-- action delete end here -->

							</td>
						</tr>
						@endforeach
						<!-- looping for supplier end here  -->
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Supplier</a>
            	</h3>
            </div>
        </div>
    </div>
@stop