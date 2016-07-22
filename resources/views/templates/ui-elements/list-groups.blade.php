@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">List Groups</div>
			<p class="block">
				List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content..
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-layout-list-thumb page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;List Groups</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Linked Items List</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Contextual Classes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Custom Content List</li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="row">       
	<!-- *** Basic List Group *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Basic List Group
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
				<ul class="list-group">
					<li class="list-group-item">A very small degree of hope is sufficient to cause the birth of love.</li>
					<li class="list-group-item">Be faithful in small things because it is in them that your strength lies.</li>
					<li class="list-group-item">This is one small step for a man, one giant leap for mankind.</li>
					<li class="list-group-item">No act of kindness, no matter how small, is ever wasted.</li>
					<li class="list-group-item">Dream no small dreams for they have no power to move the hearts of men.</li>
					<li class="list-group-item">Little degree of hope is sufficient to cause the birth of love.</li>
				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->

	<!-- *** Badges In List Group *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Badges In List Group
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
				<ul class="list-group">
					<li class="list-group-item">
						<span class="badge bg-info">Good</span>
						A very small degree of hope is sufficient to cause the birth of love.
					</li>
					<li class="list-group-item">
						<span class="badge bg-danger">Great</span>
						Be faithful in small things because it is in them that your strength lies.
					</li>
					<li class="list-group-item">
						<span class="badge bg-warning">Better</span>
						This is one small step for a man, one giant leap for mankind.
					</li>
					<li class="list-group-item">
						<span class="badge bg-primary">Best</span>
						No act of kindness, no matter how small, is ever wasted.
					</li>
					<li class="list-group-item">
						<span class="badge bg-success">Fine</span>
						Dream no small dreams for they have no power to move the hearts of men.
					</li>

				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->
</div>
<!-- /row -->

<div class="row">  
	<!-- *** Linked Items *** -->       
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Linked Items
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
				<div class="list-group demo-list-group">
					<a href="#" class="list-group-item active">
						An active list group linked item
					</a>
					<a href="#" class="list-group-item">List group linked item 2</a>
					<a href="#" class="list-group-item">List group linked item 3</a>
					<a href="#" class="list-group-item">List group linked item 4</a>
					<a href="#" class="list-group-item">List group linked item 5</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->

	<!-- *** Disabled Items *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Disabled Items
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
				<div class="list-group">
					<a href="#" class="list-group-item disabled">
						Cras justo odio
					</a>
					<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
					<a href="#" class="list-group-item">Morbi leo risus</a>
					<a href="#" class="list-group-item">Porta ac consectetur ac</a>
					<a href="#" class="list-group-item">Vestibulum at eros</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->
</div>
<!-- /row -->

<div class="row">       
	<!-- *** Contextual classes *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Contextual classes
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
				<ul class="list-group">
					<li class="list-group-item list-group-item-success">Dapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis in</li>
					<li class="list-group-item list-group-item-info">Cras sit amet nibh liberoCras sit amet nibh liberoCras sit amet nibh liberoCras sit amet nibh liberoCras sit amet nibh liberoDapibus ac facilisis in</li>
					<li class="list-group-item list-group-item-warning">Porta ac consectetur acPorta ac consectetur acPorta ac consectetur acPorta ac consectetur acPorta ac consectetur acDapibus ac facilisis in</li>
					<li class="list-group-item list-group-item-danger">Vestibulum at erosVestibulum at erosVestibulum at erosVestibulum at erosVestibulum at erosDapibus ac facilisis inac consectetur acDapibus ac facilisis in</li>
				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->

	<!-- *** Custom Content *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Custom Content
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
				<div class="list-group demo-list-group">
					<a href="#" class="list-group-item active">
						<h4 class="list-group-item-heading">Cacade Admin Template</h4>
						<p class="list-group-item-text">Cascade is a Flat , Responsive, Admin Dashboard template. It is complete set of modern standards and top notch design. Built on twitter bootstrap 3.0 </p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Piluku Admin Template</h4>
						<p class="list-group-item-text">Piluku is a Flat , Responsive, admin template integrated with Angulat Js. It is complete set of modern standards and top notch design. Built on twitter bootstrap 3.0 </p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Knot Admin Template</h4>
						<p class="list-group-item-text">Knot is a Flat , Responsive, Admin Dashboard template. It is complete set of modern standards and top notch design. Built on twitter bootstrap 3.0 </p>
					</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->
</div>
<!-- /row -->

@endsection

@section('scripts')



@endsection