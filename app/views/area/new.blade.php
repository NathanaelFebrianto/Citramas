@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Add Area</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'area.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- Customer ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label"  for="areaId">Area Id</label>
					  <div class="col-md-4">
					    <input id = "areaId" required = "" placeholder = "Input Area Id" name="areaId" type="text" required = "" class="form-control input-md">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('areaId'); ?>
					  </div>
					</div>

					<!-- Customer Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="areaName">Area Name</label>
					  <div class="col-md-4">
					  <input id="areaName" name="areaName" type="text" placeholder="Input Area Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('areaName'); ?>
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
			{{ Form::close() }}
			</h4>
			</div>
    	</div>
    </div>
@stop