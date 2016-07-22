@extends('layouts.app')

@section('content')

<div class="breadcrump-block hidden">
    <h3>Dashboard</h3>
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Dashboard</a></li>
    </ol>
</div>
<div class="row">
    <div class="col-md-3 col-xs-12 col-sm-6 ">
        <div class="info-three greenbg-info">
            <div class="logo-three"><i class="ion ion-ios-cloud dark-info-green"></i></div>
            5.34 TB
            <p>Storage Used</p>
        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6 ">
        <div class="info-three redbg-info">
            <div class="logo-three"><i class="ion ion-ios-film-outline dark-info-red"></i></div>
            268
            <p>Videos Upload</p>
        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6 ">
        <div class="info-three yellowbg-info">
            <div class="logo-three"><i class="ion ion-ios-musical-notes dark-info-yellow"></i></div>
            1930
            <p>Songs Listened</p>
        </div>
    </div>
    <div class="col-md-3 col-xs-12 col-sm-6 ">
        <div class="info-three primarybg-info">
            <div class="logo-three"><i class="ion ion-document-text dark-info-primary"></i></div>
            68,876
            <p>All Documents</p>
        </div>
    </div>


    <div class="col-md-12 panel-parent">
        <!-- panel starts here-->
        <div class="panel knot-panel panel-primary">
            <div class="panel-body main-chart">
                <div class="ct-chart ct-minor-second"></div>
            </div>
        </div>
        <!-- /panel -->
    </div>
    <!-- col-md-6 -->

    <div class="col-md-4 panel-parent">
        <!-- panel starts here-->
        <div class="panel knot-panel knot-panel-wh no-bg">
            <div class="profile-widget">
                <div class="cover-photo">
                    <img src="assets/images/cover.jpeg"  alt="">
                </div>
                <div class="user-info">
                    <div class="profile-avatar">
                        <img src="assets/images/avatar.png" alt="">
                    </div>

                    <ul class="list-inline profile-stats">
                        <li>
                            <span class="number">658</span>
                            <span class="desc ">Completed</span>
                        </li>
                        <li>
                            <span class="number">12</span>
                            <span class="desc ">Pending</span>
                        </li>
                        <li>
                            <span class="number">98</span>
                            <span class="desc ">New Tasks</span>
                        </li>
                    </ul>
                </div>


                <div class="profile-tasks">
                    <div class="info-icon bg-success"><i class="ion ion-ios-people dark-info-green"></i></div>
                    <span class="number">Had a coffee</span>
                    <p>Madhurams</p>
                </div>


                <div class="profile-tasks">
                    <div class="info-icon bg-warning"><i class="ion ion-ios-film-outline dark-info-red"></i></div>
                    <span class="number">5300</span>
                    <p>Total MB Used</p>
                </div>


                <div class="profile-tasks">
                    <div class="info-icon bg-danger"><i class="ion ion-ios-musical-notes dark-info-yellow"></i></div>
                    <span class="number">5300</span>
                    <p>Music Streamed last 3 hours </p>
                </div>


                <div id="inbox">
                    <div class="fab btn-group show-on-hover dropup">
                        <div data-toggle="tooltip" data-placement="left" title="Compose" style="margin-left: 42px;">
                            <button type="button" class="btn btn-danger btn-io dropdown-toggle" data-toggle="dropdown">
                                <span class="icon-rot">
                                    <i class="fa ion-circle  fab-backdrop"></i>
                                    <i class="fa ion-plus  fab-primary"></i>
                                    <i class="fa ion-edit  fab-secondary"></i>
                                </span>
                            </button></div>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Coffee"><i class="ion-coffee"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="LiveChat"><i class="ion-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Reminders"><i class="ion-cube"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Invites"><i class="ion-male"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /panel -->
        </div>
        <!-- col-md-4 -->



        <div class="col-md-4 panel-parent">
            <!-- panel starts here-->
            <div class="panel knot-panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Select list
                        <span class="panel-options">
                            <a href="#" class="panel-refresh">
                                <i class="ion ion-refresh"></i>
                            </a>
                            <a href="#" class="panel-minimize">
                                <i class="ion ion-chevron-up"></i>
                            </a>
                            <a href="#" class="panel-close">
                                <i class="iion ion-close"></i>
                            </a>
                        </span>
                    </h3>
                </div>
                <div class="panel-body no-padding">
                    <ul class="listrap">
                        <li>
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/one.png" alt="">
                            </div>
                            <div class="right">
                                <h4>meeting</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                        <li class="active">
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/two.png" alt="">
                            </div>
                            <div class="right">
                                <h4>Just wanted to check the code</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                        <li class="active">
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/three.png" alt="">
                            </div>
                            <div class="right">
                                <h4>Happy to hear</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                        <li>
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/four.png" alt="">
                            </div>
                            <div class="right">
                                <h4>Lets get it done</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                        <li>
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/four.png" alt="">
                            </div>
                            <div class="right">
                                <h4>Lets get it done</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                        <li class="active">
                            <div class="listrap-toggle">
                                <span></span>
                                <img src="assets/images/avatar/six.png" alt="">
                            </div>
                            <div class="right">
                                <h4>Howdiiiii</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ea, nemo sint rerum itaque minus modi, provident aliquam ab amet quia sequi, ad officiis maxime nam repellat enim possimus dolore ! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum quisquam illo nostrum sunt molestias numquam non, est architecto sequi dolores. Cumque perspiciatis quo debitis. Ea vitae aut rem delectus est.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /panel -->
        </div>
        <!-- col-md-6 -->

        <div class="col-md-4 panel-parent">
            <!-- panel starts here-->
            <div class="panel knot-panel knot-panel-wh no-bg">
                <div class="music-player">
                    <div class="image-holder">
                        <img src="assets/images/music.jpg" alt="musicimg">
                    </div>
                    <div class="info-holder">
                        <div class="song">
                            Mary my heart
                            <span class="time">12:30</span>
                            <a href="#" class="like"><i class="ion ion-heart"></i></a>
                            <a href="#" class="shuffle"><i class="ion-shuffle"></i></a>
                        </div>
                        <div class="progress progress-bar-mini progress-sm progress-radius">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                        <div class="control-buttons">
                            <ul class="list-inline">
                                <li><a href="#"><i class="ion ion-play"></i></a>
                                </li>
                                <li><a href="#"><i class="ion-ios-rewind"></i></a>
                                </li>
                                <li><a href="#"><i class="ion ion-ios-fastforward"></i></a>
                                </li>
                            </ul>
                        </div>
                        <ul class="list-group playlist">
                            <li class="list-group-item">
                                <span class="badge bg-grey">2:60</span>
                                Far from the sea
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-warning">3:12</span>
                                Let it be
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-success">6:42</span>
                                See the shining lights
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-info">5:04</span>
                                Grind up with
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-danger">3:32</span>
                                Making the change
                            </li>
                            <li class="list-group-item">
                                <span class="badge bg-grey">4:22</span>
                                Turns out to be one
                            </li>
                        </ul>
                    </div>
                    <!-- info-holder -->
                </div>
                <!-- music-player -->
            </div>
            <!-- /panel -->
        </div>
        <!-- col-md-4 -->

        <div class="container-fluid">
            <div class="row">
                <!-- Revenue Generation Widget -->
                <div class="col-md-3 panel-parent">
                    <!-- panel starts here-->
                    <div class="panel knot-panel knot-panel-wh no-bg">
                        <div class="sparkline-widget">
                            <div class="col-md-12 no-padding me">
                                <div class="heading-info bg-info">
                                    <p class="pull-left">Revenue Generation
                                        <br>
                                    </p>
                                    <p class="right">9% <i class="ion-android-arrow-dropup flatGreenc"></i>
                                    </p>
                                </div>
                                <div class="svg-holder bg-info">
                                    <div class="line"></div>
                                    <svg id="chart1" class="sparkline"></svg>
                                </div>
                                <div class="info-bottom bg-info info-border">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 left">
                                                Monthly
                                                <p>4%</p>
                                            </div>
                                            <div class="col-md-6 right">
                                                Profit
                                                <p>40%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- sparkline-widget -->
                    </div>
                    <!-- /panel -->
                </div>
                <!-- col-md-3 -->


                <!-- ********* Tabs Management *********** -->
                <div class="col-md-6 panel-parent">
                    <!-- panel starts here-->
                    <div class="panel knot-panel knot-panel-wh no-bg">
                        <div class="col-xs-12 col-md-12 no-padding">
                            <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                                    <div class="list-group content-wrapper">
                                        <a href="#" class="list-group-item text-center">
                                            <i class="fa tab-icon fa-group"></i><br/>Users
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <i class="ion tab-icon ion-filing"></i><br/>Projects
                                        </a>
                                        <a href="#" class="list-group-item text-center">
                                            <i class="fa tab-icon fa-sign-in"></i><br/>Register
                                        </a>
                                        <a href="#" class="list-group-item text-center active">
                                            <i class="fa tab-icon fa-credit-card"></i><br/>Payment
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                                    <!-- users section -->
                                    <div class="bhoechie-tab-content">
                                        <table class="table table-hover display" id="users_widget">
                                            <thead>
                                                <tr>
                                                    <th><i class="fa fa-sort"></i>&nbsp;User</th>
                                                    <th><i class="fa fa-sort"></i>&nbsp;Email</th>
                                                    <th><i class="fa fa-sort"></i>&nbsp;Status</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>Vijay</td>
                                                <td>contact@vijay.me</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr><tr>
                                            <td>Anusha</td>
                                            <td>hire@anusha.com</td>
                                            <td><span class="badge bg-info">Pending</span></td>
                                        </tr><tr>
                                        <td>John Doe</td>
                                        <td>john@gmail.com</td>
                                        <td><span class="badge bg-waring">Suspended</span></td>
                                    </tr><tr>
                                    <td>Chris</td>
                                    <td>chris@yahoo.com</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr><tr>
                                <td>Steyaert</td>
                                <td>jens@gmail.com</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                            </tr><tr>
                            <td>David</td>
                            <td>davidoo@yahoo.com</td>
                            <td><span class="badge bg-info">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Ankit</td>
                            <td>contact@ankit.me</td>
                            <td><span class="badge bg-success">Rejected</span></td>
                        </tr>
                        <tr>
                            <td>Ashuthosh</td>
                            <td>hire@ashuto.com</td>
                            <td><span class="badge bg-info">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>john@gmail.com</td>
                            <td><span class="badge bg-waring">Approved</span></td>
                        </tr>
                        <tr>
                            <td>Chris</td>
                            <td>chris@yahoo.com</td>
                            <td><span class="badge bg-success">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Steyaert</td>
                            <td>jens@gmail.com</td>
                            <td><span class="badge bg-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>David</td>
                            <td>davidoo@yahoo.com</td>
                            <td><span class="badge bg-info">Rejected</span></td>
                        </tr>
                    </table>

                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Project Id</th>
                                <th>Progress</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Vijay</td>
                            <td>133510</td>
                            <td>
                                <div class="progress progress-bar-mini progress-xs progress-widget">
                                    <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%">
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-info">53%</span></td>
                        </tr>
                        <tr>
                            <td>Anusha</td>
                            <td>133674</td>
                            <td>
                                <div class="progress progress-bar-mini progress-xs progress-widget">
                                    <div class="progress-bar progress-bar-danger active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-danger">25%</span></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>123545</td>
                            <td>
                                <div class="progress progress-bar-mini progress-xs progress-widget">
                                    <div class="progress-bar progress-bar-warning active" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-warning">47%</span></td>
                        </tr>
                        <tr>
                            <td>Chris</td>
                            <td>143890</td>
                            <td>
                                <div class="progress progress-bar-mini progress-xs progress-widget">
                                    <div class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%">
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-success">88%</span></td>
                        </tr>
                        <tr>
                            <td>Steyaert</td>
                            <td>133452</td>
                            <td>
                                <div class="progress progress-bar-mini progress-xs progress-widget">
                                    <div class="progress-bar progress-bar-info active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    </div>
                                </div>
                            </td>
                            <td><span class="text-info">45%</span></td>
                        </tr>

                    </table>
                </div>

                <!-- Register -->
                <div class="bhoechie-tab-content">
                    <div class="tab-content knot-tab-content register">
                        <h4 class="text-center">CREATE YOUR ACCOUNT</h4>
                        <form class="form">
                            <div class="form-group row">
                                <label class="col-md-4">Email:</label>
                                <span class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email">
                                </span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Password:</label>
                                <span class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Password">
                                </span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4">Confirm Password:</label>
                                <span class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Confirm Password">
                                </span>
                            </div>
                            <div class="form-group text-center">
                                <a href="#" class="btn btn-sea-blue">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bhoechie-tab-content active">
                 <!-- CREDIT CARD FORM STARTS HERE -->
                 <div class="credit-card-box">
                    <div class="panel-heading display-table">
                        <div class="row display-tr">
                            <h3 class="panel-title display-td pull-left">Subscription Payment</h3>
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png" alt="image">

                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="payment-form">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">
                                            <input
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            id="cardNumber"
                                            value=""
                                            required
                                            />
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                        <input
                                        type="tel"
                                        class="form-control"
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        id="cardExpiry"
                                        value=""
                                        required
                                        />
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input
                                        type="tel"
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        id="cardCVC"
                                        value=""
                                        required
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-sea-blue" type="submit">Start Subscription</button>
                            </div>
                            <div class="row" style="display:none;">
                                <div class="col-xs-12">
                                    <p class="payment-errors"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->
            </div>
        </div>
    </div>
</div>
<!-- end -->
</div>
<!-- /panel -->
</div>
<!-- col-md-6 -->

<!-- ********* Tasks Management *********** -->
<div class="col-md-3 panel-parent">
    <!-- panel starts here-->
    <div class="panel knot-panel knot-panel-wh no-bg">
        <div class="sparkline-widget">
            <div class="col-md-12 no-padding me">
                <div class="heading-info bg-success">
                    <p class="pull-left">Tasks Management
                        <br>
                    </p>
                    <p class="right">9% <i class="ion-android-arrow-dropup flatGreenc"></i>
                    </p>
                </div>
                <div class="svg-holder bg-success">
                    <div class="line"></div>
                    <svg id="chart3" class="sparkline"></svg>
                </div>
                <div class="info-bottom bg-success info-border">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 left">
                                Monthly
                                <p>4%</p>
                            </div>
                            <div class="col-md-6 right">
                                Profit
                                <p>40%</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- sparkline-widget -->
            </div>
            <!-- /panel -->
        </div>
    </div>
</div><!-- /col-md-3 -->
</div>
</div><!-- /row -->


<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <div class="calendar-dashboard"></div>
        </div>

        <div class="col-md-3 spark-widget">
            <div class="compositebar redbg-info">
                <span data-sparkline="compositebar1" data-height="82px" data-width="100%" class="sparkeline"></span>
            </div>
            <div class="info-bottom info-border bg-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 b-right">
                            <span class="spark-percent">132</span><br>
                            Monthly
                        </div>
                        <div class="col-md-6">
                            <span class="spark-percent">460</span><br>
                            Yearly
                        </div>
                    </div>
                </div>
            </div><!-- /spark-widget -->

            <div class="info-six bg-white margin-20">
              <div class="info-icon bg-info"><i class="ion white ion-document-text dark-info-red"></i></div>
              <span class="number blue">1200</span>
              <p class="blue">Files Downloaded</p>
          </div>

      </div>

      <div class="col-md-3 spark-widget">
        <div class="compositebar yellowbg-info">
            <span data-sparkline="compositebar2" data-height="82px" data-width="100%">
                4,6,2,7,3,8,1,2,5,5,6,4,8
            </span>
        </div>
        <div class="info-bottom info-border bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 b-right">
                        <span class="spark-percent">658</span><br>
                        Likes
                    </div>
                    <div class="col-md-6">
                        <span class="spark-percent">275</span><br>
                        Dislikes
                    </div>
                </div>
            </div>
        </div>

        <div class="info-six bg-warning red  margin-20">
          <div class="info-icon"><i class="ion red ion-ios-people dark-info-green"></i></div>
          <span class="number">5300</span>
          <p>Total Users today</p>
      </div>

  </div><!-- /col-md-3 -->

  <div class="col-md-3">
    <div class="widget-profile">
        <div class="profile-top">

            <div class="wprofile-img">
                <img src="assets/images/signinbg.jpg" alt="profile bg">
            </div>
            <div class="wprofile-heading">
                Bootstrap Guru
                <div class="wprofile-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque voluptate inventore nam iure tempore rerum minima.
                </div>
            </div>
            <div class="wprofile-image">
                <img src="assets/images/avatar.png" alt="avatar">
            </div>
            <div class="wprofile-icon">
                <a href="#"><i class="ion ion-plus"></i></a>
            </div>
        </div>
        <ul class="list-inline list-unstyled profile-bottom">
            <li>180 <div class="wprofile-item">Followers</div></li>
            <li>90 <div class="wprofile-item">Following</div></li>
            <li>300 <div class="wprofile-item">Shares</div></li>
        </ul>
    </div>
</div>


</div><!-- /row -->
</div>
</div>

@endsection

@section('scripts')

<!-- Tables -->
<script src='{!! url("assets/js/jquery.dataTables.min.js") !!}'></script>
<script src='{!! url("assets/js/bootstrap-datatables.js") !!}'></script>
<script src='{!! url("assets/js/dataTables-custom.js") !!}'></script>
<script src='{!! url("assets/js/jquery.bootstrap.wizard.js") !!}'></script>
<script src='{!! url("assets/js/form-wizard.js") !!}'></script>
<script src='{!! url("assets/js/bic_calendar.min.js") !!}'></script>

<!-- Charts and graphs -->
<script src='{!! url("assets/js/chartist/chartist.min.js") !!}'></script>
<script src='{!! url("assets/js/custom-chart.min.js") !!}'></script>
<script src='{!! url("assets/js/bhoechie.vertical.tabs.min.js") !!}'></script>
<script src='{!! url("assets/js/min/selectable.thumbnail.list.min.js") !!}'></script>
<script src='{!! url("assets/js/build/d3.min.js") !!}'></script>
<script src='{!! url("assets/js/build/nv.d3.min.js") !!}'></script>
<script src='{!! url("assets/js/jquery.sparkline.min.js") !!}'></script>
<script src='{!! url("assets/js/min/sparkline-min.js") !!}'></script>

<script>
    $('.fab').hover(function () {
        $(this).toggleClass('active');
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).ready(function () {
        //Calendar on right sidebar @bic calendar
        mesos = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

        dias = [ "MON", "TUE", "WED", "THU", "FRI","SAT","SUN"];

        $('.calendar-dashboard').bic_calendar({
            nombresMes: mesos,
            dias: dias,
            req_ajax: {
                type: 'get'
            }
        });
    });
</script>
@stop
