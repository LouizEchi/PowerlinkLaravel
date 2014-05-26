 <?php 
  require("dbcon.php");

if(isset($_POST['custid']))
{
$new="INSERT INTO  `order`(order_custid,order_agentid,order_eventid,employlist_id,ordersched_date) 
        VALUES ('{$_POST['custid']}', '{$_POST['agentid']}', '{$_POST['eventid']}', '{$_POST['emplistid']}','{$_POST['ordersched']}')";
$add=mysql_query($new) or die(header("location: order.php"));
 header("location: order.php");
}

?>

<table class="display">
  <thead>
  </thead>
  <tbody>
<tr>
<td>
          
 

<tr>
<td>
 <form class="form-horizontal" action="addorder.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
 <?php
                    $AgentQuery= "select * from employee where employ_type = 'Admin' OR employ_type = 'Agent'";
                    $AgentResult = mysql_query($AgentQuery);
                  ?>
                    <select name='agentid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                      Pick an Agent
                    </option>
                    <?php
                    while($rowAgent=mysql_fetch_array($AgentResult))
                     {
                    ?>
                    <option value = <?=$rowAgent['employ_id'];?>>
                      <?=$rowAgent['employ_ln'];?>, <?=$rowAgent['employ_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  </select>
                </td>
                 <td>   <a href="addEmployee.php">Or Add a New Agent</a></td>
              </tr>              
<tr>
<td>
  <?php
                    $CustQuery= "select * from customer";
                    $CustResult = mysql_query($CustQuery);
                  ?>
                    <select name='custid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                      Pick a Customer
                    </option>
                    <?php
                    while($rowCust=mysql_fetch_array($CustResult))
                     {
                    ?>
                    <option value = <?=$rowCust['cust_id'];?>>
                      <?=$rowCust['cust_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  </select>
                </td>
                 <td>   <a href="addCustomer.php">Or Add a New Customer</a></td>
              </tr>              
<tr>
<td>       
 <?php
                    $RentQuery= "select * from package";
                    $RentResult = mysql_query($RentQuery);
                  ?>
                    <select name='pkgid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                      Pick a Package
                    </option>
                    <?php
                    while($rowRent=mysql_fetch_array($RentResult))
                     {
                    ?>
                    <option value = <?=$rowRent['pkg_id'];?>>
                      <?=$rowRent['pkg_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  </select>
                </td>
                 <td>   <a href="package.php">Or Add a New Package</a></td>
              </tr>

              <tr>
                 
                <td>

                
<?php
                   $EventQuery= "select * from event";
                      $EventResult = mysql_query($EventQuery);
                  ?> 
                    <select name='eventid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                      Pick an Event
                    </option>
                    <?php
                    while($rowEvent=mysql_fetch_array($EventResult ))
                     {
                    ?>
                    <option value = <?=$rowEvent['event_id'];?>>
                      <?=$rowEvent['event_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  
                    
                  </select>
               <td>   <a href="event_dates.php">Or Add a New Event</a></td>
                
</td>
</tr>
 <tr>
                 
                <td>
<?php
                  $Reference = 0;
                   $EmpListQuery= "select * from employee_list";
                      $EmpListResult = mysql_query($EmpListQuery);
                  ?> 
                    <select name='emplistid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                     List of Employees
                    </option>
                    <?php
                    while($rowEmpList=mysql_fetch_array($EmpListResult ))
                     {

                     if($rowEmpList['employlist_id'] != $Reference)
                      {
                        $Reference = $rowEmpList['employlist_id'];
                    ?>

                    <option value = <?=$rowEmpList['employlist_id'];?>>
                      List No. <?=$rowEmpList['employlist_id'];?>
                    </option>

                    <?php
                      }
                     }
                      ?>
                  
                    
                  </select>
               <td>   <a href="Employee.php">Or Make a New Employee List</a></td>
                
</td>
</tr>
<tr><td><input required type="date" step="1" minimum="1" placeholder="Order Schedule" name="ordersched"/></td></tr>

</tbody>


</table>
<tr align="center"><td align="center" style=> <input type="submit" class="btn btn-lg btn-success" value = "Add"style="margin-top:5px; width:500px; text-align: center;" id="submit-btn"/></td></tr>
  </form>