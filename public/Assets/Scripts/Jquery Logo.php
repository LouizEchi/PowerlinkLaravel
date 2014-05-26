
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>scroll demo</title>
  <style>
  div {
    color: blue;
  }
  p {
    color: green;
  }
  span {
    color: red;
    display: none;
  }
  </style>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div>Try scrolling the iframe.</div>
<p>Paragraph - <span>Scroll happened!</span></p>
 
<script>
$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
$( window ).scroll(function() {
  $( "span" ).css( "display", "inline" ).fadeOut( "slow" );
});
</script>
 
<script type="text/javascript">
$(document).ready(function($){
	
	// Adjust pagetitle padding for responsive screens
	$(window).resize(function() {
		pagetitlePadding();
	}).load(function(){
		pagetitlePadding();
	});	
	function pagetitlePadding() {
		setTimeout(function(){
			pagetitlepadding = $('#socialicons').outerHeight() + $('#top').outerHeight();
			//$('#page-title').css('padding-top', pagetitlepadding);
			$('#page-title').animate({
				paddingTop: pagetitlepadding
			}, 100);
		}, 250);		
	}
	
		$(window).scroll(function() {
		var scrollspace = $(window).scrollTop();
		if (scrollspace > 5) {
			$('#top:not(.fixedpos)').addClass('fixedpos');
			//pagetitlePadding();
		} else {
			pagetitlePadding();
		}
	});
</script>
</body>
</html>