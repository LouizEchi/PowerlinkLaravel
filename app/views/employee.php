
<!DOCTYPE html >
<html>
<head>
  <title>Employee</title>
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

	      <?php 
   include"Navbar.php";?>
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">

        <div class="tabbable tabs-left">
<a href="addEmployee.php" <button class='btn-link' type='submit' id="addme" ><img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img>Add Employee</button></a>
<a href="addEmployeeList.php" <button class='btn-link' type='submit' id="addme" ><img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;"></img>Make an Employee List</button></a>
          
<div class='pull-right'>
 <button class="btn btn-lg btn-primary" style=""data-toggle="modal" data-target="#myModal3">
   View Employee Lists
</button>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal3" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel3">List of Employees</h4>
      </div>
      <div class="modal-body">
        <table class="display">

      <tbody>
        <tr><td>
          <?php
            $Reference = 0;
            $Reference2 = 0;
            $a=0;
             $EmpListQuery= "select * from employee_list";
                      $EmpListResult = mysql_query($EmpListQuery);
                    while($rowEmpList=mysql_fetch_array($EmpListResult ))
                     {  
                       $EmpQuery= "select * from employee where employ_id = '".$rowEmpList['employ_id']."' " ;
                      $EmpResult = mysql_query($EmpQuery);
                      $rowEmp=mysql_fetch_array($EmpResult);
                       if($Reference != $rowEmpList['employlist_id'])
                          {
                        if($Reference2 != 0)
                        {
                      echo "</select><td></tr>";
                        }
                            }
                     if($Reference2 != $rowEmpList['employlist_id'])
                          {
                            $Reference =  $Reference2= $rowEmpList['employlist_id'];
                                echo "<tr><td><select class='btn btn-lg btn-primary' style='width: 225px;'> <option>List No. ";
                              echo  $rowEmpList['employlist_id'];
                             echo "    </option>  ";
                          }
                    ?>
                 <option><?=$rowEmp['employ_name'];?></option>  

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

	 <div class="tab-content" >
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
							   <form action="deletenew.php" method="post">
                 <table class="display" id="myTable">
                   <thead>
                     <tr>
                        <td><strong>Profile Picture<j/strong></td>
                       <td><strong>Employee Name</strong></td>
                       <td><strong>Age</strong></td>
					   <td><strong>Contact</strong></td>
					   <td><strong>Work Schedule</strong></td>
               <td><strong>Outsource (No, if not)</strong></td>
						<td><strong></strong></td>
						<td><strong>Action</strong></td>
						</tr>
                   </thead>
	
                   <tbody>
                     <?php
                       $a=1;
                       $query="select * from `employee`";
                       $result=mysql_query($query);

                       while($row=mysql_fetch_array($result))
	                   {
                         echo "<tr>";
	                     ?>
                         <td> <img class="img-circle" src="/Powerlink/Employee Images/<?= $row['employ_Image']?>" style="height: 160px; width:160px;" ></img></td>
                       <?php
	                     echo "<td>".$row['employ_ln'].", ";
                        echo "".$row['employ_name']. " </td>";
	                     echo "<td>".$row['employ_age']."</td>";
	                     echo "<td>".$row['employ_contact']."</td>";			
                         echo "<td>".$row['employ_worksched']."</td>";
                         echo "<td>".$row['employ_otsrsrc']."</td>"; 		
                          echo "<td><form action='updateEmployee.php' method='post'>
					          <input type='hidden' name='empname' value=".$row['employ_name'].$row['employ_mi'].$row['employ_ln']." />
					       <button class='btn-link' type='submit'><img src='edit_icon2.jpg'></img>Edit</button>
					     </form></td>";
                    echo "<td><form action='deleteEmployee.php' method='post'>
					<input type='hidden' name='empname' value=".$row['employ_name']." />
					<button class='btn-link' type='submit'><img src='delete_icon.jpg'></img>Delete</button>
					</form></td>";

	                     	 			 
	                     echo "</tr>";
						 $a++;
	                    }
						                     
					?>

					     
                    </tbody>
					</form>
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