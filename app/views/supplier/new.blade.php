<!--
	Created by Irwan

	Created by : Nathanael
	7/4/2015
-->

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
                    <strong>Add Supplier</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'supplier.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierId">Supplier Id</label>
					  <div class="col-md-4">
					    <input name="supplierId" type="text" placeholder="Input Supplier ID" required="" class="form-control input-md">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierId'); ?>
					  </div>
					
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierName">Supplier Name</label>
					  <div class="col-md-4">
					  <input id="supplierName" name="supplierName" type="text" placeholder="Input Supplier Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierName'); ?>
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


					<div class="form-group">
					  <label class="col-md-4 control-label" for="area">Area</label>
					  <div class="col-md-4">
						<input type="hidden" class="genAutocomplete" style="width:100%" placeholder="Area"  id="area" name="area"  data-url="{{ URL::to('/') }}/autocomplete/area"  required="">
						
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('area'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="region">Region</label>
					  <div class="col-md-4">
						<input type="hidden" class="genAutocomplete" style="width:100%" placeholder="Region"  id="region" name="region"  data-url="{{ URL::to('/') }}/autocomplete/region"  required="">
						
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
					  <label class="col-md-4 control-label" for="supplierPhone">Supplier Phone</label>  
					  <div class="col-md-4">
					  <input id="supplierPhone" name="supplierPhone" type="text" placeholder="Input Supplier Phone" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierPhone'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierFax">Supplier Fax</label>
					  <div class="col-md-4">
					  <input id="supplierFax" name="supplierFax" type="text" placeholder="Input Supplier Fax" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierFax'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierEmail">Supplier Email</label>
					  <div class="col-md-4">
					  <input id="supplierEmail" name="supplierEmail" type="text" placeholder="Input Supplier Email" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierEmail'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierContact">Supplier Contact</label>
					  <div class="col-md-4">
					  <input id="supplierContact" name="supplierContact" type="text" placeholder="Input Supplier Contact" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierContact'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="supplierMobile">Supplier Mobile</label>
					  <div class="col-md-4">
					  <input id="supplierMobile" name="supplierMobile" type="text" placeholder="Input Supplier Mobile" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('supplierMobile'); ?>
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