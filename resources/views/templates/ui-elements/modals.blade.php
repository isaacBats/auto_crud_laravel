@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Modals</div>
			<p class="block">
				Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults..
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-photos-outline page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Responsive</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;In Flexible Sizes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Ajax Functionality</li>
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
					Modals
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
				<!-- *** Default Modal ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Default Modal</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultmodal">
							Default Modal
						</button>
					</div>
				</div>
				<!-- *** /Default Modals ***-->
				<br><br>
				<!-- *** Modal Large ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Modal Large</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#largemodal">
							Modal Large
						</button>
					</div>
				</div>
				<!--*** /Modal Large ***-->
				<br><br>
				<!--*** Modal Full Width ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Modal Full Width</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#fullmodal">
							Modal Full Width
						</button>
					</div>
				</div>
				<!-- *** /Modal Full Width ***-->
				<br><br>
				<!--*** Continue To Close ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Continue To Close</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#continuemodal">
							Continue To Close
						</button>
					</div>
				</div>
				<!--*** /Continue To Close ***-->
				<br><br>
				<!--*** Long Modal ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Long Modal</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#longmodal">
							Long Modal
						</button>
					</div>
				</div>
				<!--*** /Long Modal ***-->
				<br><br>
				<!--*** Responsive Modal ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Responsive Modal</div>
					</div>
					<div class="col-md-3">
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#responsivemodal">
							Responsive Modal
						</button>
					</div>
				</div>
				<!--*** /Responsive Modal ***-->
				<br><br>
				<!--*** Ajax Modal ***-->
				<div class="row">
					<div class="col-md-3">
						<div class="paneltype-heading">Ajax Modal</div>
					</div>
					<div class="col-md-3">
						<a href="{!! url('templates/ui-elements/ajax-modal') !!}" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ajaxmodal">Ajax Modal</a>  
					</div>
				</div>
				<!--*** /Ajax Modal ***-->
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

<!-- Default Modal -->
<div class="modal fade" id="defaultmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel">Default Modal</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Large -->
<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel1">Modal Large</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Full Width -->
<div class="modal fade modal-full-pad" id="fullmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-full">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel2">Modal Full Width</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Continue To Close -->
<div class="modal fade" id="continuemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel3">Continue To Close</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
			</div>
		</div>
	</div>
</div>
<!-- Long Modal -->
<div class="modal fade" id="longmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel4">Long Modal</h4>
			</div>
			<div class="modal-body">
				<div class="long-modal">
					<img src="{!! url('assets/img/longimage.jpg') !!}" alt="longimage">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Responsive Modal -->
<div class="modal fade" id="responsivemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel5">Responsive Modal</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
					<div class="col-md-6">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-3">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
					<div class="col-md-3">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
					<div class="col-md-3">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
					<div class="col-md-3">
						<div class="responsive-bottom">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar, ante faucibus facilisis convallis, sem nibh tempus nibh, non tristique est nunc ut erat. Curabitur eget lorem ornare, elementum enim a, ultricies odio.
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- Ajax Modal -->
<div class="modal fade" id="ajaxmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="ti-close"></span></button>
				<h4 class="modal-title" id="myModalLabel6">Ajax Modal</h4>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')



@endsection