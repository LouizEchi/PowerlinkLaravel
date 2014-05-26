<html>
<head>
<meta charset="UTF-8">
<link href="calendar.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="../dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/bootstrap-theme.min.css">
<style type="text/css">
  text-shadow: 0px 2px 3px #555;
  tbody {text-align:center;	}
	.bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div>

<?php
include 'calendar.php';
include 'dropdownmade.php';
 $calendar = new Calendar();
?>

 <div class="container-well" style=" position: absolute;">
 <?=$calendar->show();?>
 </div>
<div style="margin-left:800px; position: absolute;"   id="note">
<?php /**  if possible, go horizontal like
Agent
	Agent name
Package
	Event Name
Location
	Location Name
Start Time
	Time
End Time
	Time

**/?>
 <table class="table table-hover" 
 		style="
 		color:white;
 		 margin: 0 auto; 
 		 text-align: center; 
 		 cellpadding:10px; 
 		 postion: absolute;   
 		 background-color: rgba(54, 25, 25, .5); 
 		 background-color: rgba(0, 0, 0, 0.6);
 		  text-shadow: 0px 2px 8px #555;
 		 ">
              <thead style = "text-align:center;  font-size:20px;">
                <tr>
            <th>Agent</th>
                   <th>Package Name</th>
				   <th>Event Name</th>
                  <th>Location</th>
				      <th>Start Time</th>
					      <th>End Time</th>
                 
                </tr>
              </thead>
              <tbody id="mybody" 
              style="
              color:white; 
              font-size: 18px;
              
              text-align:center; 
              background-image:url('/Powerlink/images/tablebody.jpg');
               opacity: 0.9;
              ">
			  </tbody>

            </table>
            
</div>
</div>
</body>
<script type="text/javascript">			
			$('ul.dates button').click(function() {
			var date = $(this).find("li").attr("date-data");
				$.post('table.php', {date: date}, function(data, status, xhr) {
				$('#mybody').html(data);
					$('li#date-data').html(data);
				});
			});
		
		</script>
</html> 
