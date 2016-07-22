@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Dropzone File Upload</div>
			<p class="block">
				Just drag’n’drop a file and you can view the upload with image previews.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-upload page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Dropzone Plugin</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Highly customizable</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Very Lightweight</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Flexible To Use</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->       

<div class="row">
	<div class="col-md-12 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Dropzone File Upload
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
				<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
					<div id="drop" >
						Drop Here
						<br />
						<a>Browse</a>
						<input type="file" name="upl" multiple />
					</div>
					<ul>
						<!-- The file uploads will be shown here -->
					</ul>
				</form>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-12 -->
</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/blueimp/jquery.fileupload.min.js') !!}"></script>
<script src="{!! url('assets/js/blueimp/jquery.iframe-transport.min.js') !!}"></script>
<script src="{!! url('assets/js/dropzone-file-upload/file-uploads-custom.min.js') !!}"></script>
<script src="{!! url('assets/js/dropzone-file-upload/jquery.knob.min.js') !!}"></script>	

@endsection