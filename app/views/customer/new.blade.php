@extends('master')

@section('content')
	{{ HTML::style('public/js/plugins/select2-3.5.2/select2-3.5.2/select2.css') }}
	{{ HTML::script('public/js/plugins/select2-3.5.2/select2-3.5.2/select2.js') }}
	{{ HTML::script('public/js/autocomplete.js') }}
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Add Customer</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'customer.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerId">Customer Id</label>
					  <div class="col-md-4">
					    <input id = "customerId" name="customerId" type="text" placeholder="Input Customer ID" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerId'); ?>
					  </div>
					
					</div>

					<!-- Select Basic -->
					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="firstAddress">First Address</label>
					  <div class="col-md-4">
					  <input id="firstAddress" name="firstAddress" type="text" placeholder="Input First Address" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('firstAddress'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="secondAddress">Second Address</label>
					  <div class="col-md-4">
					  <input name="secondAddress" type="text" placeholder="Input Second Address" class="form-control" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('secondAddress'); ?>
					  </div>
					</div>
					<!-- Select Basic -->

					<div class="form-group">
					  <label class="col-md-4 control-label" for="thirdAddress">Third Address</label>
					  <div class="col-md-4">
					  <input name="thirdAddress" type="text" placeholder="Input Third Address" class="form-control" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('thirdAddress'); ?>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fourthAddress">Fourth Address</label>
					  <div class="col-md-4">
					  <input id="fourthAddress" name="fourthAddress" type="text" placeholder="Input Fourth Address" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('fourthAddress'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="area">Area</label>
					  <div class="col-md-4">
						<input type="hidden" class="genAutocomplete" style="width:100%" placeholder="Area"  id="area" name="area"  data-url="{{ URL::to('/') }}/autocomplete/area">
						
						<!--
					  	<select id="area" name="area" class="form-control">
					    	@foreach ($areas as $area)
					      		<option value="{{ $area->areaID }}">{{ $area->areaName}}</option>
					    	@endforeach
					   	</select>
						-->
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('area'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="region">Region</label>
					  <div class="col-md-4">
						<input type="hidden" class="genAutocomplete" style="width:100%" placeholder="Region"  id="region" name="region"  data-url="{{ URL::to('/') }}/autocomplete/region">
						<!--
						<select id="region" name="region" class="form-control">
					    	@foreach ($regions as $region)
					      		<option value="{{ $region->regionID }}">{{ $region->regionName}}</option>
					    	@endforeach
					   	</select>
						-->
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('region'); ?>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerPhone">Customer Phone</label>  
					  <div class="col-md-4">
					  <input id="customerPhone" name="customerPhone" type="text" placeholder="Input Customer Phone" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerPhone'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerFax">Customer Fax</label>
					  <div class="col-md-4">
					  <input id="customerFax" name="customerFax" type="text" placeholder="Input Customer Fax" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerFax'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerEmail">Customer Email</label>
					  <div class="col-md-4">
					  <input id="customerEmail" name="customerEmail" type="text" placeholder="Input Customer Email" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerEmail'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerContact">Customer Contact</label>
					  <div class="col-md-4">
					  <input id="customerContact" name="customerContact" type="text" placeholder="Input Customer Contact" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerContact'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="poBirth">PO Birth</label>
					  <div class="col-md-4">
					  <input id="poBirth" name="poBirth" type="text" placeholder="Input PO Birth" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('poBirth'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="doBirth">DO Birth</label>
					  <div class="col-md-4">
					  <input id="doBirth" name="doBirth" type="text" placeholder="Input DO Birth" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('doBirth'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerReligion">Customer Religion</label>
					  <div class="col-md-4">
					  <input id="customerReligion" name="customerReligion" type="text" placeholder="Input Customer Religion" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerReligion'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerPosition">Customer Position</label>
					  <div class="col-md-4">
					  <input id="customerPosition" name="customerPosition" type="text" placeholder="Input Customer Position" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerPosition'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerStatus">Customer Status</label>
					  <div class="col-md-4">
					  <input id="customerStatus" name="customerStatus" type="text" placeholder="Input Customer Status" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerStatus'); ?>
					  </div>
					</div>


					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerChildren">Customer Children</label>
					  <div class="col-md-4">
					  <input id="customerChildren" name="customerChildren" type="text" placeholder="Input Customer Children" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerChildren'); ?>
					  </div>
					</div>


					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerPhoneHome">Customer Phone Home</label>
					  <div class="col-md-4">
					  <input id="customerPhoneHome" name="customerPhoneHome" type="text" placeholder="Input Customer Phone Home" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerPhoneHome'); ?>
					  </div>
					</div>



					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerMobile">Customer Mobile</label>
					  <div class="col-md-4">
					  <input id="customerMobile" name="customerMobile" type="text" placeholder="Input Customer Mobile" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerMobile'); ?>
					  </div>
					</div>


					<div class="form-group">
					  <label class="col-md-4 control-label" for="customerPinBB">Customer Pin BB</label>
					  <div class="col-md-4">
					  <input id="customerPinBB" name="customerPinBB" type="text" placeholder="Input Customer Pin BB" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('customerPinBB'); ?>
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