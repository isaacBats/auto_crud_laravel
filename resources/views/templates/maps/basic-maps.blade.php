@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/maps-custom.css') !!}" rel="stylesheet" type="text/css" media="all"/>
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Basic Maps</div>
			<p class="block">
				Here you can view the basic google maps which can be easily integrated in the dashboard.
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
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Basic Maps</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Search Location</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Fusion Maps</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Polygons Maps</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<!-- *** Basic Map *** -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Basic Map
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
		<div id="basic_map"></div>
	</div>
</div>
<!-- /panel -->

<!-- *** Seach Location Map *** -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Search Location Map
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
		<form method="post" id="geocoding_form" class="form form-horizontal">
			<label for="address">Address:</label>
			<div class="input text-center">
				<input type="text" id="address" name="address" class="form-control" /><br>
				<input type="submit" class="btn btn-success" value="Search"/>
			</div>
		</form> <br>
		<div id="geo_location"></div>
	</div>
</div>
<!-- /panel -->

<!-- *** Fusion Tables Map *** -->
<!-- panel -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Fusion Tables Map
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
		<div id="fusion_tables"></div>
	</div>
</div>
<!-- /panel -->

<!-- *** Polygons Map *** -->
<!-- panel -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Polygons Map
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
		<div id="polygons"></div>
	</div>
</div>
<!-- /panel -->

@endsection

@section('scripts')

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/gmaps.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/basic_map.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/geo-location.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/fusion-tables.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/maps/polygons.js') !!}"></script>

@endsection
