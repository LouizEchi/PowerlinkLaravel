@extends('master')
@section('content')
<div class="container-primary">
@if(Auth::attempt(array('username' =>'Bruce','password' => 'IAMBATMAN')))
@if (Auth::check(array('user_type' => 'Admin')))
<!-- will be used to show any messages -->
    @if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
    <a class="btn btn-small btn-primary" href="{{ URL::to('profile/create') }}" style="margin:10px;">Add Agent</a>
      <thead>
        <tr>
          <td></td>
          <td>ID</td>
          <td>Name</td>
          <td>Age</td>
          <td>Contact</td>
          <td>Work Scheduke</td>
          <td>Outsourced?</td>
          <td>Action</td>
        </tr>
      </thead>
      <tbody>
      @foreach($employee as $key => $value)
        <tr>
          <td align = "center"><img class="img-circle" style = "height 100px; width: 150px;"src = "/Assets/ProfilePictures/{{ $value->employee_Image }}"/></td>
          <td>{{ $value->employee_id }}</td>
          <td>{{ $value->employee_ln, " ", $value->employee_name," ", $value->employee_mi }}</td>
          <td>{{ $value->employee_age }}</td>
          <td>{{ $value->employee_contact }}</td>
          <td>{{ $value->employee_WorkSched }}</td>
          <td>{{ $value->employee_otsrsrc }}</td>
    
          <!-- we will also add show, edit, and delete buttons -->
          <td>
    
            <!-- delete the nerd (uses the destroy method DESTROY /profile/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
    
            <!-- show the nerd (uses the show method found at GET /profile/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('profile/' . $value->id) }}">View Agent</a>
    
            <!-- edit this nerd (uses the edit method found at GET /profile/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('profile/' . $value->id . '/edit') }}">Edit Agent</a>
    
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
</div>
@endif
@endif


@stop
