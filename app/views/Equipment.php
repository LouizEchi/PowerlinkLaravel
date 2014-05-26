
<!DOCTYPE html >
<html>
<head>
  <title>Equipment</title>
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
<a href="addrecord.php"><img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img>Add Equipment</a>
<div class='pull-right'>
 <button class="btn btn-lg btn-primary" style=""data-toggle="modal" data-target="#EqpList3">
   View Equipment Lists
</button>
</div>
<div class="modal fade" id="EqpList3" tabindex="-1" role="dialog" aria-labelledby="EqpListLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="EqpList3" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="EqpListLabel3">List of Equipments</h4>
      </div>
      <div class="modal-body">
        <table class="display">

      <tbody>
        <tr><td>
          <?php
            $Reference = 0;
            $Reference2 = 0;
            $a=0;
             $EqpListQuery= "select * from equipment_list";
                      $EqpListResult = mysql_query($EqpListQuery);
                    while($rowEqpList=mysql_fetch_array($EqpListResult ))
                     {  
                       $EqpQuery= "select * from equipment where eqp_id = '".$rowEqpList['equip_id']."' " ;
                      $EqpResult = mysql_query($EqpQuery);
                      $rowEqp=mysql_fetch_array($EqpResult);
                       if($Reference != $rowEqpList['equiplist_id'])
                          {
                        if($Reference2 != 0)
                        {
                      echo "</select><td></tr>";
                        }
                            }
                     if($Reference2 != $rowEqpList['equiplist_id'])
                          {
                            $Reference =  $Reference2= $rowEqpList['equiplist_id'];
                                echo "<tr><td><select class='btn btn-lg btn-primary' style='width: 225px;'> <option>List No. ";
                              echo  $rowEqpList['equiplist_id'];
                             echo "    </option>  ";
                          }
                                 ?>
                          <option><?=$rowEqp['eqp_name'];?></option>  

                    <?php

                     
                   
                      }
                      ?>
                       </select>
                     
           <td> </tr>
      </tbody>
          </table>
                   
       
      </div>
    </div>
  </div>
</div>          
  
<button class="btn-link" data-toggle="modal" data-target="#myModal3">
   <img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img> Make an Equipment List
</button>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal3" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel3">Equipment List</h4>
      </div>
      <div class="modal-body">
   <?php include"EqpList.php";?>
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
                        <td><strong></strong></td>
                       <td><strong>Equipment Name</strong></td>
                       <td><strong>Rental Price</strong></td>
					   <td><strong>Description</strong></td>
             <td><strong>Type</strong></td>
					   <td><strong>Quantity</strong></td>
             <td><strong>Outsource (NO,if not)</strong></td>
<td><strong></strong></td>
                        <td style="text-align:center"><strong>Action</strong></td>
						</tr>
                   </thead>
	
                   <tbody>

                     <?php
                       $a=1;
                       
                        $query="select * from equipment";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
	                   {
                         echo "<tr>";
	                          ?>
                       <td> <img class="img-circle" src="/Powerlink/Equipment Images/<?= $row['eqp_Image']?>"  style="height: 160px; width:160px;" ></img></td> 
                       <?php
					 //  echo "<td><img src='getImage.php' id='".$row['eqp_id']."' width='175' height='200' /></td>";

echo "<td>".$row['eqp_name']."</td>";
	                     echo "<td>".$row['eqp_rentprice']."</td>";
	                     echo "<td>".$row['eqp_desc']."</td>";			
                         echo "<td>".$row['eqp_type']."</td>";		
                         echo "<td>".$row['eqp_qty']."</td>"; 
                         echo "<td>".$row['eqp_otsrsrc']."</td>"; 
						 echo "<td><form action='update.php' method='post'>
					          <input type='hidden' name='eqpname' value=".$row['eqp_name']." />
					       <button class='btn-link' type='submit'><img src='edit_icon2.jpg'></img>Edit</button>
					     </form></td>";
                    echo "<td><form action='deletenew.php' method='post'>
					<input type='hidden' name='eqpname' value=".$row['eqp_name']." />
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