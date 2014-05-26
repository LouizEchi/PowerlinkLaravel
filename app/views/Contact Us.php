 <?php 
  require("dbcon.php");

if(isset($_POST['name']))
{
$new="INSERT INTO  `customer`(cust_name,cust_email,cust_request) 
        VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['comment']}')";
$add=mysql_query($new) or die(mysql_error());


}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Index page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="../dist/js/jquery-2.1.0.js" type="text/javascript"> </script>
      <script src="../js/carousel.js" type="text/javascript"> </script>

  </head>
    <body style="background:white;">
      <?php include"NavbarNormal.php";?>
      <div class="container marketing">
    <hr class="featurette-divider">

  <div class="row featurette">
    <h2 class="featurette-heading">Contact Us</h2>
    <p class="lead">
      <form class="form-horizontal" action="Contact Us.php" method="post" id="myform"   enctype="multipart/form-data" style="color:darkblue;" >
        <td>
           <input required type="text" placeholder="Name" name="name"/></td><br><br>
            <td><input required type="text" placeholder="Email Address" name="email"/></td><br><br><br>
            <td><label>Request</label><br><input required type="text"  name="comment" style="text-align: top;height:200px; width: 200px;"/></td><br><br>
          <tr>  <button class='btn btn-lg btn-primary' type='submit'>
                </img>Send</button></tr>

      </form>
      <?php
if(isset($_POST['name']))
{

  echo "Thank you for Sending your request";
}

      ?>
      </p>
  </div>

  <hr class="featurette-divider">

</div>


    <script src="../dist/js/jquery-2.1.0.js" type="text/javascript"> </script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function()
{
  //Handles menu drop down
  $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
        });
    
  });
</script>
  </body>
</html>



















