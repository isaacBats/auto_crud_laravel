@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Tooltips &amp; Popovers</div>
			<p class="block">
				Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.
				Popovers add small overlays of content, like those on the iPad, to any element for housing secondary information
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-comments page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Basic Tooltips</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Colored Tooltips</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Basic Popovers</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Colored Popovers</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->           

<div class="row">
	<div class="col-md-offset-3 col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tooltips
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
			<div class="panel-body tooltips">
				<div class="paneltype-heading">Default Tooltips</div>
				<a href="#" class="btn btn-default btn-block" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a>
				<br>
				<a href="#" class="btn btn-default btn-block" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a>
				<br>
				<a href="#" class="btn btn-default btn-block" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a>
				<br>
				<a href="#" class="btn btn-default btn-block" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a>
				<div class="paneltype-heading">Colored Tooltips</div>
				<a href="#" class="btn btn-default btn-block primary-tooltip" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a>
				<br>
				<a href="#" class="btn btn-default btn-block red-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</a>
				<br>
				<a href="#" class="btn btn-default btn-block orange-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a>
				<br>
				<a href="#" class="btn btn-default btn-block green-tooltip" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">
	<div class="col-md-offset-3 col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Popovers
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
				<div class="paneltype-heading">Default Pop Overs</div>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
					Popover on left
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
					Popover on top
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
					Popover on bottom
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
					Popover on right
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="click" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
					Popover on click
				</button>
				<div class="paneltype-heading">Pop Overs With Colored Heading</div>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Twitter Bootstrap Popover">
					Popover on left
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Twitter Bootstrap Popover">
					Popover on top
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Twitter Bootstrap Popover">
					Popover on bottom
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Twitter Bootstrap Popover">
					Popover on right
				</button>
				<br>
				<button type="button" class="btn btn-default btn-block" data-container="body" data-toggle="popover" data-trigger="click" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Twitter Bootstrap Popover">
					Popover on click
				</button>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

@endsection

@section('scripts')

<script src="{!! url('assets/js/tooltip-custom.min.js') !!}"></script>

@endsection