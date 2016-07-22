@extends('layouts.app')

@section('styles')
	<link href="{!! url('assets/css/c3.css') !!}" rel="stylesheet">
@endsection

@section('content')
	
	<div class="page_header">
            <div class="col-md-4">
              <div class="pull-left">
                  <div class="main-text">Line Graphs</div>
                  <p class="block">
                      Line charts are often used to visualize a trend in data over intervals of time
                  </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="text-center">
                <i class="ti-stats-up page_header_icon"></i>
                
              </div>
            </div>

            <div class="col-md-4">
              <div class="right pull-right">
                  <ul class="right_bar">
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;With Time Series</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;XY Line Chart</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Spline Chart</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;With Regions</li>
                  </ul>
              </div>
            </div>
        </div>
        <!-- /pageheader -->      
        
        <div class="row">
          <div class="col-md-12 panel-parent">
            <!-- panel -->
            <div class="panel knot-panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Simple Line Chart
                  <span class="panel-options">
                   <a href="#" class="panel-refresh">
                    <i class="ion ion-refresh"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                    <i class="ion ion-chevron-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                    <i class="ion ion-close"></i> 
                  </a>
                </span>
              </h3>
            </div>
            <div class="panel-body">
              <div id="chart"></div>
            </div>
            <div class="panel-footer">
              <p>Click on the particular data links to hide the clicked colored line graph</p>
            </div>
          </div>
          <!-- /panel -->
        </div>
        <!-- /col-md-12 -->

        <div class="col-md-12 panel-parent">
            <!-- panel -->
            <div class="panel knot-panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Simple Line Chart With Time Series
                  <span class="panel-options">
                   <a href="#" class="panel-refresh">
                    <i class="ion ion-refresh"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                    <i class="ion ion-chevron-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                    <i class="ion ion-close"></i> 
                  </a>
                </span>
              </h3>
            </div>
            <div class="panel-body">
              <div id="chart1"></div>
            </div>
            <div class="panel-footer">
              <p>Click on the particular data links to hide the clicked colored line graph</p>
            </div>
          </div>
          <!-- /panel -->
        </div>
        <!-- /col-md-12 -->

        <div class="col-md-12 panel-parent">
            <!-- panel -->
            <div class="panel knot-panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                 XY Line Chart
                  <span class="panel-options">
                   <a href="#" class="panel-refresh">
                    <i class="ion ion-refresh"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                    <i class="ion ion-chevron-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                    <i class="ion ion-close"></i> 
                  </a>
                </span>
              </h3>
            </div>
            <div class="panel-body">
              <div id="chart2"></div>
            </div>
            <div class="panel-footer">
              <p>Click on the particular data links to hide the clicked colored line graph</p>
            </div>
          </div>
          <!-- /panel -->
        </div>
        <!-- /col-md-12 -->

        <div class="col-md-12 panel-parent">
            <!-- panel -->
            <div class="panel knot-panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                  Spline Chart
                  <span class="panel-options">
                   <a href="#" class="panel-refresh">
                    <i class="ion ion-refresh"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                    <i class="ion ion-chevron-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                    <i class="ion ion-close"></i> 
                  </a>
                </span>
              </h3>
            </div>
            <div class="panel-body">
              <div id="chart3"></div>
            </div>
            <div class="panel-footer">
              <p>Click on the particular data links to hide the clicked colored line graph</p>
            </div>
          </div>
          <!-- /panel -->
        </div>
        <!-- /col-md-12 -->

        <div class="col-md-12 panel-parent">
            <!-- panel -->
            <div class="panel knot-panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                 Line Chart With Regions
                  <span class="panel-options">
                   <a href="#" class="panel-refresh">
                    <i class="ion ion-refresh"></i> 
                  </a>
                  <a href="#" class="panel-minimize">
                    <i class="ion ion-chevron-up"></i> 
                  </a>
                  <a href="#" class="panel-close">
                    <i class="ion ion-close"></i> 
                  </a>
                </span>
              </h3>
            </div>
            <div class="panel-body">
              <div id="chart4"></div>
            </div>
            <div class="panel-footer">
              <p>Click on the particular data links to hide the clicked colored line graph</p>
            </div>
          </div>
          <!-- /panel -->
        </div>
        <!-- /col-md-12 -->
            
      </div>
      <!-- /row -->

@endsection

@section('scripts')

	<script src="{!! url('assets/js/c3-charts/c3.min.js') !!}"></script>
    <script src="{!! url('assets/js/c3-charts/d3.v3.min.js') !!}"></script>
    <script src="{!! url('assets/js/c3-charts/line-area-charts.js') !!}"></script>


@endsection