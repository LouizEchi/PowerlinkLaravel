<?php 
  require("dbcon.php");

if(isset($_POST['eventname']))
{
$new="INSERT INTO  event(event_name,event_location,event_pkgid,event_timestart,event_timeend) 
        VALUES ('{$_POST['eventname']}', '{$_POST['eventlocation']}', '{$_POST['eventpackage']}', '{$_POST['eventstime']}','{$_POST['eventetime']}')";
$add=mysql_query($new) or die(mysql_error());

}

?>
<!DOCTYPE html >
<html>
<head>
  <title>Event</title>
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
<button class="btn-link" data-toggle="modal" data-target="#eventList3"><img class="img-circle"src="/Logos and Icons/Button.png" style="height: 50px; width:50px; padding:10px;">
</img>Add Event</button>
</div>
<div class="modal fade" id="eventList3" tabindex="-1" role="dialog" aria-labelledby="eventListLabel3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="eventList3" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="eventListLabel3">List of Events</h4>
      </div>
      <div class="modal-body">
        <table class="display">

      <tbody>
         <form class="form-horizontal" action="event_dates.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
        <tr>
            <td><input required type="text" placeholder="Event Name" name="eventname"/></td>
            <td><input required type="text" placeholder="Event Location" name="eventlocation"/></td>
          </tr>
           <tr>
            <td><input required type="time" placeholder="Event Time Start" name="eventstime"/></td>
            <td><input required type="time" placeholder="Event Time Start" name="eventetime"/></td>
          </tr>
<tr>

           <td>
                  <?php
                    $RentQuery= "select * from package";
                    $RentResult = mysql_query($RentQuery);
                  ?>
                
                    <select name='eventpackage' class="btn btn btn-info">
                    <?php
                    while($rowRent=mysql_fetch_array($RentResult))
                     {
                    ?>
                    <option value = <?=$rowRent['pkg_id'];?>>
                      <?=$rowRent['pkg_name'];?>
                    </option>

                    <?php
                     }
                      ?>
                  </select>
                  </ul>
    
            </td>

    </tr>
    
      </tbody>
       </table>
       <table class="display">
      <tr align="center"><td><input type="submit" class="btn btn-info" value = "Add"style="margin-top:5px; width: 200px;" id="submit-btn"/>
                               
                            </form></td></tr>
          </table>
                   
       
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
                       <td><strong>Event Name</strong></td>
                       <td><strong>Event Location</strong></td>
             <td><strong>Event Package</strong></td>
             <td><strong>Event Time Start</strong></td>
              <td><strong>Event Time End</strong></td>
<td><strong></strong></td>
                        <td style="text-align:center"><strong>Action</strong></td>
            </tr>
                   </thead>
  
                   <tbody>

                     <?php
                       $a=1;
                       
                        $query="select * from event";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
                     {
                        $queryPackage="select * from package where pkg_id = '".$row['event_pkgid']."'";
                       $resultPackage=mysql_query($queryPackage);
                       $rowPackage=mysql_fetch_array($resultPackage);
                         echo "<tr>";
                            ?>
                      
                      <?php


                  echo "<td>".$row['event_name']."</td>";
                       echo "<td>".$row['event_location']."</td>";
                       echo "<td>". $rowPackage['pkg_name']."</td>";      
                         echo "<td>".$row['event_timestart']."</td>";   
                         echo "<td>".$row['event_timeend']."</td>"; 
                         ?>
               <td>
<button class='btn-link' data-toggle='modal' data-target="#myModal<?=$row['Event_id']?>">
            <img src='edit_icon2.jpg'></img>Edit</button>
             <div class="modal fade" id="myModal<?=$row['_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?=$row['Event_id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal<?=$row['Event_id']?>" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel<?=$row['Event_id']?>">Edit Event</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="UpdateEvent.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
              <?php echo 
              " <input type='hidden' name='eventid' value=".$row['event_id']."/>";

                include"UpdateEvent.php"; ?>

    </div>
    </div>
  </div>
</div>
</td>
            <?php

                    echo "<td><form action='deleteEvent.php' method='post'>
          <input type='hidden' name='eventid' value=".$row['event_id']." />
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
</html>>