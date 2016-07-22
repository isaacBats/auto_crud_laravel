<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Knot - 404 </title>

    <link href="{!! url('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{!! url('assets/css/animate.css') !!}" rel="stylesheet" type="text/css" media="all"/>

    

</head>

<body>
    
    <div class="error-bg"></div>
    <!--errorbg-->
    <div class="error-block">
        <div class="error-head">Oops! Page Not Found</div>
        <!--errorhead-->
        <div class="error-image">
            <img src="{!! url('assets/images/404error.png') !!}" alt="404">
        </div>
        <!--errorimage-->
        <a href="{!! url('home') !!}" class="btn btn-primary error-btn">Take Me Home</a>
        <!--errorbtn-->
    </div>
    <!--error-->



    <script src="{!! url('assets/js/jquery-2.1.4.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>

        
</body>
</html>
