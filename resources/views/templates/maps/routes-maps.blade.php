@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/maps-custom.css') !!}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Routes Maps</div>
			<p class="block">
				Provides directions, interactive maps and satellite imagery of many countries
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-map-alt page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Basic routes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Travel Routes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Advanced routes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Elevation Routes</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->   
<!-- *** Basic Routes Map *** -->
<!-- panel -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Basic Routes Map
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
		<div id="map_route"></div>
	</div>
	<div class="panel-footer">
		<ul>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;You must define two points (origin and destination), color, opacity and weight of the route in the map.</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;You can also define a TravelMode: driving, bicycling or walking.</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;Default is walking</li>
		</ul>
	</div>
</div>
<!-- /panel -->

<!-- Travel Routes Map -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Travel Routes Map
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
		<div id="travel_map" class="large"></div><br>
		<div class="row" class="text-center">
			<a href="#" class="btn btn-info" id="get_route">Get route</a>
			<a href="#" class="btn btn-warning" id="back">&laquo; Back</a>
			<a href="#" class="btn btn-success" id="forward">Forward &raquo;</a>
		</div>
		<div class="row">
			<ul id="steps">
			</ul>
		</div>
	</div>
	<div class="panel-footer">
		<ul>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;Firstly click on the map at two different points</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;Secondly click the green button "Get route", now click the button "Forward" untill the source marker reaches the destination</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;The route instructions will be created instantly</li>
		</ul>
	</div>
</div>
<!-- /panel -->

<!-- Advanced Routes Map -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Advanced Routes Map
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
		<div id="adv_route_map"></div><br>
		<div class="row">
			<div class="col-md-12">
				<ul id="instructions" class="list-types">
				</ul>	
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<ul>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;You must define an origin, destination and travel mode</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;Default more is walking</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;You can choose the color,opacity and strokeWeight of the route</li>
		</ul>
	</div>
</div>
<!-- /panel -->

<!-- Elevation Map -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Elevation Map
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
		<div id="ele_map"></div><br>
		<div id="chart_div" class="text-center"></div>

	</div>
	<div class="panel-footer">
		<ul>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;You can view the elevation throughout the route</li>
			<li class="list-unstyled"><i class="icon ion-checkmark text-primary"></i>&nbsp;&nbsp;&nbsp;Just move the cursor on the graph and check the elevation</li>
		</ul>
	</div>
</div>
<!-- /panel -->

@endsection

@section('scripts')

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/gmaps.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/routes.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/travel-route.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/advanced-routes.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/elevation-routes.js') !!}"></script>

@endsection
