<?php if (isset($_POST['deleteid'])){
     require("dbcon.php");
  $query="DELETE FROM `gallery_storage` WHERE Gal_id='".$_POST['deleteid']."'";
  $del=mysql_query($query) or die(mysql_error());
}
?>
<!DOCTYPE html >
<html>
<head>
  <title>Equipment</title>
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
    session_start();
    if (!isset($_SESSION['name']))
{ 
    include "NavbarNormal.php";
}else{

include "Navbar.php";

}


    ?>
	
    <div class="container-fluid well" style="margin-top:100px;width:1000px; margin-left:100px; ">
      <div class="bs-docs-example">

        <div class="tabbable tabs-left">
<?php   
if (isset($_SESSION['name']))
  {
	
echo "<a href='Gallery Upload.php'<button class='btn-link' type='submit' id='addme' >
  <img class='img-circle'src='/Logos and Icons/Button.png'style='height: 50px; width:50px; padding:10px;'>
</img>Upload</button></a>";

  }
?>
           <div class="tab-content" >
	
              <div class="tab-pane active">
            
                <div class="container-fluid well" >
                      <div id="mytable">
							   
          
<table class="display">
  <tbody>
                     <?php
                       $a=0;
                       require('dbcon.php');
                        $query="select * from gallery_storage";
                       $result=mysql_query($query);
                       while($row=mysql_fetch_array($result))
	                   {
                    if(($a%3)==0){

                    echo  "<tr>";
                    }
	                          ?>

                       <td> <img class="img-thumbnail" src="/Powerlink/Gallery/images/<?=$row['Gal_Image']?>"  style="height: 160px; width:160px;" ></img></td> 
                      <td><form action='Gallery.php' method='post'>
                        <input type='hidden' name='deleteid' value=<?=$row['Gal_id']?>/>
                      <button class='btn-link' type='submit'>
                     <img src='delete_icon.jpg'></img>Delete</button>
                 </form></td>
                      <?php
                      if(($a%3)==0){

                      echo "</tr>";
                    }
				
						 $a++;
	                    }
						                     
					?>

					                     
                   
</div>
					 
             </div>
          </div>
        </div> 
      </div>
   </div>
  </div>
</tbody>
 </table>
 </body>

 <script type="text/javascript">
      $(document).ready( function () {
   $('#myTable').DataTable();
} );
	</script>
</html>