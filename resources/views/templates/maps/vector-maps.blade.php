@extends('layouts.app')

@section('styles')
	<link href="{!! url('assets/css/jqvmap/jqvmap.css') !!}" media="screen" rel="stylesheet" type="text/css" />
@endsection
@section('content')
	
	<div class="page_header">
            <div class="col-md-4">
              <div class="pull-left">
                  <div class="main-text">Vector Maps</div>
                  <p class="block">
                      Here you can view the basic vector maps which can be easily integrated in the dashboard.
                  </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="text-center">
                <i class="ion-earth page_header_icon"></i>
                
              </div>
            </div>

            <div class="col-md-4">
              <div class="right pull-right">
                  <ul class="right_bar">
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Elegant & Effective</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Customizable</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Easy to use</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
                  </ul>
              </div>
            </div>
        </div>
        <!-- /pageheader --> 
<div class="row grid">

	<!-- Europe Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Europe
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
			<div class="panel-body">
				<div id="vmap_europe" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->

	<!-- USA Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					USA
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
			<div class="panel-body">
				<div id="vmap_usa" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->

	<!-- Germany Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Germany
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
			<div class="panel-body">
				<div id="vmap_germany" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->
</div>
<!-- /row -->

<div class="row grid">

	<!-- Asia continent Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Asia Continent
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
			<div class="panel-body">
				<div id="vmap_asia" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->

	<!-- Australia continent Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Australia Continent
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
			<div class="panel-body">
				<div id="vmap_australia" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->

	<!-- Africa Continent Map -->
	<div class="col-md-4">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Africa Continent
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
			<div class="panel-body">
				<div id="vmap_africa" class="graph graph-size-normal"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-4 -->
</div>
<!-- /row -->

<!-- World Map -->
<div class="row grid">
	<div class="col-md-12">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					World Map
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
			<div class="panel-body">
				<div id="vmap_world" class="graph graph-size-large"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
</div>

@endsection

@section('scripts')

	<script src="{!! url('assets/js/jqvmap/jquery.vmap.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/maps/jquery.vmap.usa.js') !!}" type="text/javascript" charset="utf-8"></script>
	<script src="{!! url('assets/js/jqvmap/maps/jquery.vmap.germany.js') !!}" type="text/javascript" charset="utf-8"></script>
	<script src="{!! url('assets/js/jqvmap/maps/jquery.vmap.europe.js') !!}" type="text/javascript" charset="utf-8"></script>

	<script src="{!! url('assets/js/jqvmap/maps/continents/jquery.vmap.asia.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/maps/continents/jquery.vmap.australia.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/maps/continents/jquery.vmap.africa.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/maps/jquery.vmap.world.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/data/jquery.vmap.sampledata.js') !!}" type="text/javascript"></script>
	<script src="{!! url('assets/js/jqvmap/jqvmap-custom.js') !!}" type="text/javascript"></script>

@endsection
