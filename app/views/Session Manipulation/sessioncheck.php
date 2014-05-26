
<?php
session_start();
if (!isset($_SESSION['name']) || !isset($_SESSION['password']) )
{ 
	header('Location: Home.php');
	session_destroy();
}
else if (isset($_SESSION['name'])){

 echo "<div class = 'container-fluid-well' style='float: right; margin-right: 100px;margin-bottom:-20px'><a class='brand' style='color:gray; text-decoration:none'>Welcome ".$_SESSION['name']."</a><strong><a href='endsession.php' style='color:gray;margin-left:10px' id='logout'>Log out</a></strong></div>"; 
require('Session Manipulation/dbcon.php');
}
?>
