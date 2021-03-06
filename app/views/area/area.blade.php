@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Area</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Area ID</th>
							<th>Area Name</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	@foreach ($areas as $area)
						<tr>
							<td>{{ $area->areaID }}</td>
							<td>{{ $area->areaName }}</td>
						</tr>
						@endforeach
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class=glyphicon glyphicon-plus></span> Add New Area</a>
            	</h3>
            </div>
        </div>
    </div>
@stop