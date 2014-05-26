
<?php Asset::css('Login');

?>
    <div id="login">
      @if (Auth::attempt(array('username' => 'Louiz', 'password' => '12345')))
         
         <h1 style="font-size 20px;"> Welcome,  {{Auth::user()->username}} </h1>
      
      @else
        {{ Form::open(array('url' => '/'))  }}

            <fieldset class="clearfix">

                <p>
                  <span class="fontawesome-user"></span>
                  {{ Form::text('username', Input::old('username'), array('placeholder' => 'Username')) }}
                </p>

                <p>
                  <span class="fontawesome-lock"></span>
                  {{ Form::password('password',array('placeholder' => '********')) }}
                </p>
               
                <p>{{ Form::submit('Submit!') }}</p>

            </fieldset>

         {{ Form::close() }}
    
        <p>Not a member? <a href="#">Sign up now</a><span class="fontawesome-arrow-right"></span></p>
       
       @endif
    </div> <!-- end login -->

  <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>
