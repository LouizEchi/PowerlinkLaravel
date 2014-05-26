<?php if (isset($_POST['deleteid'])){
     require("dbcon.php");
  $query="DELETE FROM `quotation` WHERE quot_id='".$_POST['deleteid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
?>
<!DOCTYPE html >
<html>
<head>
  <title>Quotation</title>
   <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/js/jquery.js"></script>
	<script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/css/jquery.dataTables.css"></script>
<script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>

     <script src="/dist/js/bootstrap.min.js" type="text/javascript"> </script>
 
<style type="text/css" title="currentStyle">
    @import "/DataTables-1.9.4/media/css/demo_table.css";
</style>


</head>

<body style=" background: url(/android.png);">
    <?php include "Navbar.php";?>
	
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">

        <div class="tabbable tabs-left">
		
    <button class="btn-link"><a href= "addQuotation.php"><img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img> Add Quotation
    </a></button>

          

           <div class="tab-content" >
	
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
							   
                 <table id="myTable" class="display">
                   <thead>
                     <tr>
                        <td><strong></strong></td>
                       <td><strong>Quotation Name</strong></td>
                       <td><strong>Package Name</strong></td>
					   <td><strong>Date Uploaded</strong></td>
<td><strong></strong></td>
                        <td style="text-align:center"><strong>Action</strong></td>
						</tr>
                   </thead>
	
                   <tbody>

                     <?php
                       $a=1;
                       
                        $query="select * from quotation";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
	                   {
                       $query1="select * from package where pkg_id = ".$row['quot_pkgid']."";
                       $result1=mysql_query($query1);
                       $row1=mysql_fetch_array($result1);
                         echo "<tr>";
	                          ?>
                       <td> <img class="img-thumbnail" src="/Powerlink/images/word.jpg"  style="height: 160px; width:160px;" ></img></td> 
                       <?php
					 //  echo "<td><img src='getImage.php' id='".$row['eqp_id']."' width='175' height='200' /></td>";

                echo "<td>".$row['quot_name']."</td>";
                echo "<td>".$row1['pkg_name']."</td>";
	              echo "<td>".$row['quot_date']."</td>";
                 echo "<td><form action='quotation.php' method='post'>
                 <input type='hidden' name='deleteid' value=".$row['quot_id']."/>
                 <button class='btn-link' type='submit'>
                 <img src='delete_icon.jpg'></img>Delete</button>
                 </form></td>";       
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
} );
	</script>
</html>