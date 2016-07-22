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
<body class="left-right-sidebar-enabled">

  <!-- To disable preloader, please remove knot-preloader block -->
  <div class="knot-preloader text-center">
    <img src="{!! url('assets/images/macbookproretina.png') !!}" alt="">
    <h1>Knot Responsive Admin Template</h1>
    <div class="timer-loader">Loading…</div>
  </div>


  @include('partials.leftbar')

  <!--  .slideout-panel is dynamically added to below main tag -->
  <main id="panel" class="-panel">

    @include('partials.topbar')

    <div class="content-holder">
      <div class="starter-template">
        <h1>Left and Right sidebar Enabled</h1>
        <p>You can enable left and right sidebar by giving the class <code>.left-right-sidebar-enabled</code> to body</p>
        
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
