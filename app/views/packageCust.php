
<!DOCTYPE html >
<html>
<head>
  <title>Equipment</title>
  <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/dist/css/bootstrap.css" rel="stylesheet">
      <script src="/bootstrap/js/jquery-2.1.0.js" type="text/javascript"> </script>
     <script src="/dist/js/bootstrap.min.js" type="text/javascript"> </script>
	<script src="/js/bootstrap-modal.js" type="text/javascript"> </script>

</head>

<body style=" background: url(/21.png);">
<?php include "NavbarNormal.php";?>
	
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">

        <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
             <li class="active"><a href="index.php" data-toggle="tab">Package</a></li>
           </ul>
           <div class="tab-content" >
	
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
                 <table class="table table-hover" id="studentTable">
                   <thead>
                     <tr>
                       
                       <td><strong>Package Name</strong></td>
                       <td><strong>Rental Price</strong></td>
					   <td><strong>Discount</strong></td>
					   <td><strong>Equiplist</strong></td>

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
            <th> <strong>Quantity</strong></th>
              <th> <strong> Price</strong></th>
          </thead>
    <?php
      while($row1=mysql_fetch_array($result1))
                      {
                        $query2="select * from `equipment` where eqp_id = ".$row1['equip_id']."";
                       $result2=mysql_query($query2); 
                       $row2=mysql_fetch_array($result2);
                       ?>
          <tbody>
            <tr>
        <td> <img class="img-circle" src="/Powerlink/Equipment Images/<?= $row2['eqp_Image']?>"  style="height: 160px; width:160px;" ></img></td> 
        <td> <?=$row2['eqp_name'];?> </td>
        <td> <?=$row2['eqp_qty'];?> </td>
        <td><?=$row2['eqp_rentprice'];?> php</td>
        <?php
                       }
      ?>
    </tr>
    </tbody>
    </table>
    <?php }?>
      </div>
    </div>
  </div>
</div>

					     
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
      $(document).ready(function(){
  $("#pkgadd").click(function(){
alert('hi');
$("#iz")
	});
});
	</script>
</html>