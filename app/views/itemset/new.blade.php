@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Add Item</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'itemset.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Item Set ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemSetId">Item Set Id</label>
					  <div class="col-md-4">
					    <input name="itemSetId" type="text" value = "{{ $id }}" class="form-control input-md" readonly>
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemSetId'); ?>
					  </div>
					</div>


					<div class="form-group">
					  <label class="col-md-4 control-label" for="item">Item Name</label>
					  <div class="col-md-4">
					  	<select id="item" name="item" class="form-control">
					    	@foreach ($items as $item)
					      		<option value="{{ $item->itemID }}">{{ $item->itemDesc}}</option>
					    	@endforeach
					   	</select>
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('item'); ?>
					  </div>
					</div>

					
					<!-- Select Basic -->
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemQty">Item Quantity</label>
					  <div class="col-md-4">
					  <input id="itemQty" name="itemQty" type="text" placeholder="Input Item Quantity" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemQty'); ?>
					  </div>
					</div>

			
					
					<!-- Button (Double) -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="submitBtn"></label>
					  <div class="col-md-4">
					    <button id="submitBtn" name="submitBtn" class="btn btn-primary">Submit</button>
					    <button id="cancelBtn" name="cancelBtn" class="btn btn-danger">Cancel</button>
					  </div>
					</div>

				</fieldset>
			</form>
			</h4>
			</div>
    	</div>
    </div>
@stop