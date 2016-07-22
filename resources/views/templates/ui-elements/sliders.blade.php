@extends('layouts.app')

@section('styles')
<link rel='stylesheet' href="{!! url('assets/css/range-slider/ion.rangeSlider.css') !!}">
<link rel='stylesheet' href="{!! url('assets/css/range-slider/ion.rangeSlider.skinFlat.css') !!}">
@endsection

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Sliders</div>
			<p class="block">
				Sliders can be horizontal or vertical and has a single handle that can be moved with the mouse or by using the arrow keys.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-panel page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Pricing</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Min to Max</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Advanced</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
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
					Range Sliders
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
				<table class="table table-condensed table-sliders">
					<tbody>
						<tr class="default">
							<td class="col-md-2 col-sm-3 col-xs-5">Simple Start</td>
							<td>
								<input type="text" id="range_01" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Min and Max Values</td>
							<td>
								<input type="text" id="range_02" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Type double and prefix $</td>
							<td>
								<input type="text" id="range_03" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Negative Values</td>
							<td>
								<input type="text" id="range_04" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Fractional Values</td>
							<td>
								<input type="text" id="range_05" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Custom Values</td>
							<td>
								<input type="text" id="range_06" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Months Slider</td>
							<td>
								<input type="text" id="range_07" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Big Values Representation</td>
							<td>
								<input type="text" id="range_08" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Price Slider</td>
							<td>
								<input type="text" id="range_09" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">Custom Prefix</td>
							<td>
								<input type="text" id="range_10" name="example_name" value="" />
							</td>
						</tr>
						<tr class="all">
							<td class="col-md-2 col-sm-3 col-xs-5">From and To values</td>
							<td>
								<input type="text" id="range_11" name="example_name" value="" />
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-12 -->
</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/range-slider/ion.rangeSlider.min.js') !!}"></script>
<script src="{!! url('assets/js/range-slider/custom.min.js') !!}"></script>

@endsection