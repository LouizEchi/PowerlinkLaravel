<?php
session_start();
if (!isset($_SESSION['name']))
{ header('Location: LogIn.php');
}
else{
if (isset($_SESSION['name']))
 echo "<div style='background-color:white;margin-left:1000px;margin-bottom:-25px'><a class='brand' style='color:white; text-decoration:none'>Welcome ".$_SESSION['name']."</a><strong><a href='endsession.php' style='color:white;margin-left:10px' id='logout'>Log out</a></strong></div>"; 
require("dbcon.php");
if (isset($_POST['empname']) ){
 $query="SELECT * FROM employee WHERE employ_name='{$_POST['empname']}' ";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$number=$row['employ_id'];


}
		}
		   	
		   if (isset($_POST['emp_name']) ){
           $new2="UPDATE employee SET employ_name = '{$_POST['emp_name']}' where employ_name= '{$_POST['recordid']}'";
           $add2=mysql_query($new2) or die(mysql_error());
           }			
		   if (isset($_POST['emp_age']) ){
           $new3="UPDATE employee SET employ_age= '{$_POST['emp_age']}' where employ_name= '{$_POST['recordid']}'";
           $add3=mysql_query($new3) or die(mysql_error());
           }			
		   
		   			   
	     		   if (isset($_POST['emp_contact']) ){
           $new="UPDATE employee SET employ_contact = '{$_POST['emp_contact']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());

           }
	     		   if (isset($_POST['emp_worksched']) ){
           $new="UPDATE employee SET employ_worksched = '{$_POST['emp_worksched']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
           }
	     		   if (isset($_POST['emp_ln']) ){
           $new="UPDATE employee SET employ_ln= '{$_POST['emp_ln']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
		   header("location: employee.php");
           }
	     		   if (isset($_POST['emp_mi']) ){
           $new="UPDATE employee SET employ_mi = '{$_POST['emp_mi']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
           }
	     		   if (isset($_POST['emp_type']) ){
           $new="UPDATE employee SET employ_type = '{$_POST['emp_type']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
           }		   
	     		   if (isset($_POST['emp_payroll']) ){
           $new="UPDATE employee SET employ_payroll = '{$_POST['emp_payroll']}' where employ_name= '{$_POST['recordid']}'";
           $add=mysql_query($new) or die(mysql_error());
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
			    <th>First Name</th>
				<th>Middle Initial</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Contact</th>
				<th>Work Shedule</th>
				<th>Type</th>
				<th>Payroll</th>
			</tr>
		</thead>
		<tbody>
                     <?php
					 
if (isset($_POST['empname']) ){ 
      $number=$_POST['empname'];
	                     
                         echo "<div id='updates'>";
						 echo"<form class='form-search' action='updateEmployee.php' method='post'> ";
	                     echo "<tr><td><div><input type='text' required style='width:130' id='inputEmail' value='".$row['employ_name']."'"." name='emp_name'></div></td>" ;
						 echo "<td><div><input type='text' required style='width:50' id='inputEmail' value='".$row['employ_mi']."'"." name='emp_mi'></div></td>" ;
						 echo "<td><div><input type='text' required style='width:130' id='inputEmail' value='".$row['employ_ln']."'"." name='emp_ln'></div></td>" ;
	                     echo  "<td><div><input type='number' required style='width:50' step='1' min='18' id='inputEmail' value='".$row['employ_age']."'"." name='emp_age'></div></td>" ;
	                     echo  "<td><div><input type='number' required style='width:130' step='1' min='1' max='13' id='inputEmail' value='".$row['employ_contact']."'"." name='emp_contact'></div></td>" ;
                         echo  "<td><div><input type='text' required style='width:50' id='inputEmail' value='".$row['employ_worksched']."'"." name='emp_worksched'></div></td>" ;		
                         echo  "<td><div><input type='text' required style='width:130' id='inputEmail' value='".$row['employ_type']."'"." name='emp_type'></div></td>" ;	
                         echo  "<td><div><input type='float' required style='width:130' min='1' id='inputEmail' value='".$row['employ_payroll']."'"." name='emp_payroll'></div></td>" ;							 
                   		 echo "<input type='hidden' name='recordid' value='{$_POST['empname']}' /> '</tr>";
						 echo"<tr><td><button type='submit' class='btn' id='change'>Change</button></td></tr>";
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