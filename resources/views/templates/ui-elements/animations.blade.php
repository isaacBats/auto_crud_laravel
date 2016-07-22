@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Animations</div>
			<p class="block">
				Animate your page using simple code without any JQuery plugin
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-paw page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Fadings</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Bounces</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Flippers</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Seekers</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->    

<div class="row">
	<div class="col-md-2 col-md-offset-5">
		<!--*** Animate Me  ***-->
		<div id="animateTest">
			<a href="" class="btn btn-primary btn-animate btn-lg"> Animate me!! </a>    
		</div>
		<!--*** Animate Me  ***-->
	</div>
</div>

<div class="row">
	<div class="col-md-5 panel-parent">
		<!-- Flippers panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Flippers
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test="flip">Flip</a>
					<a class="list-group-item" data-test='flipInX'>Flip In X</a>
					<a class="list-group-item" data-test='flipOutX'>Flip Out X</a>
					<a class="list-group-item" data-test='flipInY'>Flip In Y</a>
					<a class="list-group-item" data-test='flipOutY'>Flip Out Y</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->

	<div class="col-md-2"></div>

	<div class="col-md-5 panel-parent">
		<!-- Attention Seekers panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Attention Seekers
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test="flash">Flash</a>
					<a class="list-group-item" data-test='bounce'>Bounce</a>
					<a class="list-group-item" data-test='shake'>Shake</a>
					<a class="list-group-item" data-test='tada'>Tada</a>
					<a class="list-group-item" data-test='swing'>Swing</a>
					<a class="list-group-item" data-test='wobble'>Wobble</a>
					<a class="list-group-item" data-test='pulse'>Pulse</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->
</div>
<!-- /row -->

<div class="row">
	<div class="col-md-5 panel-parent">
		<!-- Fadding Entrances panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Fadding Entrances
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
				<div class="list-group animate-list">
					<a class="list-group-item " data-test="fadeIn">Fade In</a>
					<a class="list-group-item " data-test='fadeInUp'>Fade In Up</a>
					<a class="list-group-item " data-test='fadeInDown'>Fade In Down</a>
					<a class="list-group-item " data-test='fadeInLeft'>Fade In Left</a>
					<a class="list-group-item " data-test='fadeInRight'>Fade In Right</a>
					<a class="list-group-item " data-test='fadeInUpBig'>Fade In Up Big</a>
					<a class="list-group-item " data-test='fadeInDownBig'>Fade In Down Big</a>
					<a class="list-group-item " data-test='fadeInLeftBig'>Fade In Left Big</a>
					<a class="list-group-item " data-test='fadeInRightBig'>Fade In Right Big</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->

	<div class="col-md-2"></div>

	<div class="col-md-5 panel-parent">
		<!-- Fading Exits panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Fading Exits
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
				<div class="list-group animate-list">
					<a class="list-group-item " data-test="fadeOut">Fade Out</a>
					<a class="list-group-item " data-test='fadeOutUp'>Fade Out Up</a>
					<a class="list-group-item " data-test='fadeOutDown'>Fade Out Down</a>
					<a class="list-group-item " data-test='fadeOutLeft'>Fade Out Left</a>
					<a class="list-group-item " data-test='fadeOutRight'>Fade Out Right</a>
					<a class="list-group-item " data-test='fadeOutUpBig'>Fade Out Up Big</a>
					<a class="list-group-item " data-test='fadeOutDownBig'>Fade Out Down Big</a>
					<a class="list-group-item " data-test='fadeOutLeftBig'>Fade Out Left Big</a>
					<a class="list-group-item " data-test='fadeOutRightBig'>Fade Out Right Big</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->
</div>
<!-- /row -->

<div class="row">
	<div class="col-md-5 panel-parent">
		<!-- Sliders panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Sliders
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='slideInDown'>Slide In Down</a>
					<a class="list-group-item" data-test='slideInLeft'>Slide In Left</a>
					<a class="list-group-item" data-test='slideInRight'>Slide In Right</a>
					<a class="list-group-item" data-test='slideOutUp'>Slide Out Up</a>
					<a class="list-group-item" data-test='slideOutLeft'>Slide Out Left</a>
					<a class="list-group-item" data-test='slideOutRight'>Slide Out Right</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->

	<div class="col-md-2"></div>

	<div class="col-md-5 panel-parent">
		<!-- Light Speed Specials panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Light Speed Specials
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='lightSpeedIn'>LightSpeed In</a>
					<a class="list-group-item" data-test='lightSpeedOut'>LightSpeed Out</a>
					<a class="list-group-item" data-test='hinge'>Hinge</a>
					<a class="list-group-item" data-test='rollIn'>Roll In</a>
					<a class="list-group-item" data-test='rollOut'>Roll Out</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->
</div>
<!-- /row -->

<div class="row">
	<div class="col-md-5 panel-parent">
		<!--Bouncing Entrances panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Bouncing Entrances
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='bounceIn'>Bounce In</a>
					<a class="list-group-item" data-test='bounceInDown'>Bounce In Down</a>
					<a class="list-group-item" data-test='bounceInUp'>Bounce In Up</a>
					<a class="list-group-item" data-test='bounceInLeft'>Bounce In Left</a>
					<a class="list-group-item" data-test='bounceInRight'>Bounce In Right</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->

	<div class="col-md-2"></div>

	<div class="col-md-5 panel-parent">
		<!--Bouncing Exits panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Bouncing Exits
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='bounceOut'>Bounce Out</a>
					<a class="list-group-item" data-test='bounceOutDown'>Bounce Out Down</a>
					<a class="list-group-item" data-test='bounceOutUp'>Bounce Out Up</a>
					<a class="list-group-item" data-test='bounceOutLeft'>Bounce Out Left</a>
					<a class="list-group-item" data-test='bounceOutRight'>Bounce Out Right</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->
</div>
<!-- /row -->

<div class="row">
	<div class="col-md-5 panel-parent">
		<!--Rotating Entrances panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Rotating Entrances
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='rotateIn'>Rotate In</a>
					<a class="list-group-item" data-test='rotateInDownLeft'>Rotate In Down Left</a>
					<a class="list-group-item" data-test='rotateInDownRight'>Rotate In Down Right</a>
					<a class="list-group-item" data-test='rotateInUpLeft'>Rotate In Up Left</a>
					<a class="list-group-item" data-test='rotateInUpRight'>Rotate In Up Right</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->

	<div class="col-md-2"></div>

	<div class="col-md-5 panel-parent">
		<!--Rotating Exits panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Rotating Exits
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
				<div class="list-group animate-list">
					<a class="list-group-item" data-test='rotateOut'>Rotate Out</a>
					<a class="list-group-item" data-test='rotateOutDownLeft'>Rotate Out Down Left</a>
					<a class="list-group-item" data-test='rotateOutDownRight'>Rotate Out Down Right</a>
					<a class="list-group-item" data-test='rotateOutUpLeft'>Rotate Out Up Left</a>
					<a class="list-group-item" data-test='rotateOutUpRight'>Rotate Out Up Right</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-5 -->
</div>
<!-- /row -->	

@endsection

@section('scripts')

<script src="{!! url('assets/js/knot-animations.min.js')!!}"></script>

@endsection