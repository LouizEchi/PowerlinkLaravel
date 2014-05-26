<?php 
  require("dbcon.php");
  echo $_POST['eventid'];
  echo $_POST['eventid'];
            if (isset($_POST['eventname']) ){

           $new1="UPDATE `event` SET event_name = '{$_POST['eventname']}' where event_id= '{$_POST['eventid']}'";
           $add1=mysql_query($new1) or die(mysql_error());
             }
           if (isset($_POST['eventlocation']) ){

           $new2="UPDATE `event` SET event_location = '{$_POST['eventlocation']}' where event_id= '{$_POST['eventid']}'";
           $add2=mysql_query($new2) or die(mysql_error());
           }
           if (isset($_POST['pkgid']) ){

           $new3="UPDATE `event` SET event_pkgid = '{$_POST['pkgid']}' where event_id= '{$_POST['eventid']}'";
           $add3=mysql_query($new3) or die(mysql_error());
           }
           if (isset($_POST['eventstime']) ){

           $new4="UPDATE `event` SET event_timestart = '{$_POST['eventstime']}' where event_id= '{$_POST['eventid']}'";
           $add4=mysql_query($new4) or die(mysql_error());
           }
           if (isset($_POST['eventetime']) ){

           $new5="UPDATE `event` SET event_timeend = '{$_POST['eventetime']}' where event_id= '{$_POST['eventid']}'";
           $add5=mysql_query($new5) or die(mysql_error());
           }


       
 header("location: event_dates.php");

?>


<table class="display">
  <thead>
  </thead>
  <tbody>
<tr><td ><input  type="text" step="1" minimum="1" placeholder="Event Name" name="eventname"/></td></tr>
<tr><td ><input  type="text" step="1" minimum="1" placeholder="Location" name="eventlocation"/></td></tr>
<tr><td ><input  type="time" step="1" minimum="1" placeholder="Start Time" name="eventstime"/></td></tr>
<tr><td ><input  type="time" step="1" minimum="1" placeholder="End time" name="eventetime"/></td></tr>
<tr>
<td align="center">


 <?php
                    $RentQuery= "select * from package";
                    $RentResult = mysql_query($RentQuery);
                  ?>
                    <select name='pkgid' class="btn btn btn-info" style="width: 225px;">
                      <option value = o>
                      Pick a Package
                    </option>
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
                </td>
              </tr>              
<tr>         

<tr align="center"><td align="center" style=> <input type="submit" class="btn btn-lg btn-success" value = "Update"style="margin-top:5px;text-align: center;" id="submit-btn"/></td></tr>
  </form>
</tbody>


</table>