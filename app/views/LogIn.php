<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Index page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="../dist/js/jquery-2.1.0.js" type="text/javascript"> </script>
      <script src="../js/carousel.js" type="text/javascript"> </script>

  </head>
    <body style="background: white;">
		
			<?php 
			include"navbarNormal.php";
include "carousel.php";
include "featurette.php";
?>
 </body>
 <script>
$(document).ready(function()
{
  //Handles menu drop down
  $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
        })
		
	$('.carousel').carousel({
  interval: 5000
})
  })
</script>
</html>