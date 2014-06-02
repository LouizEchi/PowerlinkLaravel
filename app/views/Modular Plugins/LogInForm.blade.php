
<?php Asset::css('Login');

?>
    <div id="login" >
      @if (Auth::attempt(array('username' => 'Louiz', 'password' => '123452')))
         <h1 style="color:white; font-size: 40px;text-align: center; margin-bottom: 40px;margin-top: 70px;margin-right:20px; ">
           <?php $employee = new employee; ?>

         {{ $employee->getEmployeeType(Auth::user()->employee_id)}}'s Portal
         </h1>
         <p>Welcome,  {{Auth::user()->username}} </p>
      
      @else
        <h1 style="color:#fafafa; font-size: 40px; text-align: center; margin-bottom: 20px;margin-top: 70px;margin-right:20px; ">
        Admin/Agent <br><br> Portal
        </h1>
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
