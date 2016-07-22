@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Alerts</div>
			<p class="block">
				Alerts provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-alert-circled page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Colored</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Neat &amp; Clean</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Dismissible</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Links in alerts</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->     

<!-- *** Dismissible Alerts Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Dismissible alerts
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
			<p>Build on any alert by adding an optional <code>.alert-dismissible</code> and close button. you can try out with your own messages init</p>
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>
			<div class="alert alert-info alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> Better check yourself, you're not looking too good.
			</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->

<!-- *** Alerts Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Alerts
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
			<p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>
			<div class="alert alert-success" role="alert">Well done! You successfully read this important alert message.</div>
			<div class="alert alert-info" role="alert">Heads up! This alert needs your attention, but it's not super important.</div>
			<div class="alert alert-warning" role="alert">Warning! Better check yourself, you're not looking too good.</div>
			<div class="alert alert-danger" role="alert">Oh snap! Change a few things up and try submitting again.</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->      

<!-- *** Alerts With Links Panel *** -->
<div class="col-md-12 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Alerts with links
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
			<p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
			<div class="bs-example" data-example-id="alerts-with-links">
				<div class="alert alert-success" role="alert">
					<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
				</div>
				<div class="alert alert-info" role="alert">
					<strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
				</div>
				<div class="alert alert-warning" role="alert">
					<strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
				</div>
				<div class="alert alert-danger" role="alert">
					<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
				</div>
			</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->      

<!-- *** Alerts With Buttons Panel *** -->
<div class="col-md-12 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Alerts With Buttons
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
			<div class="row">
				<div class="col-md-6">
					<!-- Alert Info -->
					<div class="alert alert-info alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h3>Information Label</h3>
						<p>An error message is information displayed when an <a class="alert-link" href="#fakelink">unexpected condition occurs</a></p><br>
						<a href="#fakelink" class="btn btn-info btn-wide">Turn it off now</a>
						<a href="#fakelink" class="btn btn-primary btn-wide">It’s ok</a>
					</div>
					<div class="alert alert-danger alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h3>Error: The change you wanted was rejected.</h3>
						<p>An error message is information displayed when an <a class="alert-link" href="#fakelink">unexpected condition occurs</a>, usually on a computer or other device.</p><br>
						<a href="#fakelink" class="btn btn-danger btn-wide">Turn it off now</a>
						<a href="#fakelink" class="btn btn-warning btn-wide">It’s ok</a>
					</div>
				</div><!-- /col-md-6 -->
				<div class="col-md-6">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h3>Disc Space was extended twice.</h3>
						<p>An error message is information displayed when an <a class="alert-link" href="#fakelink">unexpected condition occurs</a>, usually on a computer or other device.</p><br>
						<a href="#fakelink" class="btn btn-primary btn-wide"><i class="fa fa-check"></i> Hurray!</a>
						<a href="#fakelink" class="btn btn-info btn-wide">Share on twitter</a>
					</div>
					<div class="alert alert-warning alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h3>Hey Warning, Some problems on our servers.</h3>
						<p>An error message is information displayed when an <a class="alert-link" href="#fakelink">unexpected condition occurs</a>, usually on a computer or other device.</p><>
						<a href="#fakelink" class="btn btn-warning btn-wide">Fix it</a>
						<a href="#fakelink" class="btn btn-success btn-wide">Okey, no probs!</a>
					</div>
				</div><!-- /col-md-6 -->
			</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->  

@endsection

@section('scripts')



@endsection