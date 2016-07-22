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
<body class="">

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
        <h1>Right Sidebar</h1>
        <p>You can disable right sidebar by removing <code>.enabled</code> to right-sidebar class</p>
      </div>

    </div>

  </main>

  <!-- right sidebar -->

  <section id="right-sidebar" class="right-sidebar light-version enabled">

    <div class="right-header">
      <a href="#" class="close-rightsidebar"><i class="ion-close-round"></i></a>
      <a href="#" class="clear-all">clear all</a>
    </div>
    <div role="tabpanel" class="right-sidebar-tab">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#v1" role="tab" data-toggle="tab"><i class="ion-cube"></i></a></li>
        <li role="presentation"><a href="#v2" role="tab" data-toggle="tab"><i class="ion-paintbucket"></i></a></li>
        <li role="presentation"><a href="#v3" role="tab" data-toggle="tab"><i class="ion-person-stalker"></i></a></li>
        <li role="presentation" class="active"><a href="#v4" role="tab" data-toggle="tab"><i class="ion-gear-a"></i></a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="v1">
          <ul class="list-group contacts-list">
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/one.png') !!}" alt="">
                </div>
                <span class="name">Richards carlson</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/two.png') !!}" alt="">
                </div>
                <span class="name">Firing Arc</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/three.png') !!}" alt="">
                </div>
                <span class="name">strapzen</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/four.png') !!}" alt="">
                </div>
                <span class="name">Reeves</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/five.png') !!}" alt="">
                </div>
                <span class="name">Bootstrap Guru</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/six.png') !!}" alt="">
                </div>
                <span class="name">Carlson</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/seven.png') !!}" alt="">
                </div>
                <span class="name">Paris hilton</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/eight.png') !!}" alt="">
                </div>
                <span class="name">Henry Richards</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/nine.png') !!}" alt="">
                </div>
                <span class="name">Richie Rich</span>
                <i class="ion ion-record onlineC"></i>
              </a>
            </li>

          </ul>
        </div>
        <div role="tabpanel" class="tab-pane" id="v2">
          <ul class="list-group contacts-list">
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/seven.png') !!}" alt="">
                </div>
                <span class="name">Paris hilton</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/eight.png') !!}" alt="">
                </div>
                <span class="name">Henry Richards</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/nine.png') !!}" alt="">
                </div>
                <span class="name">Richie Rich</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/one.png') !!}" alt="">
                </div>
                <span class="name">Richards carlson</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/two.png') !!}" alt="">
                </div>
                <span class="name">Firing Arc</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/three.png') !!}" alt="">
                </div>
                <span class="name">strapzen</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/four.png') !!}" alt="">
                </div>
                <span class="name">Reeves</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/five.png') !!}" alt="">
                </div>
                <span class="name">Bootstrap Guru</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#">
                <div class="avatar">
                  <img src="{!! asset('assets/images/avatar/six.png') !!}" alt="">
                </div>
                <span class="name">Carlson</span>
                <i class="ion ion-record awayC"></i>
              </a>
            </li>
          </ul>
        </div>
        <div role="tabpanel" class="tab-pane" id="v3">
          <div class="panel-group knot-accordion knot-accordion-two" id="accordionOne" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingModalOne">
                <h4 class="panel-title">
                  <a class="" data-toggle="collapse" data-parent="#accordionOne" href="#ResponseRate" aria-expanded="true">
                    Response Rate <i class="chevron ti-angle-down"></i>
                  </a>
                </h4>
              </div>
              <div id="ResponseRate" class="panel-collapse collapse in" role="tabpanel" aria-expanded="true">
                <div class="panel-body no_padding">
                  <div class="list-group contacts-list">
                    <p class="info-head">web developement</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      </div>
                    </div>

                    <p class="info-head">Mobile developement</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      </div>
                    </div>

                    <p class="info-head">Ruby developement</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordionOne" href="#DecreasedRating" aria-expanded="false" class="collapsed">
                    Decreased Rating <i class="chevron ti-angle-down"></i>
                  </a>
                </h4>
              </div>
              <div id="DecreasedRating" class="panel-collapse collapse in" role="tabpanel" aria-expanded="false">

                <div class="panel-body no_padding">
                  <div class="list-group contacts-list">
                    <p class="info-head">Target Audience</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      </div>
                    </div>

                    <p class="info-head">Free Apps</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      </div>
                    </div>

                    <p class="info-head">Downloads</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#FalseResults" aria-expanded="false">
                    False Results <i class="chevron ti-angle-down"></i>
                  </a>
                </h4>
              </div>
              <div id="FalseResults" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                <div class="panel-body no_padding">
                  <div class="list-group contacts-list">
                    <p class="info-head">Less</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      </div>
                    </div>

                    <p class="info-head">Css</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      </div>
                    </div>

                    <p class="info-head">Php</p>
                    <div class="progress progress-bar-mini progress-xs">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane active" id="v4">
          <div class="settings">
            <div class="form-group">
              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Fixed Top NavBar</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="topNav" >
                </div>
              </div>
              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Left Right Sidebar</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="leftRightSidebar"  >
                </div>
              </div>
              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Collapsed Sidebar</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="collapsedSidebar" >
                  <div class="toggle">
                    <label for="collapsedSidebar"><i></i>
                    </label>
                  </div>
                </div>
              </div>
              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Horizontal Menu</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="horizontalMenu" >
                  <div class="toggle">
                    <label for="horizontalMenu"><i></i>
                    </label>
                  </div>
                </div>
              </div>
              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Left Sidebar Light Version</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="leftLightVersion" >
                  <div class="toggle">
                    <label for="leftLightVersion"><i></i>
                    </label>
                  </div>
                </div>
              </div>

              <div class="toggle-switch">
                <label class="col-sm-8 control-label">Right Sidebar Dark Version</label>
                <div class="col-sm-4">
                  <input type="checkbox" class="switchery toggle-body" id="rightLightVersion" >
                  <div class="toggle">
                    <label for="rightLightVersion"><i></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- settings -->
        </div>
      </div>

    </div>
  </section>


  <!-- /right sidebar -->

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
