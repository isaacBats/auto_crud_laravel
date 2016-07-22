<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Knot - Login </title>

    <link rel='stylesheet' href='{!! url("assets/css/bootstrap.min.css") !!} '>
    <link rel='stylesheet' href='{!! url("assets/css/style.css") !!} '>
    <link rel='stylesheet' href='{!! url("assets/css/animate.css") !!} '>

</head>

<body>

       <div class="signinbg"></div>
    <!--signinbg-->
    <div class="signinparent">
        <div class="signin">
           <div class="signin-image">
               <img src="{!! url('assets/images/dummyuser.png') !!}" alt="dummyuser">
            </div>
            <!--signinimage-->
            <div class="signin-head animated zoomIn">
                Hey!
            </div>
            <!--signinhead-->
            <div class="signin-form">

                <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                    {!! Session::get('login_notice') !!}
                    {{ csrf_field() }}

                    <!-- fixes autocomplete off -->
                    <input style="display:none">
                    <input type="password" style="display:none">
                    <!-- /fixes autocomplete off -->

                    <div class="form-group signin-enter signin-username animated lightSpeedIn {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>
                        <input type="email" class="form-control signin-input" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group signin-enter signin-username animated lightSpeedIn {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" class="form-control signin-input" name="password" id="password" placeholder="Enter password" value="{{ old('password') }}">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <ul class="list-inline text-center social-buttons">
                      <li><a href="{!! url('facebook') !!}" class="btn"><i class="fa fa-facebook-square btn-facebook"></i></a></li>
                      <li><a href="{!! url('google') !!}" class="btn"><i class="fa fa-google-plus-square btn-google"></i></a></li>
                      <li><a href="{!! url('twitter') !!}" class="btn"><i class="fa fa-twitter-square btn-twitter"></i></a></li>
                    </ul>
                    <button type="submit" class="btn btn-primary signin-login pull-right">Signin</button>
                    <a href="#" class="pull-left text-warning">Forgot password</a>
                </form>
            </div>
            <!--signinform-->
        </div>
        <!--signin-->
        <div class="sign-up signup">
            <a href="{!! url('/register') !!}">create new account</a>
        </div>
        <!--signup-->
        <div class="sign-up forgot-password hidden">
            <a href="{!! url('/password/reset') !!}">Forgot Password?</a>
        </div>
        <!--forgot password-->
    </div>
    <!--signinparent-->



    <script src='{!! url("assets/js/jquery-2.1.4.min.js") !!}'></script>
    <script src='{!! url("assets/js/bootstrap.min.js") !!}'></script>


    <script>
        $(document).ready(function(){

            $('.signin-login').on('click', function(e){
                var name = $('#emailSignin').val();
                var password = $('#passwordSignin').val();
                e.preventDefault();
                if(name!= '' && password != '')
                {
                    $('.login-form').submit();
                }
                else if(name == '')
                {
                    $('span.error').remove();
                    $('#emailSignin').after('<span class="error">please enter email</span>');
                    $('#emailSignin').addClass('signin-error');
                }
                else
                {
                    $('.signin-username').addClass('hidden');
                    $('.signin-head').addClass('signin-alt');
                    $('.signin-password').removeClass('hidden');
                    $('.signin-head').html(name);
                    $(this).html('submit');
                    $('.signup').addClass('hidden');
                    $('.forgot-password').removeClass('hidden');
                    $('.signin-image img').attr("src", "assets/images/avatar.png");
                }
            });
        });
    </script>

</body>
</html>
