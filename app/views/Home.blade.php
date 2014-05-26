@extends('master')
@section('content')

<div class="page-wrap">
  <div class="col-xs-6">
    <h1 style="color:gray; font-size: 40px;text-align: center;margin-top: 70px;margin-right:20px; ">Agent's Portal</h1>
    <p>
      @include('Modular Plugins/LogInForm')
    </p>
  </div>

  <div id="carousel-example-generic" class="carousel slide col-xs-6" data-ride="carousel" align="center" style="margin-top: 40px;">

  <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img  class="imagekit" src="Assets/Web Pages/01.jpg" />
          <div  class="carousel-caption">
            <h1>Thanks to Agent Kim</h1>
              <p class="lead">
               Powerlink successfully powered UNITE 2013. With DJ Gino on the mix!
                </p>
                <a class="btn btn-lg btn-primary" href="Gallery" role="button">Find out</a>
          </div>
      </div>
      <div class="item">
        <img class="imagekit" src="Assets/Web Pages/02.jpg"  />
          <div  class="carousel-caption">
            <h1>UNITE MANILA TO CEBU</h1>
            <p class="lead">
              Powerlink, a major part of the transition of UNITE to CEBU!
            </p>
            <a class="btn btn-lg btn-primary" href="Gallery" role="button">Find out</a>
          </div>   
      </div>
      <div class="item">
        <img class="imagekit"src="Assets/Web Pages/03.jpg"/> 
          <div  class="carousel-caption">
            <h1>MEDELLIN SEE YOU SOON!</h1>
            <p class="lead">
              We will be back in Medellin again this April. Watch out!
            </p>
          <a class="btn btn-lg btn-primary" href="Gallery" role="button">Find out</a>
          </div>
      </div>
    </div>
  </div><!-- /.container -->
 <?php
  Helpers::setServerURL(100);
  echo Helpers::getServerURL();
   ?>
</div>
@stop
@section('scripts')
<script src="Assets/js/jquery-2.1.1.js"></script>
<script type="text/javascript">
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
@show