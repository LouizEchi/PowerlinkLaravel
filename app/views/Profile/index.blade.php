@extends('master')
@section('content')
@if(Auth::attempt(array('username' =>'Bruce','password' => 'IAMBATMAN')))
@if (Auth::check(array('user_type' => 'Admin')))
<!-- will be used to show any messages -->
    @if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="flat-table flat-table-1">
    <a class="btn btn-small btn-primary" href="{{ URL::to('profile/create') }}" style="margin:10px;">Add Agent</a>
      <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Date of Birth</td>
          <td>Contact</td>
          <td>Work Scheduke</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
      @foreach($employee as $key => $value)
        <tr>
          <td>{{ $value->employee_id }}</td>
          <td>{{ $value->employee_ln, " ", $value->employee_name," ", $value->employee_mi }}</td>
          <td>{{ $value->employee_birthdate }}</td>
          <td>{{ $value->employee_contact }}</td>
          <td>{{ $value->employee_WorkSched }}</td>
    
          <!-- we will also add show, edit, and delete buttons -->
          <td class="col-xs-4">
    
            <!-- delete the nerd (uses the destroy method DESTROY /profile/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
    
            <!-- show the nerd (uses the show method found at GET /profile/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('profile/' . $value->employee_id) }}">View Agent</a>
    
            <!-- edit this nerd (uses the edit method found at GET /profile/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('profile/' . $value->employee_id . '/edit') }}">Edit Agent</a>
            <a class="btn btn-small btn-danger" href="{{ URL::to('profile/' . $value->id . '/delete') }}">Delete Agent</a>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
 @elseif(Auth::check(array('user_type' => 'Agent')))
  {    
    <a class="btn btn-small btn-success" href="{{ URL::to('profile/' . $value->id) }}">View Agent</a>
    <a class="btn btn-small btn-info" href="{{ URL::to('profile/' . $value->id . '/edit') }}">Edit Agent</a>

  }
@endif
@endif


@stop
