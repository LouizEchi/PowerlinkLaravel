@extends('master')
@section('content')

@if(Auth::attempt(array('username' =>'Bruce','password' => 'IAMBATMAN')))
@if (Auth::check(array('user_type' => 'Admin')))
<!-- will be used to show any messages -->
    @if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table id="example" class="flat-table flat-table-1">
      
      <!-- Button trigger modal -->
       <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal" style="padding:10px;">
         Add Agent
       </button>
<!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Add Agent</h4>
            </div>
           <div class="modal-body">
              ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
             </div>
            </div>
          </div>
        </div> 

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
            {{ Form::open(array('url' => 'profile/'.$value->employee_id, 'class' => 'pull-right','style'  => 'margin-left:-50px; ')) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Delete Agent', array('class' => 'btn btn-small  btn-danger')) }}
            {{ Form::close() }}

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
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
      editor = new $.fn.dataTable.Editor( {
        ajax: "../php/staff.php",
        table: "#example",
        fields: [ {
                label: "First name:",
                name: "first_name"
            }, {
                label: "Last name:",
                name: "last_name"
            }, {
                label: "Position:",
                name: "position"
            }, {
                label: "Office:",
                name: "office"
            }, {
                label: "Extenstion:",
                name: "extn"
            }, {
                label: "Start date:",
                name: "start_date"
            }, {
                label: "Salary:",
                name: "salary"
            }
        ]
      } );
 
      var table = $('#example').DataTable( {
        lengthChange: false,
        ajax: "../php/staff.php",
        columns: [
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },
            { data: "position" },
            { data: "office" },
            { data: "extn" },
            { data: "start_date" },
            { data: "salary", render: $.fn.dataTable.render.number( '\'', '.', 0, '$' ) }
        ]
      } );
 
      var tableTools = new $.fn.dataTable.TableTools( table, {
        sRowSelect: "os",
        aButtons: [
            { sExtends: "editor_create", editor: editor },
            { sExtends: "editor_edit",   editor: editor },
            { sExtends: "editor_remove", editor: editor }
        ]
      } );
      $( tableTools.fnContainer() ).appendTo( '#example_wrapper .col-xs-6:eq(0)' );
    } );
  </script>
@show