@extends('master')

@section('content')
	<div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Add User</strong>
                </h2>
                <hr>
            <h4 class="intro-text text-center">
            {{ Form::open(array('route' => 'user.store' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
              
				<fieldset>
					<!-- User ID -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="userId">User Id</label>
					  <div class="col-md-4">
					    <input name="userId" type="text" value = "{{ $id }}" class="form-control input-md" readonly>
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('userId'); ?>
					  </div>
					</div>

					<!-- User Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="userName">User Name</label>
					  <div class="col-md-4">
					  <input id="userName" name="userName" type="text" placeholder="Input User Name" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('userName'); ?>
					  </div>
					</div>

					<!-- User Password -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Password</label>
					  <div class="col-md-4">
					  <input id="password" name="password" type="password" placeholder="Input Staff Password" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('password'); ?>
					  </div>
					</div>

					<!-- User Name -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Confirmation Password</label>
					  <div class="col-md-4">
					  <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Input Staff Password" class="form-control input-md" required="">
					  </div>
					  <div class="col-md-4 text-left">
            				<?php echo $errors->first('password_confirmation'); ?>
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