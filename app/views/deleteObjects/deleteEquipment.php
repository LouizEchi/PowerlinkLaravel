<?php
  require("dbcon.php");
  if (isset($_POST['eqpname'])){
  $query="DELETE FROM equipment WHERE eqp_name='".$_POST['eqpname']."'";
  $del=mysql_query($query) or die(mysql_error());
}
				 
header("location: index.php");
?>


