@extends('master')
@section('content')
	
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">
        <div class="tabbable tabs-left">
		        <button class="btn-link" data-toggle="modal" data-target="#myModal3">
              <div class=" col-xs-4">
                  <img class="img-circle"src="Assets/Logos and Icons/Button.png" style="height: 60px; width:60px; margin-bottom:10px;"></img>
              </div>  
                   <div class="col-xs-8" style="margin-top: 20px;">New Job Order</div>
             </button>
                      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal3" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel3">Job Order</h4>
                                 </div>
                                   <div class="modal-body">
                                       Hello
                                   </div>
                              </div>
                          </div>
                      </div>          

        <div class="tab-content" >
          <div class="tab-pane active">            
           <div class="container-fluid well" >
             <div id="mytable">
               <table id="myTable" class="display">
                 <thead>
                  <tr>
                    <td><strong>                        </strong></td>
                    <td><strong>    Agent Name          </strong></td>
                    <td><strong>    Customer Name       </strong></td>
					          <td><strong>    Rental Price        </strong></td>
                    <td align="center"><strong>Event    </strong></td>
                    <td><strong>    Employee List       </strong></td>
					          <td><strong>    Order Schedule      </strong></td>
                    <td><strong>                        </strong></td>
                    <td align="center"><strong>Action   </strong></td>
						      </tr>
                 </thead>
                 <tbody>

                    @while( $RowOrder = DB::select('select * from `order`', array(1)))
	         
                      <?php
	                    	$rowAgent   = DB::select("select * from employee where employ_id='".$rowOrder['order_agentid']."'", array(1),$AgentResult);
	                     	$rowCust    = DB::select("select * from `customer` where cust_id='".$rowOrder['order_custid']."'", array(1),$CustResult);
	                     	$rowEvent   = DB::select("select * from event where event_id='".$rowOrder['order_eventid']."'", array(1),$EventResult);
	                     	$rowRent    = DB::select("select * from package where pkg_id='".$rowEvent['event_pkgid']."'", array(1),$RentResult);
                      ?>
                      <tr>
                        <td> 
                          <img class="img-circle" src="/Powerlink/Employee Images/<?=$rowAgent['employ_Image']?>" style="height: 160px; width:160px;" ></img>
                     	   </td> 
                      
					             <td><img src='getImage.php' id='".$row['eqp_id']."' width='175' height='200' /></td>";

				          		 <td>{{$rowAgent['employ_ln']; $rowAgent['employ_name'] }}</td>
	                     <td>{{            $rowCust['cust_name'];               }}</td>
	                     <td>{{            $rowRent['pkg_price'];               }}</td>	
                        
                        <td>
                            <button class="btn btn-primary btn-lg" data-toggle="modal" style="width:120px;"data-target="#<?= $rowEvent['event_id'];?>">
                              Event
                            </button>
                            <div class="modal fade" id="<?= $rowEvent['event_id'];?>" tabindex="-1"  aria-labelledby="<?=$rowEvent['event_id'];?>Label" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="<?=$rowEvent['event_id'];?>Label">Event Information</h4>
                                  </div>
                                  <div class="modal-body">
                                    <table class="table table-hover">
                                      <tbody>              
                                        <td><strong>Event Name:            </strong> {{  $rowEvent['event_name'];      }}  </td>
                                          <tr>
                                             <td><strong> Event Location:  </strong> {{  $rowEvent['event_location'];  }}  </td>
                                          </tr>
                                          <tr>
                                             <td><strong> Event Package:   </strong> {{  $rowRent['pkg_name'];         }}  </td>
                                          </tr>
                                          <tr>
                                             <td><strong> Event Time Start:</strong> {{  $rowEvent['event_timestart']; }}  </td>
                                          </tr>
                                          <tr>
                                             <td><strong> Event Time End:  </strong> {{  $rowEvent['event_timeend'];   }}  </td>
                                          </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </td>
                        <td>
                           <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Mo<?=$rowOrder['order_id'];?>">
                            List No. <?=$rowOrder['employlist_id']?>
                            </button>
                              <div class="modal fade" id="Mo<?=$rowOrder['order_id'];?>" tabindex="-1" role="dialog" aria-labelledby="Mo<?=$rowOrder['order_id'];?>Label" aria-hidden="true">
                                 <div class="modal-dialog">
                                   <div class="modal-content">
                                     <div class="modal-header">                               
                                        <h4 class="modal-title" id="Mo<?=$rowOrder['order_id'];?>Label">Employee List</h4>
                                     </div>
                                     <div class="modal-body">
                                      <table class="table table-hover">
                                        <thead>
                                         <th> <strong> </strong></th>
                                         <th> <strong> Name</strong></th>
                                         <th> <strong> Employee Type</strong></th>
                                         <th> <strong> Worksched</strong></th>
                                        </thead>
                                        <tbody>
                                          @while($rowEmpList = DB::select("select * from employee_list where employlist_id = '".$rowOrder['employlist_id']."'", array(1),$resultEmpList))                
                                            <?php
                        
                                              $rowEmp=DB::select("select * from employee where employ_id = ".$rowEmpList['employ_id']."", array(1),$resultEmp);
                        
                                             ?>
          
                                          <tr>
                                            <td> <img class="img-circle" src="/Powerlink/Employee Images/<?=$rowEmp['employ_Image']?>"  style="height: 160px; width:160px;" ></img></td> 
                                            <td> {{  $rowEmp['employ_ln'], " ", $rowEmp['employ_name']; }}   </td>
                                            <td> {{              $rowEmp['employ_type']              }}   </td>
                                            <td> {{              $rowEmp['employ_worksched']         }}   </td>
                                          </tr>
                                          @endwhile
                                        </tbody>
                                      </table>
                                     </div>
                                   </div>
                                 </div>
                              </div>
                        </td>

                        <td>
                          {{$rowOrder['ordersched_date']}}
                        </td> 

						            <td>
                          <button class='btn-link' data-toggle='modal' data-target="#myModal<?=$rowOrder['order_id']?>">
                            <img src='edit_icon2.jpg'></img>Edit
                          </button>
                          <div class="modal fade" id="myModal<?=$rowOrder['order_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?=$rowOrder['order_id']?>" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal<?=$rowOrder['order_id']?>" aria-hidden="true">
                                  &times;
                                  </button>
                                    <h4 class="modal-title" id="myModalLabel<?=$rowOrder['order_id']?>">Edit Order</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" action="Updateorder.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
                                    <input type='hidden' name='orderid' value={{ $rowOrder['order_id'] }}/>
                                    @include('Update Objects\UpdateOrder')
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                    	  <td>
                          <form action='DeleteOrder.php' method='post'>
							               <input type='hidden' name='orderid' value=".$rowOrder['order_id']."/>
							                 <button class='btn-link' type='submit'>
							                   <img src='delete_icon.jpg'></img>Delete
                               </button>
							            </form>
                        </td> 			 
	                    </tr>          
              @endwhile			     
                    </tbody>					
                 </table>
				</div>					   
        </div>
      </div>
    </div>
 
@stop
@section('scripts')
 <script type="text/javascript">
      $(document).ready( function () {
   $('#myTable').DataTable();
} );
	</script>
 @show
