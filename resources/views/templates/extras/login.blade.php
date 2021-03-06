<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Knot - Login </title>

    <link href="{!! url('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/animate.css') !!}" rel="stylesheet" type="text/css" media="all"/>

    

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
        <form class="login-form" action="#" method="post">
            <!-- fixes autocomplete off -->
            <input style="display:none">
            <input type="password" style="display:none">
            <!-- /fixes autocomplete off -->
            <div class="form-group signin-enter signin-username animated lightSpeedIn">
                <label for="emailSignin">Enter Email address</label>
                <input type="email" class="form-control signin-input" id="emailSignin" placeholder="Enter Email">
            </div>
            <div class="form-group signin-enter signin-password hidden animated lightSpeedIn">
                <label for="passwordSignin">password</label>
                <input type="password" class="form-control signin-input" id="passwordSignin" placeholder="*********" required>
            </div>
            <button type="submit" class="btn btn-primary signin-login pull-right">Next</button>
        </form>
    </div>
    <!--signinform-->
</div>
<!--signin-->
<div class="sign-up signup">
    <a href="{!! url('templates/extras/register') !!}">create new account</a>
</div>
<!--signup-->
<div class="sign-up forgot-password">
    <a href="{!! url('templates/extras/forgot-password') !!}">Forgot Password?</a>
</div>
<!--forgot password-->
</div>
<!--signinparent-->



<script src="{!! url('assets/js/jquery-2.1.4.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>


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
