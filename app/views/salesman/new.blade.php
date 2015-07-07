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
                    <strong>Add Salesman</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'salesman.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesId">Salesman Id</label>
					  <div class="col-md-4">
					    <input id = "salesId" name="salesId" type="text" placeholder="Input Salesman ID" required="" class="form-control input-md">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesId'); ?>
					  </div>
					
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesName">Salesman Name</label>
					  <div class="col-md-4">
					  <input id="salesName" name="salesName" type="text" placeholder="Input Salesman Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesName'); ?>
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
					  <label class="col-md-4 control-label" for="salesPhone">Salesman Phone</label>  
					  <div class="col-md-4">
					  <input id="salesPhone" name="salesPhone" type="text" placeholder="Input Salesman Phone" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesPhone'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesMobile1">First Salesman Mobile</label>
					  <div class="col-md-4">
					  <input id="salesMobile1" name="salesMobile1" type="text" placeholder="Input First Salesman Mobile" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesMobile1'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesMobile2">Second Salesman Mobile</label>
					  <div class="col-md-4">
					  <input id="salesMobile2" name="salesMobile2" type="text" placeholder="Input Second Salesman Mobile" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesMobile2'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesPinBB">Salesman Pin BB</label>
					  <div class="col-md-4">
					  <input id="salesPinBB" name="salesPinBB" type="text" placeholder="Input Salesman Pin BB" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesPinBB'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesEmail">Salesman Email</label>
					  <div class="col-md-4">
					  <input id="salesEmail" name="salesEmail" type="text" placeholder="Input Salesman Email" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesEmail'); ?>
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
					  <label class="col-md-4 control-label" for="salesReligion">Salesman Religion</label>
					  <div class="col-md-4">
					  <input id="salesReligion" name="salesReligion" type="text" placeholder="Input Salesman Religion" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesReligion'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesPosition">Salesman Position</label>
					  <div class="col-md-4">
					  <input id="salesPosition" name="salesPosition" type="text" placeholder="Input Salesman Position" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesPosition'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesStatus">Salesman Status</label>
					  <div class="col-md-4">
					  <input id="salesStatus" name="salesStatus" type="text" placeholder="Input Salesman Status" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesStatus'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="salesChildren">Salesman Children</label>
					  <div class="col-md-4">
					  <input id="salesChildren" name="salesChildren" type="text" placeholder="Input Salesman Children" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('salesChildren'); ?>
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