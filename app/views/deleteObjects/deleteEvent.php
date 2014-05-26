<?php
  require("dbcon.php");
  if (isset($_POST['eventid'])){
  	 require("dbcon.php");
  $query="DELETE FROM `event` WHERE event_id='".$_POST['eventid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
				 
header("location: event_dates.php");
?>
