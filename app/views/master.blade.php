 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  @include('Modular Plugins/Header')
</head>
<div class="header">

  @include('Modular Plugins/Navbar')
</div>
 <body>
	<div class="main col-xs-12">

		@yield('content')
	  <div id="push"></div>		
	</div>

     
   <footer id= "footer">
    <div class= "row" style="margin-left: 5px;">
      <p class="col-xs-4">Powerlink Professional Audio and Lights © 1999-2014</a></p> 
    </div>
   </footer>

  </body>



<script type="text/javascript">
$(document).ready(function () {  
  var top = $('#top').offset().top;
$( window ).scroll(function() {
  var scrollspace = $(this).scrollTop();
       var addedClass;
          if ( scrollspace >= top ) {
         $('#top').addClass(function( index, currentClass ) {
           addedClass = "fixedpos";
           return addedClass;
          });
  }else{
         $('#top').removeClass(function( index, currentClass ) {
           addedClass = "fixedpos";
           return addedClass;
          });
       }
  });
});
</script>  
@yield('scripts')
</html>   