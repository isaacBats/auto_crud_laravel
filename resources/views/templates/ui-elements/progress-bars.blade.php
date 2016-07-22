@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Progress Bars</div>
			<p class="block">
				Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-pulse-strong page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Animated</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Contextual</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Striped</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Stacked</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="row">
	<!-- ***Basic Progress Bars Panel*** -->
	<div class="col-md-6">
		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Basic example
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
					<p>Default progress bar.</p>
					<div class="progress progress-bar-mini">
						<div class="progress-bar progress-bar-primary three-sec-ease-in-out" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->

		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						With label
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
					<p>Remove the <code>&lt;span&gt;</code> with <code>.sr-only</code> class from within the progress bar to show a visible percentage.</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
							60%
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->
	</div>
	<!-- /col-md-6 -->

	<div class="col-md-6">
		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Themed Progress Bars
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
					<p>Default progress bar.</p>
					<div class="panel-body">
						<div class="progress progress-bar-mini">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete (success)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete</span>
							</div>
						</div>
						<div class="progress progress-bar-mini">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete (danger)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini">
							<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
								<span class="sr-only">100% Complete (basic)</span>
							</div>
						</div>
					</div>
				</div>
				<!-- panel-body -->
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- row -->

<div class="row">
	<!-- ***Basic Progress Bars Panel*** -->
	<div class="col-md-6">
		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Striped
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
					<p>Add <code>.active</code> to <code>.progress-bar-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->

		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Animated
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
					<p>Add <code>.active</code> to <code>.progress-bar-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->
	</div>
	<!-- /col-md-6 -->

	<div class="col-md-6">
		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Progress Bars sized
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
					<p>Default progress bar.</p>
					<div class="panel-body">
						<p>Add <code>.progress-xs</code>,<code>.progress-sm</code>,<code>.progress-md</code>,<code>.progress-lg</code> to <code>.progress</code> to resize the progress bar the way you want</p>
						<div class="progress progress-bar-mini progress-xs">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
								<span class="sr-only">20% Complete (success)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini progress-sm">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
								<span class="sr-only">40% Complete</span>
							</div>
						</div>
						<div class="progress progress-bar-mini progress-md">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								<span class="sr-only">60% Complete (warning)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini progress-lg">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80% Complete (danger)</span>
							</div>
						</div>
						<div class="progress progress-bar-mini">
							<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
								<span class="sr-only">100% Complete (basic)</span>
							</div>
						</div>
					</div>
				</div>
				<!-- panel-body -->
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- row -->

<div class="row">
	<div class="col-md-12">
		<div class="panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Stacked
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
					<p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 35%">
							<span class="sr-only">35% Complete (success)</span>
						</div>
						<div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
							<span class="sr-only">20% Complete (warning)</span>
						</div>
						<div class="progress-bar progress-bar-danger" style="width: 10%">
							<span class="sr-only">10% Complete (danger)</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- /panel-parent-->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

@endsection

@section('scripts')



@endsection