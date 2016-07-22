@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Basic Tables</div>
			<p class="block">
				Represent the information within Bootstrap tables to make it more understandable and convinient
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-widgetized page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Stripped</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Bordered</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Condensed</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Responsive</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->     
<div class="col-md-6 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Basic tables
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
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
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
				Striped Tables
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
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
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
				Hover table
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
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
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
				Bordered table
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
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
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
				Condensed Table
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
			<table class="table table-condesed">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
				</tbody>
			</table>
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
				Contextual Table
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
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<th scope="row">1</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="success">
						<th scope="row">3</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="info">
						<th scope="row">5</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="warning">
						<th scope="row">7</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="danger">
						<th scope="row">9</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-6 -->

<div class="col-md-12 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Contextual Table
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
		<div class="panel-body table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
						<th>Column heading</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<th scope="row">1</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="success">
						<th scope="row">3</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="info">
						<th scope="row">5</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="warning">
						<th scope="row">7</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
					<tr class="danger">
						<th scope="row">9</th>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
						<td>Column content</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-6 -->

@endsection

@section('scripts')



@endsection