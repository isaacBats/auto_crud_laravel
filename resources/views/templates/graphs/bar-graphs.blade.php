@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/c3.css') !!}" rel="stylesheet">
@endsection

@section('content')

<!-- Page Header -->
<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Bar Graphs</div>
			<p class="block">
				A truly incredible and flexible resource for teaching both vertical and horizontal bar charts
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-bar-chart page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple Graph</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Stacked Graph</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Ordered Graph</li>

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
					Simple Bar Chart
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
				<div id="chart11"></div>
			</div>
			<div class="panel-footer">
				<p>Click on particular data links to hide the clicked colored line graph</p>
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
					Stacked Bar Chart
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
				<div id="chart13"></div>
			</div>
			<div class="panel-footer">
				<p>Click on particular data links to hide the clicked colored line graph</p>
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
					Data Order Bar Chart
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
				<div id="chart12"></div>
			</div>
			<div class="panel-footer">
				<p>Click on particular data links to hide the clicked colored line graph</p>
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
<script src="{!! url('assets/js/c3-charts/bar-other-charts.js') !!}"></script>`

@endsection
