 <?php 
  require("dbcon.php");

if(isset($_POST['pkgname']))
{
$new="INSERT INTO  package (equip_listid,pkg_price,pkg_discount,pkg_name) 
        VALUES ('{$_POST['eqplistid']}', '{$_POST['pkgprice']}', '{$_POST['pkgdiscount']}', '{$_POST['pkgname']}')";
$add=mysql_query($new) or die(mysql_error());
 header("location: package.php");
}

?>
<table class="display">
  <thead>
  </thead>
  <tbody>
<tr style="padding:100px">
<td>
          
 

<tr>
<td>
 <form class="form-horizontal" action="addPackage.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
<?php
                  $Reference = 0;
                   $EqpListQuery= "select * from equipment_list";
                      $EqpListResult = mysql_query($EqpListQuery);
                  ?> 
                    <select name='eqplistid' class="btn btn-lg btn-info" style="width: 225px;">
                      <option value = o>
                     Equipment List
                    </option>
                    <?php
                    while($rowEqpList=mysql_fetch_array($EqpListResult ))
                     {

                     if($rowEqpList['equiplist_id'] != $Reference)
                      {
                        $Reference = $rowEqpList['equiplist_id'];
                    ?>

                    <option value = <?=$rowEqpList['equiplist_id'];?>>
                      List No. <?=$rowEqpList['equiplist_id'];?>
                    </option>

                    <?php
                      }
                     }
                      ?>
                  
                    
                  </select>
               <td>   <a href="index.php">Or Make a New Equipment List</a></td>

                
</td>

</tr>             
<tr><td><input required type="int" step="1" minimum="1" placeholder="Price" name="pkgprice"/></td>
<td><input required type="int" step="1" minimum="1" placeholder="Discount" name="pkgdiscount"/></td></tr>
<tr>
<td><input required type="text" step="1" minimum="1" placeholder="Name" name="pkgname"/></td></tr>
</tbody>


</table>
<tr align="center"><td align="center" style=> <input type="submit" class="btn btn-lg btn-success" value = "Add"style="margin-top:5px; width:500px; text-align: center;" id="submit-btn"/></td></tr>
  </form>