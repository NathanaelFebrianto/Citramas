@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>List of Master Item Set</strong>
                </h2>
                <hr>
            	
                <!-- Table -->
                <div class="table-responsive">
            	<table id="example" class="display" cellspacing="0" width="100%" height="100%">
			        <thead>
			            <tr>
			                <th>Item Set ID</th>
							<th>Nama Item</th>
			                <th>Quantity</th>
			            	<th>Action</th>
			            </tr>
			        </thead>
			 
			        <tbody>
			        	<!-- looping for item set start here  -->
			        	@foreach ($itemsets as $itemset)
						<tr>
							<td>{{ $itemset->itemSetID }}</td>
							<td>{{ $itemset->item->itemDesc }}</td>
							<td>{{ $itemset->itemQty }}</td>
							<td>

								<!-- action delete start here -->
								{{ Form::open(array('style' => 'display:inline;' , 'route' => array('itemset.destroy' , $itemset->itemSetID), 'method' => 'DELETE')) }}

								<button href="" onClick="return confirm('Are you sure want to delete this item set?')" class="btn btn-danger btn-info">
									<span class="glyphicon glyphicon-remove"></span>Delete
								</button>

								{{ Form::close() }}
								<!-- action delete end here -->
							</td>

						</tr>
						@endforeach
						<!-- looping for item set end here -->
						
			        </tbody>
				</table>
				</div><!--End of table-->
				<h3 class="intro-text text-center">
					<a href="{{ Request::url() }}/create" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-plus"></span> Add New Item Set</a>
            	</h3>
            </div>
        </div>
    </div>
@stop