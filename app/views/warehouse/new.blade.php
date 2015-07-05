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
                    <strong>Add Warehouse</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'warehouse.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="warehouseId">Warehouse Id</label>
					  <div class="col-md-4">
					    <input name="warehouseId" type="text" class="form-control input-md" placeholder="Input Warehouse ID" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehouseId'); ?>
					  </div>
					
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="warehouseName">Warehouse Name</label>
					  <div class="col-md-4">
					  <input id="warehouseName" name="warehouseName" type="text" placeholder="Input Warehouse Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehouseName'); ?>
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
					  <label class="col-md-4 control-label" for="warehousePhone">Warehouse Phone</label>  
					  <div class="col-md-4">
					  <input id="warehousePhone" name="warehousePhone" type="text" placeholder="Input Warehouse Phone" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehousePhone'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="warehouseFax">Warehouse Fax</label>
					  <div class="col-md-4">
					  <input id="warehouseFax" name="warehouseFax" type="text" placeholder="Input Warehouse Fax" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehouseFax'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="warehouseEmail">Warehouse Email</label>
					  <div class="col-md-4">
					  <input id="warehouseEmail" name="warehouseEmail" type="text" placeholder="Input Warehouse Email" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehouseEmail'); ?>
					  </div>
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="warehousePIC">Warehouse PIC</label>
					  <div class="col-md-4">
					  <input id="warehousePIC" name="warehousePIC" type="text" placeholder="Input Warehouse PIC" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('warehousePIC'); ?>
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