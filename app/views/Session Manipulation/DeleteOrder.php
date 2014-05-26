<?php
  require("dbcon.php");
  if (isset($_POST['orderid'])){
  $query="DELETE FROM `order` WHERE order_id='".$_POST['orderid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
				 
header("location: order.php");
?>
