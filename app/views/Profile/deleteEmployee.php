<?php
  require("dbcon.php");
  if (isset($_POST['empname'])){
  $query="DELETE FROM employee WHERE employ_name='".$_POST['empname']."'";
  $del=mysql_query($query) or die(mysql_error());
}
				 
header("location: employee.php");
?>