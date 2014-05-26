<?php
require("dbcon.php");
if (isset($_POST['username']) && isset($_POST['password'])){
	 echo "happy";
 $query="SELECT * FROM user WHERE username='{$_POST['username']}'";
  $result=mysql_query($query);
  $row=mysql_fetch_array($result);
   $query1="SELECT * FROM user WHERE username='{$_POST['password']}'";
$result1=mysql_query($query1);
$row1=mysql_fetch_array($result1);
if($row['username']=="" && $row1['password']==""){
echo "<div style='margin-left:100px'>
		<strong><a class='brand well' style='color:red; text-decoration:none'>Wrong username/password!</a></strong></div>";
 session_destroy();
header("location: LogIn.php");
}
else{

   session_start();
   echo "happy";
    $_SESSION['ID'] = 1;
    $_SESSION['name']= $_POST['username'];
     $_SESSION['password']= $_POST['password'];
}
if(isset($_SESSION['ID'])){
	echo "Welcome"; echo $_SESSION['name']. $_SESSION['ID'];
	header("location: home.php");
}
}


?>