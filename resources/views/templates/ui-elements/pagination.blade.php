@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Pagination</div>
			<p class="block">
				Provide pagination links for your site or app with the multi-page pagination component which is available in different sizes and colors.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="fa fa-sort-numeric-asc page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple Pagination</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Sizes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Different States</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Pager</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Aligned Links</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="row">        
	<!-- *** Pagination *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Pagination
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
				<div class="paneltype-heading">Default Pagination</div>
				<ul class="pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<!-- *** Normal Pagination *** -->
				<div class="paneltype-heading">Normal Pagination</div>
				<ul class="pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<!-- *** Sizes Pagination *** -->
				<div class="paneltype-heading">Sizes Pagination</div>
				<!-- *** Small Pagination *** -->
				<ul class="pagination small-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<br>
				<!-- *** Large Pagination *** -->
				<ul class="pagination large-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!-- ****Rounded Pagination*** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Rounded Pagination
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
				<!-- *** Rounded Default Pagination *** -->
				<div class="paneltype-heading">Default Pagination</div>
				<ul class="pagination rounded-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<!-- *** Rounded Normal Pagination *** -->
				<div class="paneltype-heading">Normal Pagination</div>
				<ul class="pagination rounded-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<!-- *** Rounded Sizes Pagination *** -->
				<div class="paneltype-heading">Sizes Pagination</div>
				<!-- *** Rounded Small Pagination *** -->
				<ul class="pagination small-pagination rounded-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
				<br>
				<!-- *** Rounded Large Pagination *** -->
				<ul class="pagination large-pagination rounded-pagination">
					<li><a href="#"><i class="ion ion-ios-arrow-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="disabled"><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#"><i class="ion ion-ios-arrow-right"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">        
	<!-- *** Pagers Aligned To Center *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Pagers Aligned To Center
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
				<!-- *** Centered Default Pager *** -->
				<div class="paneltype-heading">Default Pager</div>
				<ul class="pager">
					<li>
						<a href="#">
							<i class="ti-angle-double-left"></i> 
							Previous
						</a>
					</li>
					<li>
						<a href="#">
							Next 
							<i class="ti-angle-double-right"></i>
						</a>
					</li>
				</ul>
				<!-- *** Centered Disabled Pager *** -->
				<div class="paneltype-heading">Disabled Pager</div>
				<ul class="pager">
					<li class="disabled">
						<a href="#">
							<i class="ti-angle-double-left"></i> 
							Previous
						</a>
					</li>
					<li class="disabled">
						<a href="#">
							Next 
							<i class="ti-angle-double-right"></i>
						</a>
					</li>
				</ul>
				<!-- *** Centered Pager Rounded *** -->
				<div class="paneltype-heading">Pager Rounded</div>
				<ul class="pager rounded-pager">
					<li>
						<a href="#">
							<i class="ti-angle-double-left"></i> 
							Previous
						</a>
					</li>
					<li>
						<a href="#">
							Next 
							<i class="ti-angle-double-right"></i>
						</a>
					</li>
				</ul> 
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!-- *** Pagers Aligned To Edges *** -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Pagers Aligned To Edges
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
				<!-- *** Edged Default Pager *** -->
				<div class="paneltype-heading">Default Pager</div>
				<ul class="pager">
					<li class="previous"><a href="#"><i class="ion ion-android-arrow-back"></i> Older</a></li>
					<li class="next"><a href="#">Newer <i class="ion ion-android-arrow-forward"></i></a></li>
				</ul>
				<!-- *** Edged Disabled Pager *** -->
				<div class="paneltype-heading">Disabled Pager</div>
				<ul class="pager">
					<li class="previous disabled"><a href="#"><i class="ion ion-android-arrow-back"></i> Older</a></li>
					<li class="next disabled"><a href="#">Newer <i class="ion ion-android-arrow-forward"></i></a></li>
				</ul>
				<!-- *** Edged Pager Rounded *** -->
				<div class="paneltype-heading">Pager Rounded</div>
				<ul class="pager rounded-pager">
					<li class="previous"><a href="#"><i class="ion ion-android-arrow-back"></i> Older</a></li>
					<li class="next"><a href="#">Newer <i class="ion ion-android-arrow-forward"></i></a></li>
				</ul>   
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">
	<!-- *** Date Paginator *** -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Date Paginator
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
				<div id="paginator"></div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->

@endsection

@section('scripts')

<script src="{!! url('assets/js/date-paginator/moment.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! url('assets/js/date-paginator/bootstrap-datepaginator.min.js') !!}"></script>
<script type='text/javascript'>
	$('#paginator').datepaginator();
</script>	

@endsection