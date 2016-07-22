@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Form Input Groups</div>
			<p class="block">
				Input Groups extend form controls by adding text or buttons before, after, or on both sides of any text-based input..
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-layout-cta-btn-left page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Text-boxes with Icons</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Textinputs with buttons</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Buttons dropdowns with Text inputs</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->       

<div class="row"> 

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Sizing
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
				<div class="input-group demo-group input-group-lg">
					<span class="input-group-addon addon-left">@</span>
					<input type="text" class="form-control" placeholder="Large Input Group">
				</div> <br>
				<div class="input-group demo-group input-group-sm">
					<input type="text" class="form-control" placeholder="Small Input Group">
					<span class="input-group-addon addon-right">.00</span>
				</div> <br>
				<div class="input-group demo-group">
					<span class="input-group-addon addon-left">$</span>
					<input type="text" class="form-control" placeholder="Default Input Group">
					<span class="input-group-addon addon-right">.00</span>
				</div> <br>            
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->           

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Basic Input Groups
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
				<div class="input-group demo-group">
					<span class="input-group-addon addon-left">@</span>
					<input type="text" class="form-control" placeholder="Username">
				</div> <br>
				<div class="input-group demo-group">
					<input type="text" class="form-control">
					<span class="input-group-addon addon-right">.00</span>
				</div> <br>
				<div class="input-group demo-group">
					<span class="input-group-addon addon-left">$</span>
					<input type="text" class="form-control">
					<span class="input-group-addon addon-right">.00</span>
				</div> <br>              
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->          

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Basic input groups
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
				<div class="row buttons-demo">
					<div class="col-md-12">
						<div class="input-group demo-group">
							<div class="input-group-addon addon-left">
								<div class="checkbox checkbox-inline checkbox-addon checkbox-danger">
									<input type="checkbox" id="inlineCheckbox1" value="option1">
									<label for="inlineCheckbox1"></label>
								</div>
							</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox">
						</div>
					</div>
				</div> <br>
				<div class="row buttons-demo">
					<div class="col-md-12">
						<div class="input-group demo-group">
							<div class="input-group-addon addon-left">
								<div class="radio radio-warning radio-inline radio-addon">
									<input type="radio" id="inlineRadio1" value="option1" name="radioInline">
									<label for="inlineRadio1"></label>
								</div>
							</div>
							<input type="text" class="form-control" aria-label="Text input with radio button">
						</div>
					</div>
				</div>
				<!-- /row --> 
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Button Addons
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
				<div class="col-md-12">
					<div class="input-group demo-group">
						<span class="input-group-btn">
							<button class="btn btn-success btn-lg" type="button">Go!</button>
						</span>
						<input type="text" class="form-control">
					</div><br>
					<div class="input-group demo-group">
						<input type="text" class="form-control">
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">Search!</button>
						</span>
					</div>
				</div>          
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->  

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Buttons With Dropdowns
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
				<div class="row buttons-demo">
					<div class="col-md-12">
						<div class="input-group demo-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-info btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">LogIn <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div><!-- /btn-group -->
							<input type="text" class="form-control">
						</div>
					</div> <!-- / col-md-6 -->
					<div class="col-md-12">
						<div class="input-group demo-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown">LogOut <span class="caret"></span></button>
								<ul class="dropdown-menu pull-right">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div><!-- /btn-group -->
						</div>
					</div> <!-- /col-md-6 -->
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-6 -->  
	</div>

	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Buttons With Dropdowns
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
				<div class="row buttons-demo">
					<div class="col-md-12">
						<div class="input-group demo-group">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default btn-lg">Default</button>
								<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-md-12">
						<div class="input-group demo-group">
							<input type="text" class="form-control">
							<div class="input-group-btn">
								<button type="button" class="btn btn-danger btn-lg">Click</button>
								<button type="button" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>

						</div>
					</div>
					<!-- /col-md-6 -->
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-6 -->  
	</div>
</div>

@endsection

@section('scripts')



@endsection