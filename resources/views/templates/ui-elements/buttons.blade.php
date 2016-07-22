@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Buttons</div>
			<p class="block">
				Bootstrap buttons gives a clean and neat look to the page. 
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
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Buttons Groups</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Iconic Buttons</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Button Dropdowns</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Rounded Buttons</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->      
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Buttons
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
			<p>Use any of the available button classes to quickly create a styled button.</p>          
			<button class="btn btn-primary">Primary</button>                                    
			<button class="btn btn-success">Success</button>
			<button class="btn btn-info">Info</button>
			<button class="btn btn-warning">Warning</button>
			<button class="btn btn-danger">Danger</button>                        
			<button class="btn btn-grey">grey</button>
			<button class="btn btn-default">Default</button>          
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->   

<!-- *** Radius Buttons Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Radius Buttons
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
			<p>Create small rounded corners to the buttons by adding <code>.btn-radius</code> to <code>.btn</code> .</p>                  
			<button class="btn btn-radius btn-primary">Primary</button>                                    
			<button class="btn btn-radius btn-success">Success</button>
			<button class="btn btn-radius btn-info">Info</button>
			<button class="btn btn-radius btn-warning">Warning</button>
			<button class="btn btn-radius btn-danger">Danger</button>                      
			<button class="btn btn-radius btn-grey">grey</button>
			<button class="btn btn-radius btn-default">Default</button>          
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->   

<!-- *** Rounded Buttons Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Rounded Buttons
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
			<p>Create rounded buttons by adding <code>.btn-rounded</code> to the <code>.btn</code>.</p>
			<button class="btn btn-rounded btn-primary">Primary</button>                                            
			<button class="btn btn-rounded btn-success">Success</button>
			<button class="btn btn-rounded btn-info">Info</button>
			<button class="btn btn-rounded btn-warning">Warning</button>
			<button class="btn btn-rounded btn-danger">Danger</button>                    
			<button class="btn btn-rounded btn-grey">grey</button>
			<button class="btn btn-rounded btn-default">Default</button>                  
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->   

<!-- *** Disabled Buttons Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Disabled Buttons
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
			<p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
			<button class="btn btn-rounded btn-primary" disabled="disabled">Primary</button>                                            
			<button class="btn btn-rounded btn-success" disabled="disabled">Success</button>
			<button class="btn btn-rounded btn-info" disabled="disabled">Info</button>
			<button class="btn btn-rounded btn-warning" disabled="disabled">Warning</button>
			<button class="btn btn-rounded btn-danger" disabled="disabled">Danger</button>                  
			<button class="btn btn-rounded btn-grey" disabled="disabled">grey</button>
			<button class="btn btn-rounded btn-default" disabled="disabled">Default</button>                  
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->   

<!-- *** Block Buttons Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Block Buttons
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
			<p>Create block level buttons—those that span the full width of a parent— by adding <code>.btn-block</code>.</p>          
			<button type="button" class="btn btn-primary btn-lg btn-block">Large button</button>        
			<button type="button" class="btn btn-danger btn-sm btn-block">Small button</button>        
			<button type="button" class="btn btn-success btn-xs btn-block">Extra Small button</button>        
			<button type="button" class="btn btn-info  btn-block">Default button</button>        
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->   

<!-- *** Button Sizes Panel *** -->
<div class="col-md-6 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Button Sizes
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
			<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
			<p>
				<button type="button" class="btn btn-primary btn-lg">Large button</button>
				<button type="button" class="btn btn-default btn-lg">Large button</button>
			</p>
			<p>
				<button type="button" class="btn btn-primary">Default button</button>
				<button type="button" class="btn btn-default">Default button</button>
			</p>
			<p>
				<button type="button" class="btn btn-primary btn-sm">Small button</button>
				<button type="button" class="btn btn-default btn-sm">Small button</button>
			</p>
			<p>
				<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
				<button type="button" class="btn btn-default btn-xs">Extra small button</button>
			</p>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->  

<!-- *** Loading Button Effect Panel *** -->
<div class="col-md-12 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Loading Button Effects
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
			<p>Fancy loading buttons with effects</p>
			
			<p>
				<button class="btn btn-lg btn-primary btn-progress">Button</button>
				<button class="btn btn-lg btn-info btn-progress">Button</button>
				<button class="btn btn-lg btn-warning btn-progress">Button</button>
				<button class="btn btn-lg btn-danger btn-progress">Button</button>  
			</p>
			
			<p>
				<button class="btn btn-progress btn-lg btn-primary">Button</button>
				<button class="btn btn-progress btn-info">Button</button>
				<button class="btn btn-progress btn-sm btn-warning">Button</button>
				<button class="btn btn-progress btn-xs btn-danger">Button</button>  
			</p>
			
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-6 -->      

<!-- *** Button Dropdowns Panel *** -->
<div class="col-md-12 panel-parent">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Button Dropdowns
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
			<p>Turn a button into a dropdown toggle with some basic markup changes.</p>
			<div class="" data-example-id="single-button-dropdown">
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Primary <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Success <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Info <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Warning <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Danger <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
			</div>
			<br><br>

			<p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
			<div class="" data-example-id="split-button-dropdown">
				<div class="btn-group">
					<button type="button" class="btn btn-default">Default</button>
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-primary">Primary</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-success">Success</button>
					<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-info">Info</button>
					<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group">
					<button type="button" class="btn btn-warning">Warning</button>
					<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
				<div class="btn-group open">
					<button type="button" class="btn btn-danger">Danger</button>
					<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
						<span class="caret"></span>
						<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div><!-- /btn-group -->
			</div>
			<br><br>

			<p>Button dropdowns work with buttons of all sizes.</p>
			<div class="" data-example-id="button-dropdown-sizing">
				<div class="btn-toolbar" role="toolbar">
					<div class="btn-group">
						<button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Large button <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div><!-- /btn-toolbar -->
				<div class="btn-toolbar" role="toolbar">
					<div class="btn-group">
						<button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Small button <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div><!-- /btn-toolbar -->
				<div class="btn-toolbar" role="toolbar">
					<div class="btn-group">
						<button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
							Extra small button <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div><!-- /btn-toolbar -->
			</div>
			<br><br>

			<p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>
			<div class="" data-example-id="button-dropdown-dropup">
				<div class="btn-toolbar" role="toolbar">
					<div class="btn-group dropup">
						<button type="button" class="btn btn-default">Dropup</button>
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
					<div class="btn-group dropup">
						<button type="button" class="btn btn-primary">Right dropup</button>
						<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div>
			</div>

		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-12 -->      

<!-- *** Button Groups Panel *** -->
<div class="col-md-12 panel-parent text-center">
	<!-- panel -->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Button groups
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
			<p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>  
			<div class="btn-group" role="group" aria-label="...">
				<button type="button" class="btn btn-default">Left</button>
				<button type="button" class="btn btn-default">Middle</button>
				<button type="button" class="btn btn-default">Right</button>
			</div>                
			<br><br>
			<p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
			<div class="btn-group" role="group" aria-label="First group">
				<button type="button" class="btn btn-default">1</button>
				<button type="button" class="btn btn-default">2</button>
				<button type="button" class="btn btn-default">3</button>
				<button type="button" class="btn btn-default">4</button>
			</div>
			<br><br>
			<p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including when nesting multiple groups.</p>
			<div class="" data-example-id="button-group-sizing">
				<div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
					<button type="button" class="btn btn-default">Left</button>
					<button type="button" class="btn btn-default">Middle</button>
					<button type="button" class="btn btn-default">Right</button>
				</div>
				<br>
				<div class="btn-group" role="group" aria-label="Default button group">
					<button type="button" class="btn btn-default">Left</button>
					<button type="button" class="btn btn-default">Middle</button>
					<button type="button" class="btn btn-default">Right</button>
				</div>
				<br>
				<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
					<button type="button" class="btn btn-default">Left</button>
					<button type="button" class="btn btn-default">Middle</button>
					<button type="button" class="btn btn-default">Right</button>
				</div>
				<br>
				<div class="btn-group btn-group-xs" role="group" aria-label="Extra-small button group">
					<button type="button" class="btn btn-default">Left</button>
					<button type="button" class="btn btn-default">Middle</button>
					<button type="button" class="btn btn-default">Right</button>
				</div>
			</div>
			<br><br>
			<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
			<div class="" data-example-id="button-group-nesting">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<button type="button" class="btn btn-default">1</button>
					<button type="button" class="btn btn-default">2</button>

					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							Dropdown
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
							<li><a href="#">Dropdown link</a></li>
							<li><a href="#">Dropdown link</a></li>
						</ul>
					</div>
				</div>
			</div>
			<br><br>
			<p>Make a set of buttons appear vertically stacked rather than horizontally. <strong class="text-danger">Split button dropdowns are not supported here.</strong></p>
			<div class="" data-example-id="vertical-button-group">
				<div class="btn-group-vertical" role="group" aria-label="Vertical button group">
					<button type="button" class="btn btn-default">First</button>
					<button type="button" class="btn btn-default">Middle</button>
					<div class="btn-group" role="group">
						<button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							Last
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
							<li><a href="#">Dropdown link</a></li>
							<li><a href="#">Dropdown link</a></li>
						</ul>
					</div>          
				</div>
			</div>

			<br><br>
			<p>Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>

			<div class="" data-example-id="simple-justified-button-group">
				<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
					<a href="#" class="btn btn-default" role="button">Left</a>
					<a href="#" class="btn btn-default" role="button">Middle</a>
					<a href="#" class="btn btn-default" role="button">Right</a>
				</div>
				<br>        
			</div>

			<br><br>
			<p>To use justified button groups with <code>&lt;button&gt;</code> elements, <strong class="text-danger">you must wrap each button in a button group</strong>. Most browsers don't properly apply our CSS for justification to <code>&lt;button&gt;</code> elements, but since we support button dropdowns, we can work around that.</p>
			<div class="btn-group btn-group-justified" role="group" aria-label="...">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">Left</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">Middle</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default">Right</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- /col-md-12 -->

@endsection

@section('scripts')



@endsection