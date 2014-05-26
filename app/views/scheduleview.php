<html>
 <head>
	<meta charset="UTF-8">
  <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../less/glyphicons.less" rel="stylesheet">
   <script src="../js/carousel.js" type="text/javascript"> </script>
     <script src="../js/button.js" type="text/javascript"> </script>
	<script src="../dist/js/bootstrap.min.js" type="text/javascript"> </script>
	<script src="../js/modal.js" type="text/javascript"> </script>
  
    <style type ="text/css">
  		text-shadow: 0px 2px 3px #555;
  		tbody {text-align:center;	}
		.bs-example{
  	  	margin: 20px;
    }
</style>

	<body style=" background-color: gradient; background-repeat:repeat-y; background-size:100%">
	<div>
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	<div class="container-fluid">
	    <?php 
	    include "\Schedule\calendarMain.php";	 ?>
	 </div>
	 	<script type="text/javascript">			
			$('ul.dates button').click(function() {
			var date = $(this).find("li").attr("date-data");
				$.post('table.php', {date: date}, function(data, status, xhr) {
				$('#mybody').html(data);
					$('li#date-data').html(data);
				});
			});
		
		</script>
</div>
	</body>
 </head>
</html>