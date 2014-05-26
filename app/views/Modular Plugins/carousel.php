
<?php 
     Asset::add('Assets/styles/carousel.css');
     Asset:: css();

?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" align="center" style="margin-top: 40px;">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
            <img  class="imagekit" src="Assets/Web Pages/01.jpg" />
				<div  class="carousel-caption">
					<h1 style="font-color:White;">DJ GINO ON THE MIX</h1>
						<p class="lead" style="font-size: 18px;">
							Watch DJ GINO up the crowd at Unite Concert, the biggest event in USC powered by Powerlink
							</p>
							<a class="btn btn-lg btn-primary" href="Gallery.php" role="button">Find out</a>
			     </div>
    </div>
    <div class="item">
      <img class="imagekit" src="Assets/Web Pages/02.jpg"  />
				<div  class="carousel-caption">
					<h1 style="font-color:White;">UNITE MANILA TO CEBU</h1>
						<p class="lead" style="font-size: 18px;">
							Powerlink, a major part of the transition of UNITE to CEBU!
							</p>
							<a class="btn btn-lg btn-primary" href="Gallery.php" role="button">Find out</a>
			     </div>		
    </div>
    <div class="item">
       <img class="imagekit"src="Assets/Web Pages/03.jpg"/> 
				<div  class="carousel-caption">
					<h1 style="font-color:White;">MEDELLIN SEE YOU SOON!</h1>
						<p class="lead" style="font-size: 18px;">
							We will be back in Medellin again this April. Watch out!
							</p>
					<a class="btn btn-lg btn-primary" href="Gallery.php" role="button">Find out</a>
			     </div>
    </div>
  </div>

  <!-- Controls -->
 
    <a class="left carousel-control" href="javascript:void(0)" 
     data-slide="prev" data-target="#carousel-example-generic">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="javascript:void(0)" 
     data-slide="next" data-target="#carousel-example-generic">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
  
</div>
<br>
 <div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
  	<div class="col-md-3 text-center">
      <img class="img-circle"  src="Assets/Logos and Icons/Equipment.jpg" style="height: 140px; width:140px;">
      <h2>Equipment</h2>
      <p>Check out the high-quality equipment used in the events.</p>
      <p><a class="btn btn-primary" href="#">View details >></a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle"  src="Assets/Logos and Icons/Order.jpg" style="height: 140px; width:140px;">
      <h2>Packages</h2>
      <p>Avail the amazing discount rates as much as 50%!!</p>
      <p><a class="btn btn-primary" href="Gallery.php">View details >></a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle"  src="Assets/Logos and Icons/Schedule.jpg" style="height: 140px; width:140px;">
      <h2>Calendar</h2>
      <p>Check out the latest events powered by Powerlink it may be in your area!</p>
      <p><a class="btn btn-primary" href="#">View details >></a></p>
    </div>
    <div class="col-md-3 text-center">
      <img class="img-circle" src="Assets/Logos and Icons/About us1.jpg" style="height: 140px; width:140px;">
      <h2>About us</h2>
      <p>Want to know more about us? Read about our companies more than a decade long back story</p>
      <p><a class="btn btn-primary" href="#">View details >></a></p>
    </div>
  </div>

<script>
$(document).ready(function()
{
		
	$('.carousel').carousel({
  
  });
</script>