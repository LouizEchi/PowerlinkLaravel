<?php
session_start();
if (!isset($_SESSION['name']))
{ header('Location: LogIn.php');
}
else{
if (isset($_SESSION['name']))
 echo "<div style='background-color:white;margin-left:1000px;margin-bottom:-25px'><a class='brand' style='color:white; text-decoration:none'>Welcome ".$_SESSION['name']."</a><strong><a href='endsession.php' style='color:white;margin-left:10px' id='logout'>Log out</a></strong></div>"; 
require("dbcon.php");
if (isset($_POST['eqpname']) ){
 $query="SELECT * FROM equipment WHERE eqp_name='{$_POST['eqpname']}' ";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$number=$row['eqp_id'];

echo "<h1>".$row['eqp_id']."</h1>";
}
		}
		   	
		   if (isset($_POST['pkg_price']) ){
           $new2="UPDATE equipment SET eqp_rentprice = '{$_POST['pkg_price']}' where eqp_name= '{$_POST['recordid']}'";
           $add2=mysql_query($new2) or die(mysql_error());
           }			
		   if (isset($_POST['pkg_desc']) ){
           $new3="UPDATE equipment SET eqp_desc = '{$_POST['pkg_desc']}' where eqp_name= '{$_POST['recordid']}'";
           $add3=mysql_query($new3) or die(mysql_error());
           }			
		   
		   			   
	     		   if (isset($_POST['pkg_name']) ){
           $new="UPDATE equipment SET eqp_name = '{$_POST['pkg_name']}' where eqp_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());

           }
	     		   if (isset($_POST['qty']) ){
           $new="UPDATE equipment SET eqp_qty = '{$_POST['qty']}' where eqp_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
		   header("location: index.php");
           }

?>
<!DOCTYPE html >
<html>
<head>
  <title>Packages</title>
      <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
  
     <script src="/dist/js/bootstrap.min.js" type="text/javascript"> </script>
    <script src="/js/jquery-2-1-0.js" type="text/javascript"> </script>
  <script src="/js/modal.js" type="text/javascript"> </script>
  <script type="text/javascript" language="javascript" src="/dist/js/jquery-2-1-0.js"></script>
</head>
<body style=" background: url(/android.png) ">
<?php include "navbar.php";?>

    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">

        <div class="tabbable tabs-left">

           <div class="tab-content">
              <div class="tab-pane active" id="A">
            

   
   
<?php

?>

<div id="update">
		<table class="table table-hover">
		<thead>
		    <tr>
			    <th>Equipment Name</th>
				<th>Rental Price</th>
				<th>Description</th>
				<th>Quantity</th>
			</tr>
		</thead>
		<tbody>
                     <?php
if (isset($_POST['eqpname']) ){ 
      $number=$_POST['eqpname'];
	                     
                         echo "<div id='updates'>";
						 echo"<form class='form-search' action='update.php' method='post'> ";
	                     echo "<tr><td><div><input required type='text' id='inputEmail' value='".$row['eqp_name']."'"." name='pkg_name'></div></td>" ;
	                     echo  "<td><div><input required type='float' min='0' id='inputEmail' value='".$row['eqp_rentprice']."'"." name='pkg_price'></div></td>" ;
	                     echo  "<td><div><input required type='text' id='inputEmail' value='".$row['eqp_desc']."'"." name='pkg_desc'></div></td>" ;
                         echo  "<td><div><input required type='number' step='1' min='0' id='inputEmail' value='".$row['eqp_qty']."'"." name='qty'></div></td>" ;						 
                   		 echo "<input type='hidden' name='recordid' value='{$_POST['eqpname']}' /> '</tr>";
						 echo"<tr><td><button type='submit' class='btn' id='change'>Change</button></td><tr>";
                         echo "</form>";   					 
	                     echo "</div>";
						  }

					?>
					<input type="hidden" id="change" value='<?php echo $number; ?>' name="oldname"/>
												  
                    </tbody>

                 </table>
</div>
			 
             </div>
          </div>
        </div> 
      </div>
   </div>
 

 </body>
 
 <script type="text/javascript">
      $(document).ready(function(){
  $("#change").click(function(){

	});
	});

	</script>
</html>