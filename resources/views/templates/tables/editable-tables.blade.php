@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Editable Tables</div>
			<p class="block">
				With editable tables, you can edit information within a table instantly and are more flexible to add or edit or delete any sort of data.
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
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Dynamic Editing</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp; Flexible to use</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;User Friendly</li>
				
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
					Editable Tables
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
				<table id="user" class="table table-bordered table-striped table-hover" style="margin-top:30px;">
					<tbody>
						<tr>         
							<td>Name</td>
							<td><a href="#" id="name" data-type="text" data-pk="1" data-title="Enter name">Bootstrap Guru</a></td>
						</tr>
						<tr>         
							<td>Username</td>
							<td><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">Vijay</a></td>
						</tr>
						<tr>         
							<td>Password</td>
							<td><a href="#" id="password" data-type="password" data-pk="1" data-title="Enter Password" data-value="......"></a></td>
						</tr>
						<tr>         
							<td>Gender</td>
							<td><a href="#" id="gender" data-type="select" data-pk="1" data-title="Select Gender"></a></td>
						</tr>
						<tr>         
							<td>Phone</td>
							<td><a href="#" id="email" data-type="number" data-pk="1" data-title="Enter Phone Number">1234567890</a></td>
						</tr>
						<tr>         
							<td>E-mail</td>
							<td><a href="#" id="email1" data-type="email" data-pk="1" data-title="Enter Email">adc@piluku.com</a></td>
						</tr>
						<tr>         
							<td>Country</td>
							<td><a href="#" id="country" data-type="select" data-pk="1" data-value="ind" data-title="Select country"></a></td>
						</tr>
						<tr>         
							<td>Comments</td>
							<td><a href="#" id="comments" data-type="textarea" data-pk="1">Your Comments Here!</a></td>
						</tr>
						<tr>         
							<td>Gender</td>
							<td><a href="#" id="dob" data-format="dd.mm.yyyy">16.05.1992</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-3 -->
</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/bootstrap-editable.js') !!}"></script>
<script src="{!! url('assets/js/editable-tables.js') !!}"></script>

@endsection