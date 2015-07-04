@extends('master')

@section('css')
  <!-- style log in -->
  <style type="text/css">
      body {
      background-color: white;
      }

      #loginbox {
          margin-top: 30px;
      }

      #loginbox > div:first-child {        
          padding-bottom: 10px;    
      }

      .iconmelon {
          display: block;
          margin: auto;
      }

      #form > div {
          margin-bottom: 25px;
      }

      #form > div:last-child {
          margin-top: 10px;
          margin-bottom: 10px;
      }

      .panel {    
          background-color: transparent;
      }

      .panel-body {
          padding-top: 30px;
          background-color: rgba(2555,255,255,.3);
      }

      #particles {
          width: 100%;
          height: 100%;
          overflow: hidden;
          top: 0;                        
          bottom: 0;
          left: 0;
          right: 0;
          position: absolute;
          z-index: -2;
      }
      .error{
        color : red;
        font-weight: bold;
      }

      .iconmelon,
      .im {
        position: relative;
        padding-right: 250px;
        width: 100px;
        height: 75px;
        display: block;
        fill: #525151;
      }

      .iconmelon:after,
      .im:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
  </style>

@stop

@section('content')
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
      <div class="row">                
          <div class="iconmelon">
            <img src="public/img/logo.png" height="70" width="250">
          </div>
      </div>

        
      <div class="panel panel-default" >
          <div class="panel-heading">
              <div class="panel-title text-center">Welcome Back !!</div>
          </div>     

          <div class="panel-body" >

              {{ Form::open(array('url' => '/login' , 'method' => 'POST' , 'id' => 'form' , 'class' => 'form-horizontal')) }}
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::text('username', '' , array('placeholder' => 'Username' , 'class' => 'form-control'))}}
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {{ Form::password('password', array('placeholder' => 'Password' , 'class' => 'form-control'))}}
                </div>

                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                      {{ Form::button('<i class="glyphicon glyphicon-log-in"></i> Log in', array('class' => 'btn btn-primary pull-right' , 'type' => 'submit')) }}
                                             
                    </div>
                </div>

              {{ Form::close() }}


              <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                      <div class = "error">

                        {{ Session::get('message') }} 
                      </div>               
                    </div>
                </div>
                                                     
          </div>                     
      </div>
  </div>

@stop