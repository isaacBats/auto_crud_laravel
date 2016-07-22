@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/cropper-main.css') !!}" rel="stylesheet">
<link href="{!! url('assets/css/cropper.css') !!}" rel="stylesheet">
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Image Crop</div>
			<p class="block">
				We have implemented the art and technique of cropping an image in various directions and rotating it in any direction you would like to.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="fa fa-crop page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Cropper Plugin</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Zooming</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Cropping</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Resizable</li>
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
					Advanced Image Cropping
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
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<!-- <h3 class="page-header">Demo:</h3> -->
							<div class="img-container">
								<img src="{!! url('assets/images/post1.jpg') !!}" alt="Picture">
							</div>
						</div>
						<div class="col-md-3">
							<!-- <h3 class="page-header">Preview:</h3> -->
							<div class="docs-preview clearfix">
								<div class="img-preview preview-lg"></div>
								<div class="img-preview preview-md"></div>
								<div class="img-preview preview-sm"></div>
								<div class="img-preview preview-xs"></div>
							</div>

							<!-- <h3 class="page-header">Data:</h3> -->
							<div class="docs-data">
								<div class="input-group">
									<label class="input-group-addon" for="dataX">X</label>
									<input class="form-control" id="dataX" type="text" placeholder="x">
									<span class="input-group-addon">px</span>
								</div>
								<div class="input-group">
									<label class="input-group-addon" for="dataY">Y</label>
									<input class="form-control" id="dataY" type="text" placeholder="y">
									<span class="input-group-addon">px</span>
								</div>
								<div class="input-group">
									<label class="input-group-addon" for="dataWidth">Width</label>
									<input class="form-control" id="dataWidth" type="text" placeholder="width">
									<span class="input-group-addon">px</span>
								</div>
								<div class="input-group">
									<label class="input-group-addon" for="dataHeight">Height</label>
									<input class="form-control" id="dataHeight" type="text" placeholder="height">
									<span class="input-group-addon">px</span>
								</div>
								<div class="input-group">
									<label class="input-group-addon" for="dataRotate">Rotate</label>
									<input class="form-control" id="dataRotate" type="text" placeholder="rotate">
									<span class="input-group-addon">deg</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 docs-buttons">
							<!-- <h3 class="page-header">Toolbar:</h3> -->
							<div class="btn-group">
								<button class="btn btn-primary" data-method="setDragMode" data-option="move" type="button" title="Move">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
										<span class="ion-arrow-move"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="setDragMode" data-option="crop" type="button" title="Crop">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
										<span class="ion-crop"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
										<span class="ion-plus-circled"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
										<span class="ion-minus-circled"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="rotate" data-option="-45" type="button" title="Rotate Left">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
										<span class="ion-arrow-return-left"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="rotate" data-option="45" type="button" title="Rotate Right">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
										<span class="ion-arrow-return-right"></span>
									</span>
								</button>
							</div>

							<div class="btn-group">
								<button class="btn btn-primary" data-method="disable" type="button" title="Disable">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
										<span class="ion-locked"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="enable" type="button" title="Enable">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
										<span class="ion-unlocked"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="clear" type="button" title="Clear">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
										<span class="ion-close-round"></span>
									</span>
								</button>
								<button class="btn btn-primary" data-method="reset" type="button" title="Reset">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
										<span class="ion-refresh"></span>
									</span>
								</button>
								<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
									<input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
									<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
										<span class="ion-upload"></span>
									</span>
								</label>
								<button class="btn btn-primary" data-method="destroy" type="button" title="Destroy">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
										<span class="ion-power"></span>
									</span>
								</button>
							</div>

							<div class="btn-group btn-group-crop">
								<button class="btn btn-primary" data-method="getCroppedCanvas" type="button">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
										Get Cropped Canvas
									</span>
								</button>
								<button class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }" type="button">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { &quot;width&quot;: 160, &quot;height&quot;: 90 })">
										160 &times; 90
									</span>
								</button>
								<button class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" type="button">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { &quot;width&quot;: 320, &quot;height&quot;: 180 })">
										320 &times; 180
									</span>
								</button>
							</div>

							<!-- Show the cropped image in modal -->
							<div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
										</div>
										<div class="modal-body"></div>

									</div>
								</div>
							</div>
							<!-- /.modal -->

							<button class="btn btn-primary" data-method="getData" data-option="" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
									Get Data
								</span>
							</button>
							<button class="btn btn-primary" data-method="getImageData" data-option="" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
									Get Image Data
								</span>
							</button>
							<button class="btn btn-primary" data-method="getCanvasData" data-option="" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
									Get Canvas Data
								</span>
							</button>
							<button class="btn btn-primary" data-method="setCanvasData" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
									Set Canvas Data
								</span>
							</button>
							<button class="btn btn-primary" data-method="getCropBoxData" data-option="" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
									Get Crop Box Data
								</span>
							</button>
							<button class="btn btn-primary" data-method="setCropBoxData" data-target="#putData" type="button">
								<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
									Set Crop Box Data
								</span>
							</button>
							<input class="form-control" id="putData" type="text" placeholder="Get data to here or set data with this value">

						</div>
						<!-- /.docs-buttons -->

						<div class="col-md-3 docs-toggles">
							<!-- <h3 class="page-header">Toggles:</h3> -->
							<div class="btn-group btn-group-justified" data-toggle="buttons">
								<label class="btn btn-primary active" data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio">
									<input class="sr-only" id="aspestRatio1" name="aspestRatio" value="1.7777777777777777" type="radio">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 16 / 9)">
										16:9
									</span>
								</label>
								<label class="btn btn-primary" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
									<input class="sr-only" id="aspestRatio2" name="aspestRatio" value="1.3333333333333333" type="radio">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 4 / 3)">
										4:3
									</span>
								</label>
								<label class="btn btn-primary" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
									<input class="sr-only" id="aspestRatio3" name="aspestRatio" value="1" type="radio">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 1 / 1)">
										1:1
									</span>
								</label>
								<label class="btn btn-primary" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
									<input class="sr-only" id="aspestRatio4" name="aspestRatio" value="0.6666666666666666" type="radio">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 2 / 3)">
										2:3
									</span>
								</label>
								<label class="btn btn-primary" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
									<input class="sr-only" id="aspestRatio5" name="aspestRatio" value="NaN" type="radio">
									<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, NaN)">
										Free
									</span>
								</label>
							</div>

							<div class="dropdown dropup docs-options">
								<button class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" type="button" data-toggle="dropdown" aria-expanded="true">
									Toggle Options
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="strict" checked> strict
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="responsive" checked> responsive
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="checkImageOrigin" checked> checkImageOrigin
										</label>
									</li>

									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="modal" checked> modal
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="guides" checked> guides
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="highlight" checked> highlight
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="background" checked> background
										</label>
									</li>

									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="autoCrop" checked> autoCrop
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="dragCrop" checked> dragCrop
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="movable" checked> movable
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="resizable" checked> resizable
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="rotatable" checked> rotatable
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="zoomable" checked> zoomable
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="touchDragZoom" checked> touchDragZoom
										</label>
									</li>
									<li role="presentation">
										<label class="checkbox-inline">
											<input type="checkbox" name="option" value="mouseWheelZoom" checked> mouseWheelZoom
										</label>
									</li>
								</ul>
							</div>
							<!-- /.dropdown -->
						</div>
						<!-- /.docs-toggles -->
					</div>
				</div>
				<!-- Alert -->

			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-3 -->
</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/cropper.js') !!}"></script>
<script src="{!! url('assets/js/cropper-main.js') !!}"></script>

@endsection