@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Item</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Item ID</th>
							<th>Item Brand</th>
			                <th>Item Type</th>
			                <th>Item Description</th>
			                <th>Item Unit</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	@foreach ($items as $item)
						<tr>
							<td>{{ $item->itemID }}</td>
							<td>{{ $item->itemBrand }}</td>
							<td>{{ $item->itemType }}</td>
							<td>{{$item->itemDesc }}</td>
							<td>{{$item->itemUnit}}</td>
						</tr>
						@endforeach
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class=glyphicon glyphicon-plus></span> Add New Item</a>
            	</h3>
            </div>
        </div>
    </div>
@stop