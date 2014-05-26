<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="calendar.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <form>
	<?php
	$naviHref = htmlentities($_SERVER['PHP_SELF']);
	 $MONTHLY =0;
	 $YEARLY = 0;
	 $Temp = 1;
	       $MONTHNAME = array(
                1=>'January',
                2=>'February',
                3=>'March',
                4=>'April',
                5=>'May',
                6=>'June',
                7=>'July',
                8=>'August',
                9=>'September',
                10=>'October',
                11=>'November',
                12=>'December');
	 ?>
        <!--Default buttons with dropdown menu-->
        <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Month<span class="caret"></span></button>
            <ul class="dropdown-menu ">
		<?php
		 $YEARLY = (isset($_GET['year']))?$_GET['year']: date('Y');
			 for($Temp=1;$Temp <= 12;$Temp++)
			 {
			 ?>
              <li><a href= "<?= $naviHref?>?month=<?=$Temp?>&year=<?=$YEARLY?>"> <?=$MONTHNAME[$Temp]?> </a></li>
			  <?php
			  }
			?>
            </ul>
        </div>
        <!--Primary buttons with dropdown menu-->
          <div class="btn-group">
            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Year <span class="caret"></span></button>
            <ul class="dropdown-menu">

			<?php
			 $MONTHLY= (isset($_GET['month']))?$_GET['month']: date('M');
			 for($Temp1 = 1994;$Temp1 < 2037;$Temp1++)
			 {
			 ?>
              <li><a href= "<?=$naviHref?>?month=<?=$MONTHLY ?>&year=<?=$Temp1?>"> <?=$Temp1?> </a></li>
			  <?php
			  }
			 ?>
            </ul>
        </div>
    </form>
</div>
</body>
</html>                                		