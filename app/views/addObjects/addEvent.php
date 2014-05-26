 <?php 
  require("dbcon.php");

if(isset($_POST['custid']))
{
$add=mysql_query($new) or die(mysql_error());
$new="INSERT INTO  `order`(order_custid,order_agentid,order_eventid,employlist_id,ordersched_date) 
        VALUES ('{$_POST['custid']}', '{$_POST['agentid']}', '{$_POST['eventid']}', '{$_POST['emplistid']}','{$_POST['ordersched']}')";
$add=mysql_query($new) or die(mysql_error());

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
 <form class="form-horizontal" action="addEvent.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
          
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
</tr>
 <tr>
                 
                <td>
<tr><td><input required type="text" step="1" minimum="1" placeholder="Event Name" name="eventname"/></td></tr>
<tr><td><input required type="text" step="1" minimum="1" placeholder="Location" name="eventlocation"/></td></tr>
<tr><td><input required type="text" step="1" minimum="1" placeholder="Start Time" name="eventstime"/></td></tr>
<tr><td><input required type="text" step="1" minimum="1" placeholder="End time" name="eventetime"/></td></tr>
<tr><td><input required type="date" step="1" minimum="1" placeholder="Order Schedule" name="ordersched"/></td></tr>

</tbody>


</table>
<tr align="center"><td align="center" style=> <input type="submit" class="btn btn-lg btn-success" value = "Add"style="margin-top:5px; width:500px; text-align: center;" id="submit-btn"/></td></tr>
  </form>


