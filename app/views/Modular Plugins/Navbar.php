    
<div class="navbar-wrapper">
	  <div class="container-fluid" id="ctop">
<nav class="navbar navbar-inverse navbar-top" id="top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="/">
    		<img class="img-circle pull-left" id="PLogo" src="/Assets/Logos and Icons/About us2.jpg"  style="height: 75px; width:80px; postion:absolute; padding-top:-10px;" >
    		</img>
        <img class="logoword pull-right" src="/Assets/Logos and Icons/LogoWords1.png"  >
        </img></a>
     </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
						               <li><a href="Order" class="glow">        Order                </a></li>
      				             <li><a href="package" class="glow">      Packages             </a></li>
                           <li><a href="Equipment" class="glow">    Equipment            </a></li>
	 				                 <li><a href="Employee" class="glow">     Employee             </a></li>
      								     <li><a href="event_dates" class="glow">  Event                </a></li> 
      				   				   <li><a href="quotation" class="glow">    Quotation            </a></li>
      				   				   <li><a href="Gallery" class="glow">      Gallery              </a></li>
                           <li><a href="Request" class="glow">      Customer Requests    </a></li>
      </ul>
   
      <ul class="nav navbar-nav navbar-right">

        <?php
            error_reporting(E_ERROR | E_PARSE);
            @include('Session Manipulation/sessioncheck.php');
         ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>

<script type="text/javascript">
$( window ).scroll(function() {
   var scrollspace = $(window).scrollTop();
  $( "span" ).css( "display", "inline" ).fadeOut( "slow" );
 if ( scrollspace > 44 ) 
 {
  $('#top').addClass(function( index, currentClass ) {
  var addedClass;
      addedClass = "fixedpos";
    return addedClass;
  });
     $('.logoword').removeClass() {
  var addedClass;
      addedClass = "logoword";
    return addedClass;
  });
  }else
  {
    $('#top').removeClass(function( index, currentClass ) {
  var addedClass;
      addedClass = "fixedpos";
    return addedClass;
  });

     $('.logoword').addClass() {
  var addedClass;
      addedClass = "logoword";
    return addedClass;
  });

  }
});
</script>

									  

