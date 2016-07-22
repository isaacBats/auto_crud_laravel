<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Knot - Register </title>

    <link rel='stylesheet' href='{!! url("assets/css/bootstrap.min.css") !!} '>
    <link rel='stylesheet' href='{!! url("assets/css/style.css") !!} '>
    <link rel='stylesheet' href='{!! url("assets/css/animate.css") !!} '>
    
</head>

<body>
    

    <div class="signinbg signupbg"></div>
    <!--signupbg-->
    <div class="signinparent">
        <div class="signin">
            <div class="signin-image">
                <a href="#"><img src="{!! url('assets/images/dummyuser.png') !!}" alt="dummyuser"></a>
            </div>
            <!--signinimage-->
            <div class="signin-head ">
                Create New
            </div>
            
            <!--signinhead-->
            <div class="signin-form">
                <form class="login-form" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <!-- fixes autocomplete off -->
                    <input style="display:none">
                    <input type="password" style="display:none">
                    <!-- /fixes autocomplete off -->

                    <div class="form-group signin-enter signin-username  {{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control signin-input" name="username" value="{{ old('username') }}">

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group signin-enter signin-username  {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control signin-input" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group signin-enter signin-password  {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="name">Password</label>
                        <input id="password" type="password" class="form-control signin-input" name="password" value="{{ old('password') }}">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group signin-enter signin-password  {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="name">Confirm Password</label>
                        <input id="password_confirmation" type="password" class="form-control signin-input" name="password_confirmation" value="{{ old('password_confirmation') }}">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary signin-login pull-right">Sign Up</button>
                </form>
            </div>
            <!--signinform-->
        </div>
        <!--signin-->
        <div class="sign-up signup">
            <a href="{!! url('/login') !!}">Already Have An Account?</a>
        </div>
        <!--haveaccount-->
    </div>
    <!--signupparent-->

    <script src='{!! url("assets/js/jquery-2.1.4.min.js") !!}'></script>
    <script src='{!! url("assets/js/bootstrap.min.js") !!}'></script>
        
</body>
</html>
