@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Warehouse</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Warehouse Id</th>
							<th>Warehouse Name</th>
			                <th>Warehouse First Address</th>
							<th>Warehouse Second Address</th>
			                <th>Warehouse Area</th>
							<th>Warehouse Region</th>
			                <th>Warehouse Phone Number</th>
							<th>Warehouse Fax</th>
			                <th>Warehouse Email</th>
							<th>Warehouse PIC</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	@foreach ($warehouses as $warehouse)
						<tr>
							<td>{{ $warehouse->warehouseID }}</td>
							<td>{{ $warehouse->warehouseName }}</td>
							<td>{{ $warehouse->warehouseAddress1}}</td>
							<td>{{ $warehouse->warehouseAddress2}}</td>
							<td>{{ $warehouse->area->areaName }}</td>
							<td>{{ $warehouse->region->regionName }}</td>
							<td>{{ $warehouse->warehousePhone}}</td>
							<td>{{ $warehouse->warehouseFax}}</td>
							<td>{{ $warehouse->warehouseEmail}}</td>
							<td>{{ $warehouse->warehousePIC}}</td>

						</tr>
						@endforeach
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Warehouse</a>
            	</h3>
            </div>
        </div>
    </div>
@stop