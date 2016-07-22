@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Breadcrumbs</div>
			<p class="block">
				Indicate the current page's location within a navigational hierarchy
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="fa fa-bitcoin page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Breadcrumbs</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Wells</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Jumbotron</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->       

<div class="row">
	<!-- Breadcrumbs Panel -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Breadcrumbs
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
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Category</li>
				</ol>   
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li class="active">Product</li>
				</ol>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li><a href="#">Product</a></li>
					<li class="active">Sub Product</li>
				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

<div class="row">
	<!-- Jumbotron Panel -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Jumbotron
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
				<blockquote>
					<p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
				</blockquote>
				<div class="jumbotron">
					<h1>Hello, world!</h1>
					<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

<div class="row">
	<!-- Wells Panel -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Wells
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
				<blockquote>
					<p>Use the well as a simple effect on an element to give it an inset effect.</p>
				</blockquote>
				<div class="well">Many a small thing has been made large by the right kind of advertising.
				</div>
				<div class="well well-lg">
					Do the difficult things while they are easy and do the great things while they are small. A journey of a thousand miles must begin with a single step.
				</div>
				<div class="well well-sm">
					Do the difficult things while they are easy and do the great things while they are small. A journey of a thousand miles must begin with a single step.
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

@endsection

@section('scripts')



@endsection