
<?php
 if (isset($_POST['custid'])){
     require("dbcon.php");
  $query="DELETE FROM `customer` WHERE cust_id='".$_POST['custid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
?>


<!DOCTYPE html >
<html>
<head>
  <title>Customer Requests</title>
   <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/css/jquery.dataTables.css"></script>
<script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
  <script src="/js/bootstrap-modal.js" type="text/javascript"> </script>
     <script src="/dist/js/bootstrap.min.js" type="text/javascript"> </script>
 
<style type="text/css" title="currentStyle">
    @import "/DataTables-1.9.4/media/css/demo_table.css";
</style>


</head>

<body style=" background: url(/android.png);">
    <?php include "Navbar.php";?>
	
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">        
           <div class="tab-content" >
	
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
							   
                 <table id="myTable" class="display">
                   <thead>
                     <tr>
                   
                       <td><strong>Customer Name</strong></td>
                       <td><strong>Email</strong></td>
					   <td><strong>Request</strong></td>

                        <td style="text-align:center"><strong>Action</strong></td>
						</tr>
                   </thead>
	
                   <tbody>

                     <?php
                       $a=1;
                       
                        $query="select * from customer";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
	                   {
                         echo "<tr>";
	                          ?>
              
                       <?php
					 //  echo "<td><img src='getImage.php' id='".$row['eqp_id']."' width='175' height='200' /></td>";

                      echo "<td>".$row['cust_name']."</td>";
	                     echo "<td>".$row['cust_email']."</td>";
	                     echo "<td>".$row['cust_request']."</td>";			
                    echo "<td><form action='Request.php' method='post'>
					         <input type='hidden' name='custid' value=".$row['cust_id']." />
				          	<button class='btn-link' type='submit'><img src='delete_icon.jpg'></img>Delete</button>
					           </form></td>";	 			 
	                          echo "</tr>";
						 $a++;
	                    }
						                     
					?>

					                     
					     
                    </tbody>
					
                 </table>
</div>
					 
             </div>
          </div>
        </div> 
      </div>
   </div>
  </div>
 
 </body>

 <script type="text/javascript">
      $(document).ready( function () {
   $('#myTable').DataTable();
   $('#myTable1').DataTable();
} );
	</script>
</html>