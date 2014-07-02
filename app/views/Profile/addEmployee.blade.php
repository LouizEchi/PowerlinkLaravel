@extends('master')
   @section('content')
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'profile')) }}
  <table class="flat-table flat-table-1" style="width:50%;" >
    <thead>
    <td></td>
    <td> ADD AGENT</td>
    <td></td>
    </thead>
    <tbody>
     <tr>
     <td></td>
     <td>
      <div class="form-group">
        {{ Form::label('employee_ln', 'Last Name') }}
        {{ Form::text('employee_ln', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_name', 'First Name') }}
        {{ Form::text('employee_name', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>      
      <td>
      <div class="form-group">
       {{ Form::label('employee_mi', 'MI') }}
       {{ Form::text('employee_mi', Input::old('name'), array('class' => 'form-control')) }}
      </div>  
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_age', 'Birth Date') }}
        {{ Form::input('date','employee_birthdate', Input::old('date'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>      
      <td>
      <div class="form-group">
        {{ Form::label('employee_contact', 'Contact') }}
        {{ Form::text('employee_contact', Input::old('name'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>      
      <td>
      <div class="form-group">
        {{ Form::label('employee_type', 'Agent Type') }}
        <div style="color:black;">
          {{ Form::select('employee_type', array('Admin' => 'Admin', 'Agent' => 'Agent'), 'Choose Type') }}
        </div>
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>      
      <td>
      <div class="form-group">
        {{ Form::label('employee_WorkSched', 'Work Schedule') }}
        {{ Form::text('employee_WorkSched', Input::old('email'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
     <td></td>
      <td>
      <div class="form-group">
        {{ Form::label('employee_Image', 'Employee Image') }}
        {{ Form::text('employee_Image', Input::old('string'), array('class' => 'form-control')) }}
      </div>
      </td>
      <td></td>
      </tr>
      <tr>
      <td></td>
      <td>
       {{ Form::hidden('employee_id','id') }}
      {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
      </td>
      <td></td>
      </tr>
   </tbody>
  </table>
{{ Form::close() }}
</div>
 @stop
@section('scripts')

@show