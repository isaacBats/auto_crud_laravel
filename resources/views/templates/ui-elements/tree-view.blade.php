@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/jqtree.css') !!}" rel="stylesheet">
<link href="{!! url('assets/css/jtree.css') !!}" rel="stylesheet">
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Tree View</div>
			<p class="block">
				The art and technique of arranging the hierarchy
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-flower page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Hierarchy</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Clean Alignment</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Draggable Children</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Custom</li>
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
					Dragable Tree View
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
				<div id="tree1"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tree View
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
				<div class="tree well">
					<ul>
						<li>
							<span class="parent"><i class="fa fa-folder-open"></i> Parent</span> <a href=""></a>
							<ul>
								<li>
									<span class="child"><i class="fa fa-chevron-circle-up"></i> Child</span> <a href=""></a>
									<ul>
										<li>
											<span class="grandchild"><i class="fa fa-file"></i> Grand Child</span> <a href=""></a>
										</li>
									</ul>
								</li>
								<li>
									<span class="child"><i class="fa fa-chevron-circle-up"></i> Child</span> <a href=""></a>
									<ul>
										<li>
											<span class="grandchild"><i class="fa fa-file"></i> Grand Child</span> <a href=""></a>
										</li>
										<li>
											<span class="grandchild"><i class="fa fa-chevron-circle-up"></i> Grand Child</span> <a href=""></a>
											<ul>
												<li>
													<span class="great-grandchild"><i class="fa fa-chevron-circle-up"></i> Great Grand Child</span> <a href=""></a>
													<ul>
														<li>
															<span class="greatgrand-grandchild"><i class="fa fa-file"></i> Great great Grand Child</span> <a href=""></a>
														</li>
														<li>
															<span class="greatgrand-grandchild"><i class="fa fa-file"></i> Great great Grand Child</span> <a href=""></a>
														</li>
													</ul>
												</li>
												<li>
													<span class="great-grandchild"><i class="fa fa-file"></i> Great Grand Child</span> <a href=""></a>
												</li>
												<li>
													<span class="great-grandchild"><i class="fa fa-file"></i> Great Grand Child</span> <a href=""></a>
												</li>
											</ul>
										</li>
										<li>
											<span class="grandchild"><i class="fa fa-file"></i> Grand Child</span> <a href=""></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<span class="parent"><i class="fa fa-folder-open"></i> Parent</span> <a href=""></a>
							<ul>
								<li>
									<span class="child"><i class="fa fa-file"></i> Child</span> <a href=""></a>
								</li>
							</ul>
						</li>
					</ul>
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

<script src="{!! url('assets/js/jqtree/tree.jquery.min.js') !!}"></script>
<script src="{!! url('assets/js/jqtree/example_data.min.js') !!}"></script>
<script src="{!! url('assets/js/tree-view/tree.min.js') !!}"></script>

@endsection