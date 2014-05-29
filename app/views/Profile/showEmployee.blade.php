@extends('master')
   @section('content')
<div class="jumbotron text-center">
  <div class="row">
    <h1 style="font-size:20px;" class="pull-left">{{Auth::user()->user_type, " Profile" }}</h1>
	<div class="col-xs-3">
      <img class="img-profile" src="/Assets/ProfilePictures/{{ $employee->employee_Image}}"/>
	   {{ $employee->employee_name, " ", $employee->employee_ln }}
	</div>
	<div class="col-xs-3">
	    <h2>{{ $employee->employee_name," is ", $employee->employee_age, " years old!" }}</h2>
	</div>
  </div>
</div>
@stop