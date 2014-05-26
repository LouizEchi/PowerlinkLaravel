 <!-- Asset Loader --> 
     @include('Modular Plugins/AssetLoader')
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>scroll demo</title>
    <link>
{{
   Asset::add('Assets/styles/carousel.css');
   Asset::css();
   Asset::js();
   Asset::Scripts('ready');
}}
  </link>

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

</head>
<body>
 @include('Modular Plugins/Navbar');
<div>Try scrolling the iframe.</div>
<p>Paragraph - <span>Scroll happened!</span></p>
 <p style="font-size: 20px;">adasdagdddddddadgadgaaaaaasgjbadsgbasihglaialibgabdgladbglablgbalbgaldbglabgkjadbskgjbasklbgklabdgladbgabgabdglabdsgldabglkbagblabdglabglabgklabsdglbaslgbalkbglakbglkabgashoghwaoghwugwugbawlvhbasilbhalghgbhoibghqobhqeoibhebeobjaeiobjeibjaobh aobhiaubhiaub</p>
<script>
$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
$( "p" ).clone().appendTo( document.body );
$( window ).scroll(function() {
	 var scrollspace = $(window).scrollTop();
  $( "span" ).css( "display", "inline" ).fadeOut( "slow" );
 if ( scrollspace > 44 ) {
  $('#top').addClass(function( index, currentClass ) {
  var addedClass;
    	addedClass = "fixedpos";
  	return addedClass;
	});
  }else{
    $('#top').removeClass(function( index, currentClass ) {
  var addedClass;
    	addedClass = "fixedpos";
  	return addedClass;
	});
}
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