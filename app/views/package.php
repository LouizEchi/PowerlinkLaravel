<?php if (isset($_POST['deleteid'])){
     require("dbcon.php");
  $query="DELETE FROM `package` WHERE pkg_id='".$_POST['deleteid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
?>
<!DOCTYPE html >
<html>
<head>
  <title>Packages</title>
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

        <div class="tabbable tabs-left">

 <button class="btn-link" style=""data-toggle="modal" data-target="#EqpList3">
 <img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img>Add Package
</button>
<div class="modal fade" id="EqpList3" tabindex="-1" role="dialog" aria-labelledby="EqpListLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="EqpList3" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="EqpListLabel3">Add Package</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="addPackage.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
      <?=include "addPackage.php";?>
       
      </div>
    </div>
  </div>
</div>          
           

           <div class="tab-content" >
  
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
                 
                 <table id="myTable" class="display">
                   <thead>
                     <tr>
                       
                       <td><strong>Package Name</strong></td>
                       <td><strong>Rental Price</strong></td>
             <td><strong>Discount</strong></td>
             <td><strong>Equiplist</strong></td>
               <td><strong>Action</strong></td>

                   </thead>
  
                   <tbody>
                     <?php
                       $a=1;
                      require("dbcon.php");
                       $query="select * from package";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
                     {
                      echo "<tr>";
                       
                       echo "<td>".$row['pkg_name']."</td>";
                       echo "<td>".$row['pkg_price']."</td>";
                       echo "<td>".$row['pkg_discount']."</td>";  
            
                        $query1="select * from equipment_list where equiplist_id = ".$row['equip_listid']." ";
                       $result1=mysql_query($query1);
                      echo "<td>";
                      ?>
                          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?=$row['pkg_id']?>">
                         Equipment List
                        </button>
                        <div class="modal fade" id="<?=$row['pkg_id']?>" tabindex="-1" role="dialog" aria-labelledby="<?=$row['pkg_id']?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                     <h4 class="modal-title" id="<?=$row['pkg_id']?>Label">Equipment List</h4>
                                  </div>
                                 <div class="modal-body">
                                     <table class="table table-hover">
                                             <thead>
                                                <th> <strong> </strong></th>
                                                 <th> <strong> Name</strong></th>
                                                  <th> <strong> Price</strong></th>
                                                 </thead>
                                                    <tbody>
                                      <?php
                                     while($row1=mysql_fetch_array($result1))
                                     {
                                         $query2="select * from `equipment` where eqp_id = ".$row1['equip_id']."";
                                           $result2=mysql_query($query2); 
                                           $row2=mysql_fetch_array($result2);
                                      ?>
                              
                                    <tr>
                                    <td> <img class="img-circle" src="/Powerlink/Equipment Images/<?= $row2['eqp_Image']?>"  style="height: 160px; width:160px;" ></img></td> 
                                     <td> <?=$row2['eqp_name'];?> </td>
                                      <td><?=$row2['eqp_rentprice'];?> php</td>
                                      </tr>
                                   <?php
                                      }
                                       ?>
                                          </tbody>
                                           </table>
                    

               </div>           
     </div>
  </div>
</div>  
</div> 
</td>
<td><form action='package.php' method='post'>
                            <input type='hidden' name='deleteid' value=".$row['pkg_id']."/>
                             <button class='btn-link' type='submit'>
                              <img src='delete_icon.jpg'></img>Delete</button>
                            </form></td>
                             </td>


        </tr>
     <?php
                       }
      ?>
   </tbody>
    </table>
    
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