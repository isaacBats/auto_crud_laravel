<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title> Knot </title>

  <link rel='stylesheet' href='{!! url("assets/css/bootstrap.min.css") !!} '>
  <link rel='stylesheet' href='{!! url("assets/css/style.css") !!} '>
  <link rel='stylesheet' href='{!! url("assets/css/preloader.css") !!} '>

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src='{!! url("assets/js/jquery-2.1.4.min.js") !!}'></script>

<script>
  jQuery(window).load(function () {
    $('.knot-preloader').addClass('hidden');
  });
</script>

</head>
<body class="top-navigation">

  <!-- To disable preloader, please remove knot-preloader block -->
  <div class="knot-preloader text-center">
    <img src="{!! url('assets/images/macbookproretina.png') !!}" alt="">
    <h1>Knot Responsive Admin Template</h1>
    <div class="timer-loader">Loading…</div>
  </div>


  @include('partials.leftbar')

  <!--  .slideout-panel is dynamically added to below main tag -->
  <main id="panel" class="-panel">

    <!-- topbar -->
    
    <header>
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{!! url('/') !!}"> <img src="{!! url('assets/images/logo.png') !!}" alt=""> </a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Home</a></li>
            <li class="dropdown knot-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Multi Level Menu <span class="caret"></span>
              </a>
              <ul class="dropdown-menu dropdown-left" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="#">First Link</a></li>
                <li><a href="#">Second Link</a></li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Hover me for more options</a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Second level</a></li>
                    <li class="dropdown-submenu">
                      <a href="#">Even More..</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">3rd level</a></li>
                        <li><a href="#">3rd level</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Second level</a></li>
                    <li><a href="#">Second level</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown knot-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Me <b class="caret"></b></a>
              <ul class="dropdown-menu top-menu-drop dropdown-left">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search something here...">
            </div>          
          </form>
          <ul class="nav navbar-nav navbar-right">              
            <li class="dropdown knot-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ion-ios-bell-outline"></i> </a>
              <ul class="dropdown-menu notification-drop user-drop">
                <li class="heading">You have 20 unread messages !</li>
                <li>
                  <ul class="scroll-block">
                    <li><a href="#"><i class="ion-ios-star yellow"></i> <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> <span class="time">6 minutes ago</span></a></li>
                    <li><a href="#"><i class="ion-email-unread red"></i> 36 new mails <span class="time">1 day ago</span></a></li>
                    <li><a href="#"><i class="ion-happy blue"></i> Iris accepted your friendship <span class="time">2 days ago</span></a></li>
                    <li><a href="#"><i class="ion-help-buoy sky"></i> Phone number updated <span class="time">3 days ago</span></a></li>
                    <li><a href="#"><i class="ion-settings red"></i> Phone number updated <span class="time">3 days ago</span></a></li>
                    <li><a href="#"><i class="ion-briefcase green"></i> Phone number updated <span class="time">3 days ago</span></a></li>
                    <li><a href="#"><i class="ion-calendar torque"></i> Phone number updated <span class="time">3 days ago</span></a></li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown knot-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ion-ios-email-outline"></i> </a>
              <ul class="dropdown-menu message-drop">
                <li>
                  <ul class="scroll-block">
                    <li>
                      <a href="#">
                        <span class="user-avatar">
                          <img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
                          <span class="status away"></span>
                        </span>                      
                        <p class="name">Denver Wizard</p>
                        <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
                        <p class="time">2 minutes ago</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="user-avatar">
                          <img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
                          <span class="status online"></span>
                        </span>                      
                        <p class="name">Richard Henry</p>
                        <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
                        <p class="time">2 minutes ago</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="user-avatar">
                          <img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
                          <span class="status away"></span>
                        </span>                      
                        <p class="name">Sharpova</p>
                        <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
                        <p class="time">2 minutes ago</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="user-avatar">
                          <img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
                          <span class="status offline"></span>
                        </span>                      
                        <p class="name">Harley</p>
                        <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
                        <p class="time">2 minutes ago</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span class="user-avatar">
                          <img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
                          <span class="status away"></span>
                        </span>                      
                        <p class="name">Karthik nayak</p>
                        <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
                        <p class="time">2 minutes ago</p>
                      </a>
                    </li>
                  </ul>
                  <li class="footer"><a href="#">See all notifications</a></li>
                </ul>
              </li>            
              <li class="dropdown knot-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">Bootstrap Guru </a>
                <ul class="dropdown-menu user-drop">
                  <li><a href="#"><i class="ion-help-buoy torque"></i> Settings</a></li>
                  <li><a href="#"><i class="ion-alert-circled blue"></i> Privacy Settings</a></li>
                  <li><a href="#"><i class="ion-document-text yellow"></i> My Notes</a></li>
                  <li><a href="#"><i class="ion-hammer red"></i> Edit</a></li>
                  <li><a href="#"><i class="ion-power sky"></i> Logout</a></li>
                </ul>
              </li>
              <li><a href="#" class="toggle-rightbar" ><i class="ion-ios-settings-strong"></i></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </nav>
      </header>

      <!-- /topbar -->

      <div class="content-holder">
        <div class="starter-template">
          <h1>Horizontal Menu</h1>
          <p>You can disabled the left sidebar and use only top navigation by <code>.top-navigation</code></p>

        </div>

      </div>

    </main>

    @include('partials.rightbar')

    <script src='{!! url("assets/js/jquery-ui-1.10.3.custom.min.js") !!}'></script>
    <script src='{!! url("assets/js/bootstrap.min.js") !!}'></script>
    <script src='{!! url("assets/js/min/slideout-min.js") !!}'></script>
    <script src='{!! url("assets/js/jquery.nicescroll.min.js") !!}'></script>
    <script src='{!! url("assets/js/jquery.loadmask.min.js") !!}'></script>
    <script src='{!! url("assets/js/jquery.loadmask.min.js") !!}'></script>
    <script src='{!! url("assets/js/switchery.min.js") !!}'></script>
    <script src='{!! url("assets/js/jquery.fullscreen.min.js") !!}'></script>

    @yield('scripts')

    <!-- Custom js file -->
    <script src='{!! url("assets/js/core.min.js") !!}'></script>



  </body>
  </html>
