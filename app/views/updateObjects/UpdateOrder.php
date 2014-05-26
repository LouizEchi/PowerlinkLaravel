<?php 
  require("dbcon.php");
  echo $_POST['orderid'];
  echo $_POST['custid'];
if (isset($_POST['custid']) ){

           $new2="UPDATE `order` SET order_custid = '{$_POST['custid']}' where order_id= '{$_POST['orderid']}'";
           $add2=mysql_query($new2) or die(mysql_error());
           }      
       if (isset($_POST['agentid']) ){
        echo "sda1";
           $new3="UPDATE `order` SET order_agentid = '{$_POST['agentid']}' where order_id= '{$_POST['orderid']}'";
           $add3=mysql_query($new3) or die(mysql_error());
           }      
       
               
             if (isset($_POST['eventid']) ){
              $value = 1;
           $new="UPDATE `order` SET order_eventid = '{$_POST['eventid']}' where order_id= '{$_POST['orderid']}'";
           $add=mysql_query($new) or die(mysql_error());

           }
             if (isset($_POST['order_sched']) ){
              $value = 1;
           $new="UPDATE `order` SET order_sched = '{$_POST['emplistid']}' where order_id= '{$_POST['orderid']}'";
           $add=mysql_query($new) or die(mysql_error());
           }

 header("location: order.php");

?>

<table class="display">
  <thead>
  </thead>
  <tbody>
<tr>
<td>
          
 

<tr>
<td>

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
                      <?=$rowAgent['employ_ln'];?>, <?=$rowAgent['employ_name']; ?> <?=$_POST['orderid'];?>
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
<tr><td><input type="date" step="1" minimum="1" placeholder="Order Schedule" name="ordersched"/></td></tr>
<tr align="center"><td align="center" style=> <input type="submit" class="btn btn-lg btn-success" value = "Update"style="margin-top:5px;text-align: center;" id="submit-btn"/></td></tr>
  </form>
</tbody>


</table>
