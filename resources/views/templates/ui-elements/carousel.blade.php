@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/jssor.css') !!}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Carousel</div>
			<p class="block">
				Image Representation is more impressive than text content, so carousel plays a vital role mostly as a header
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-images page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Bootstrap Carousel</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple Slider</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Different Variations</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Cool Slide Effects</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->
<div class="row">
	<div class="col-md-6">
		<div class="centered-div">
			<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
				<!-- Loading Screen -->
				<div u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(assets/img/loading.gif) no-repeat center center;
				top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
		</div>
		
		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
		overflow: hidden;">
		<div>
			<a href="#"><img alt="" src="{!! url('assets/img/landscape/01.jpg') !!}" /></a>
			<div t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
				slideshow transition twins
			</div>
		</div>
		<div>
			<a href="#"><img alt="" src="{!! url('assets/img/landscape/02.jpg') !!}" /></a>
			<div t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
				random caption transition
			</div>
		</div>
		<div>
			<a href="#"><img alt="" src="{!! url('assets/img/landscape/03.jpg') !!}" /></a>
			<div t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
				mobile ready, touch swipe
			</div>
		</div>
		<div>
			<a href="#"><img alt="" src="{!! url('assets/img/landscape/04.jpg') !!}" /></a>
			<div t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
				responsive, scale smoothly
			</div>
		</div>
	</div>
	
	<!-- bullet navigator container -->
	<div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
		<!-- bullet navigator item prototype -->
		<div u="prototype"></div>
	</div>
	<!--#endregion Bullet Navigator Skin End -->
	
	<!-- Arrow Left -->
	<span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
	</span>
	<!-- Arrow Right -->
	<span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
	</span>
</div>
<!-- Jssor Slider End -->
</div>
</div>

<div class="col-md-6">
	<div class="centered-div">
		<div id="slider2_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
				background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
			<div style="position: absolute; display: block; background: url(assets/img/loading.gif) no-repeat center center;
			top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
	</div>

	<!-- Slides Container -->
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
	overflow: hidden;">
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/landscape/01.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/landscape/02.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/landscape/03.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/landscape/05.jpg') !!}" /></a>
	</div>
</div>

<!-- bullet navigator container -->
<div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
	<!-- bullet navigator item prototype -->
	<div u="prototype"></div>
</div>
<!--#endregion Bullet Navigator Skin End -->


<!-- Arrow Left -->
<span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
</span>
</div>
<!-- Jssor Slider End -->
</div>
</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-6">
		<div class="centered-div">
			<div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">

				<!-- Loading Screen -->
				<div u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
					background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
				</div>
				<div style="position: absolute; display: block; background: url(assets/img/loading.gif) no-repeat center center;
				top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
		</div>

		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
		overflow: hidden;">
		<div>
			<img alt="" src="{!! url('assets/img/landscape/01.jpg') !!}" />
			<div u="thumb">Do you notice it is draggable by mouse/finger?</div>
		</div>
		<div>
			<img alt="" src="{!! url('assets/img/landscape/02.jpg') !!}" />
			<div u="thumb">Did you drag by either horizontal or vertical?</div>
		</div>
		<div>
			<img alt="" src="{!! url('assets/img/landscape/03.jpg') !!}" />
			<div u="thumb">Do you notice navigator responses when drag?</div>
		</div>
		<div>
			<img alt="" src="{!! url('assets/img/landscape/04.jpg') !!}" />
			<div u="thumb">Do you notice arrow responses when click?</div>
		</div>
	</div>
	
	<div u="thumbnavigator" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
		<div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
		background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
	</div>
	<!-- Thumbnail Item Skin Begin -->
	<div u="slides">
		<div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
			<div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
		</div>
	</div>
	<!-- Thumbnail Item Skin End -->
</div>
<!--#endregion ThumbnailNavigator Skin End -->

<!-- bullet navigator container -->
<div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
	<!-- bullet navigator item prototype -->
	<div u="prototype"></div>
</div>
<!--#endregion Bullet Navigator Skin End -->

<!-- Arrow Left -->
<span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
</span>
<!-- Arrow Right -->
<span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
</span>
</div>
</div>
</div>
<div class="col-md-6">
	<div class="centered-div">
		<div id="slider_diff_container" style="position: relative; width: 600px; height: 300px; background-color: #000; overflow: hidden; ">

			<!-- Loading Screen -->
			<div u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
				background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
			<div style="position: absolute; display: block; background: url(assets/img/loading.gif) no-repeat center center;
			top: 0px; left: 0px;width: 100%;height:100%;">
		</div>
	</div>

	<!-- Slides Container -->
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 500px;
	overflow: hidden;">
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/01.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/02.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/03.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/04.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/05.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/06.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/07.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/08.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/09.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/10.jpg') !!}" /></a>
	</div>
	<div>
		<a href="#"><img alt="" src="{!! url('assets/img/paint/11.jpg') !!}" /></a>
	</div>
</div>

<!-- bullet navigator container -->
<div u="navigator" class="jssorb13" style="bottom: 16px; right: 6px;">
	<!-- bullet navigator item prototype -->
	<div u="prototype"></div>
</div>
<!--#endregion Bullet Navigator Skin End -->
</div>
</div>
</div>
</div>	

@endsection

@section('scripts')

<script type="text/javascript" src="{!! url('assets/js/jssor/jssor.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/jssor/jssor.slider.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/jssor/jssor-custom.js') !!}"></script>

@endsection