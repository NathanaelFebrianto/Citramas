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
            {{ Form::open(array('route' => 'item.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemId">Item Id</label>
					  <div class="col-md-4">
					    <input name="itemId" type="text" value = "{{ $id }}" class="form-control input-md" readonly>
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemId'); ?>
					  </div>
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemBrand">Item Brand</label>
					  <div class="col-md-4">
					  <input id="itemBrand" name="itemBrand" type="text" placeholder="Input Item Brand" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemBrand'); ?>
					  </div>
					</div>

					
					<!-- Select Basic -->
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemType">Item Type</label>
					  <div class="col-md-4">
					  <input id="itemType" name="itemType" type="text" placeholder="Input Item Type" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemType'); ?>
					  </div>
					</div>

					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemDesc">Item Description</label>  
					  <div class="col-md-4">
					  <input id="itemDesc" name="itemDesc" type="text" placeholder="Input Description" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemDesc'); ?>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="itemUnit">Item Unit</label>  
					  <div class="col-md-4">
					  <input id="itemUnit" name="itemUnit" type="text" placeholder="Input Item Unit" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('itemUnit'); ?>
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