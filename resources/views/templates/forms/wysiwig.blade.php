@extends('layouts.app')

@section('styles')
<link rel='stylesheet' href="{!! url('assets/css/jquery.ml-keyboard.css') !!}">	
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">WYSIWIG &amp; Markdown</div>
			<p class="block">
				HTML Editors are very flexible and easily customizable to represent data in more effective way
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-color-wand page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Editor</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Advanced Features</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Virtual Keyboard</li>
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
					WYSIWIG Editor
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
				<form method="post">
					<textarea id="elm1" name="area"></textarea>
				</form>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->

	<div class="col-md-12 panel-parent" style="margin-bottom: 200px;">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Virtual Keyboard
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
				<form method="post">
					<div class="form-group">
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Click Here For Virtual Keyboard">
					</div>
				</form>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->

</div>
<!-- /row -->

@endsection

@section('scripts')

	<script src="{!! url('assets/js/virtual-keyboard/jquery.ml-keyboard.js') !!}"></script>
	<script src="{!! url('assets/js/virtual-keyboard/demo.ml-keyboard.js') !!}"></script>
	<script src="{!! url('assets/js/tinymce/tinymce.min.js') !!}"></script>

@endsection
