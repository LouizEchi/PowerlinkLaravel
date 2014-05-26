@extends('master')
   @section('content')
<div class="container-primary" align="center">
<h1 style="font-size:20px;">Add an Agent</h1>
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'profile')) }}
  <table class="table">

    <tbody>
     <tr>
     <td>
      <div class="form-group">
        {{ Form::label('employee_ln', 'Last Name') }}
        {{ Form::text('employee_ln', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_name', 'First Name') }}
        {{ Form::text('employee_name', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td>
      <div class="form-group">
       {{ Form::label('employee_mi', 'MI') }}
       {{ Form::text('employee_mi', Input::old('name'), array('class' => 'form-control')) }}
      </div>  
      </td>
      </tr>
      <tr>
      <td>
      <div class="form-group">
        {{ Form::label('employee_age', 'Age') }}
        {{ Form::text('employee_age', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_contact', 'Contact') }}
        {{ Form::text('employee_contact', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_WorkSched', 'Work Schedule') }}
        {{ Form::text('employee_WorkSched', Input::old('email'), array('class' => 'form-control')) }}
      </div>
      </td>
      </tr>
      <tr>
       <td></td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_Image', 'Employee Image') }}
        {{ Form::text('employee_Image', Input::old('email'), array('class' => 'form-control')) }}
      </div>
      </td>
       <td></td>
      </tr>
      <tr>
      <td></td>
      <td align="center">
      {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
      </td>
      <td></td>
      </tr>
   </tbody>
  </table>
{{ Form::close() }}
</div>
</div>
 @stop
@section('scripts')

@show