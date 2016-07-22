<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Knot - Register </title>

    <link href="{!! url('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/animate.css') !!}" rel="stylesheet" type="text/css" media="all"/>

    

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
            <div class="signin-head animated zoomIn">
                Create New
            </div>
            <!--signinhead-->
            <div class="signin-form">
                <form class="login-form" action="#">
                    <!-- fixes autocomplete off -->
                    <input style="display:none">
                    <input type="password" style="display:none">
                    <!-- /fixes autocomplete off -->
                    <div class="form-group signin-enter signin-username animated flipInX">
                        <label for="fname">Enter First Name</label>
                        <input type="text" class="form-control signin-input" id="fname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group signin-enter signin-username animated flipInX">
                        <label for="emailSignin">Enter Email address</label>
                        <input type="email" class="form-control signin-input" id="emailSignin" placeholder="Enter Email" autocomplete="off">
                    </div>
                    <div class="form-group signin-enter signin-password animated flipInX">
                        <label for="passwordSignin">password</label>
                        <input type="password" class="form-control signin-input" id="passwordSignin" placeholder="*********" autocomplete="off">
                    </div>
                    <div class="form-group signin-enter signin-password animated flipInX">
                        <label for="retypepasswordSignin">Retype Password</label>
                        <input type="password" class="form-control signin-input" id="retypepasswordSignin" placeholder="*********" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary signin-login pull-right">Sign Up</button>
                </form>
            </div>
            <!--signinform-->
        </div>
        <!--signin-->
        <div class="sign-up signup">
            <a href="{!! url('templates/extras/login') !!}">Already Have An Account?</a>
        </div>
        <!--haveaccount-->
    </div>
    <!--signupparent-->



    <script src="{!! url('assets/js/jquery-2.1.4.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>

    
</body>
</html>
