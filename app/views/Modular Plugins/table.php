
<?php
if((isset($_POST['date']) === true && empty($_POST['date']) === false))
{
 $dbcon = mysql_connect("localhost","root", "") or die("The error: ".mysql_error());
 mysql_select_db("powerlink");
 
 /*****
 userid is the id of the div that posts user_id attribute of user_id
 $query1="SELECT * FROM user WHERE user_id = '".mysql_real_escape_string(trim($_POST['userid']))."'"  ;
 ******/
  $qorderDate="SELECT * FROM `order` WHERE ordersched_date = '".mysql_real_escape_string(trim($_POST['date']))."'"  ;
  $orderResult=mysql_query($qorderDate) or die("The error: ".mysql_error());
	while($orderRow=mysql_fetch_array($orderResult))
	{
		
	$qemplistEmpid="SELECT * FROM `employee_list` WHERE employlist_id = '".$orderRow['employlist_id']."'";
	$emplistResult=mysql_query($qemplistEmpid);
	$emplistRow=mysql_fetch_array($emplistResult);
	$qeventID="SELECT * FROM `event` WHERE event_id = '".$orderRow['order_eventid']."'";
	$eventResult=mysql_query($qeventID);
	$eventRow=mysql_fetch_array($eventResult);
	$qpackageID="SELECT * FROM `package` WHERE pkg_id = '".$eventRow['event_pkgid']."'";
	$packageResult=mysql_query($qpackageID);
	$packageRow=mysql_fetch_array($packageResult);
	$qempID = "SELECT * FROM `employee` WHERE employ_id = '".$orderRow['order_agentid']."'";
	$empResult=mysql_query($qempID);
	$empRow=mysql_fetch_array($empResult);
/**echos the attributes in the event entity**/
?>

 <tr>
					 <td><?=$empRow['employ_name']?></td>
					<td><?=$packageRow['pkg_name']?></td> 
					<td><?=$eventRow['event_name']?></td>  
					<td><?=$eventRow['event_location']?></td> 
					<td><?=$eventRow['event_timestart']?></td>  
					<td><?=$eventRow['event_timeend']?></td> 					
                </tr>
	}
<?php
}
}
?>