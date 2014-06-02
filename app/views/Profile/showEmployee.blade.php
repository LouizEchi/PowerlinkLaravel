@extends('master')
   @section('content')
 <div class="row col-xs-7" >
   <table class="flat-table flat-table-1">
   <thead>
   	<td>{{$employee->employee_type, " Profile" }}</td>
   </thead>
   <tbody>
     <tr>
       <td> <img class="img-profile" src="/Assets/ProfilePictures/{{ $employee->employee_Image}}"/></td>
     </tr>
	 <tr> 
	   <td>Profile Information</td>
	 </tr>
	 <tr>
	   <td> Name: {{ $employee->employee_name, " ",$employee->employee_mi, " ",  $employee->employee_ln}} </td>
	 </tr>
	 <tr>
	   <td> Date of Birth:  {{ $employee->employee_birthdate }} </td>
	 </tr>
	 <tr>
	   <td> Contact: {{$employee->employee_contact}} </td>
	 </tr>
	 <tr>
	   <td> Agent Type: {{$employee->employee_type}} </td>
	 </tr>
   </tbody>
   </table>
 </div>
 
 <div class="row col-xs-5">
	  <table class="flat-table flat-table-1" style="width:100%">
	    <thead>
	      <td class="col-xs-4">Date</td>
	      <td class="col-xs-8">Event</td>
	    </thead>
	    <tbody>
	      <tr><td>
	        {{$employee->employee_birthdate }}
	      </td>
	      <td>
	      	MY BIRTH!
	      </td>
	      </tr>
	    </tbody>
	  </table>
 </div>


@stop