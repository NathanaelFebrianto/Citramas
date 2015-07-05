@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Add Region</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'region.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <div class="col-md-4">
					    <input type="hidden" name="regionId" type="text" value={{$id}} class="form-control input-md" readonly>
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('regionId'); ?>
					  </div>
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="regionName">Region Name</label>
					  <div class="col-md-4">
					  <input id="regionName" name="regionName" type="text" placeholder="Input Region Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('regionName'); ?>
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