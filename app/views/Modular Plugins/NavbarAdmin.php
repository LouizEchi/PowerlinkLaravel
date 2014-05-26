
<div class="navbar-wrapper">
	  <div class="container-fluid">
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="#">
    		<img class="img-circle" src="/Logos and Icons/About us1.jpg"  style="height: 30px; width:30px; postion:absolute;" >
    		</img></a>
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="home.php">Home </a></li>
						              <li><a href="Order.php">Order</a></li>
      				                  <li><a href="index.php">Equipment</a></li>
      				                  <li><a href="package.php">Packages</a></li>
	 				                  <li><a href="employee.php">Employee</a></li>
      								  <li><a   href="event_dates.php">Event Dates</a></li> 
      				   				  <li><a href="quotation.php">Quotation</a></li>
      </ul>
   
      <ul class="nav navbar-nav navbar-right">
          <?php

session_start() or die();
 echo "<div class = 'container-fluid-well' style='float: right; margin-right: 100px;margin-bottom:-20px'><a class='brand' style='color:gray; text-decoration:none'>Welcome ".$_SESSION['name']."</a><strong><a href='endsession.php' style='color:gray;margin-left:10px' id='logout'>Log out</a></strong></div>"; 
require("dbcon.php");


          ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

									  



















