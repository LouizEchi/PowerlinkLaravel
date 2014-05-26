 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  @include('Modular Plugins/Header')
</head>
<div class="header">

  @include('Modular Plugins/Navbar')
</div>
 <body>
	<div id="main" class="row">

			@yield('content')

	</div>
<div class="push"></div>
     
   @include('Modular Plugins/footer')

  </body>

<script type="text/javascript" src="/Assets/js/jquery-2.1.1.js">
$( window ).scroll(function() {
  var scrollspace = $(window).scrollTop();
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
<script>
@yield('scripts')
</script>
</html>   