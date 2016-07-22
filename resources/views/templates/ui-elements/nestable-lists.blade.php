@extends('layouts.app')

@section('styles')
<link rel='stylesheet' href="{!! url('assets/css/nestable.css') !!}">
<link rel='stylesheet' href="{!! url('assets/css/sortable/ply.css') !!}">
<link rel='stylesheet' href="{!! url('assets/css/sortable/app.css') !!}">
<link rel='stylesheet' href="{!! url('assets/css/sortable/nestable.css') !!}">
@endsection
@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Nestable Lists</div>
			<p class="block">
				An awesome variety of variations are represented here for your convinience.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-list page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Add Items</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Draggable Lists</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Nestable Lists</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Multi Groups</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Advanced Groups</li>
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
					Nestable Lists
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
				<!-- <menu id="nestable-menu">
					<button type="button" class="btn btn-success" data-action="expand-all.html">Expand All</button>
					<button type="button" class="btn btn-success" data-action="collapse-all.html">Collapse All</button>
				</menu> -->
				<div class="row">
					<!-- ***** Nestbale default Part ***** -->
					<div class="col-md-4">
						<h4> Nestable Default</h4>
						<hr>
						<div class="dd">
							<ol class="dd-list">
								<li class="dd-item" data-id="1">
									<div class="dd-handle success">Item 1</div>
								</li>
								<li class="dd-item" data-id="2">
									<div class="dd-handle info">Item 2</div>
								</li>
								<li class="dd-item" data-id="3">
									<div class="dd-handle danger">Item 3</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="4">
											<div class="dd-handle warning">Item 4</div>
										</li>
										<li class="dd-item" data-id="5">
											<div class="dd-handle">Item 5</div>
										</li>
									</ol>
								</li>
								<li class="dd-item" data-id="6">
									<div class="dd-handle">Item 6</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="7">
											<div class="dd-handle">Item 7</div>
										</li>
										<li class="dd-item" data-id="8">
											<div class="dd-handle warning">Item 8</div>
											<ol class="dd-list">
												<li class="dd-item" data-id="9">
													<div class="dd-handle">Item 9</div>
												</li>
												<li class="dd-item" data-id="10">
													<div class="dd-handle info">Item 10</div>
												</li>
											</ol>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>

					<!-- ***** Drag to this list Part ***** -->
					<div class="col-md-4">
						<h4> Drag to this list</h4>
						<hr>
						<div class="dd" id="nestable2">
							<ol class="dd-list">
								<li class="dd-item" data-id="13">
									<div class="dd-handle success">Item 13</div>
								</li>
								<li class="dd-item" data-id="14">
									<div class="dd-handle">Item 14</div>
								</li>
								<li class="dd-item" data-id="15">
									<div class="dd-handle danger">Item 15</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="16"><div class="dd-handle">Item 16</div></li>
										<li class="dd-item" data-id="17"><div class="dd-handle">Item 17</div></li>
										<li class="dd-item" data-id="18"><div class="dd-handle">Item 18</div></li>
									</ol>
								</li>
							</ol>
						</div>
					</div>

					<!-- ***** Draggable Handlers Part ***** -->
					<div class="col-md-4">
						<h4>Draggable Handlers</h4>
						<hr>
						<div class="dd" id="nestable3">
							<ol class="dd-list">
								<li class="dd-item dd3-item" data-id="13">
									<div class="dd-handle drag-info dd3-handle">Drag</div><div class="dd3-content">Item 13</div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle drag-warning dd3-handle">Drag</div><div class="dd3-content">Item 14</div>
								</li>
								<li class="dd-item dd3-item" data-id="15">
									<div class="dd-handle drag-danger dd3-handle">Drag</div><div class="dd3-content">Item 15</div>
									<ol class="dd-list">
										<li class="dd-item dd3-item" data-id="16">
											<div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 16</div>
										</li>
										<li class="dd-item dd3-item" data-id="17">
											<div class="dd-handle drag-success dd3-handle">Drag</div><div class="dd3-content">Item 17</div>
										</li>
										<li class="dd-item dd3-item" data-id="18">
											<div class="dd-handle dd3-handle">Drag</div><div class="dd3-content">Item 18</div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
</div>

<div class="row">
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Drag &amp; Drop List Items
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
				<div class="row">
					<div class="col-md-4">
						<p>Group A</p>
						<ul id="one" class="items list-inline">
							<li><img alt="" src="{!! url('assets/images/avatar/eight.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/one.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/four.png') !!}"/></li>
						</ul>		
					</div>
					<div class="col-md-4">
						<p>Group B</p>
						<ul id="two" class="items list-inline">
							<li><img alt="" src="{!! url('assets/images/avatar/nine.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/one.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/four.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/six.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/two.png') !!}"/></li>
						</ul>		
					</div>
					<div class="col-md-4">
						<p>Group c</p>
						<ul id="three" class="items list-inline">
							<li><img alt="" src="{!! url('assets/images/avatar/five.png') !!}"/></li>
							<li><img alt="" src="{!! url('assets/images/avatar/two.png') !!}"/></li>
						</ul>		
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->


<div class="row">
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Multi Groups Drag &amp; Drop List Items
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
				<div class="row">
					<div class="col-md-6">
						<div data-force="30" class="layer block">
							<div class="layer title">List A</div>
							<ul id="foo" class="block__list block__list_words">
								<li>бегемот</li>
								<li>корм</li>
								<li>антон</li>
								<li>сало</li>
								<li>железосталь</li>
								<li>валик</li>
								<li>кровать</li>
								<li>краб</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div data-force="18" class="layer block">
							<div class="layer title">List B</div>
							<ul id="bar" class="block__list block__list_tags">
								<li>казнить</li>
								<li>,</li>
								<li>нельзя</li>
								<li>помиловать</li>
							</ul>
						</div>
					</div>
				</div>						
			</div>
		</div>
		<!-- /panel -->

		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Multi Group Drag &amp; Drop List Items with images
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
				<div class="row">
					<div class="col-md-12">
						<!-- Multi connected lists -->
						<a name="m"></a>
						<div id="multi">
							<div class="layer tile" data-force="30">
								<div class="tile__name">Group A</div>
								<div class="tile__list">
									<img src="{!! url('assets/images/avatar/one.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/two.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/three.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/four.png') !!}" alt="" />
								</div>
							</div>

							<div class="layer tile" data-force="25">
								<div class="tile__name">Group B</div>
								<div class="tile__list">
									<img src="{!! url('assets/images/avatar/five.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/six.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/seven.png') !!}" alt="" />
								</div>
							</div>

							<div class="layer tile" data-force="20">
								<div class="tile__name">Group C</div>
								<div class="tile__list">
									<img src="{!! url('assets/images/avatar/eight.png') !!}" alt="" />
									<img src="{!! url('assets/images/avatar/nine.png') !!}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Editable list
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
				<div class="row">
					<div class="col-md-12">
						<!-- Editable list -->
						<a name="e"></a>
						<div id="filter">
							<div style="margin-top: -8px; margin-left: 10px" class="block__list block__list_words">
								<ul id="editable">
									<li>Оля<i class="js-remove">✖</i></li>
									<li>Владимир<i class="js-remove">✖</i></li>
									<li>Алина<i class="js-remove">✖</i></li>
								</ul>

								<button id="addUser">Add</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Advanced groups
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
				<div class="row">
					<div class="col-md-12">
						<!-- Advanced connected lists -->
						<a name="ag"></a>
						<div id="advanced">
							<div style="width: 25%; float: left; margin-top: 15px; margin-left: 10px" class="block__list block__list_words">
								<div class="block__list-title">pull & put</div>
								<ul id="advanced-1">
									<li>Meat</li>
									<li>Potato</li>
									<li>Tea</li>
								</ul>
							</div>

							<div style="width: 25%; float: left; margin-top: 15px; margin-left: 10px" class="block__list block__list_words">
								<div class="block__list-title">only pull (clone) no&nbsp;reordering</div>
								<ul id="advanced-2">
									<li>Sex</li>
									<li>Drugs</li>
									<li>Rock'n'roll</li>
								</ul>
							</div>

							<div style="width: 25%; float: left; margin-top: 15px; margin-left: 10px" class="block__list block__list_words">
								<div class="block__list-title">only put</div>
								<ul id="advanced-3">
									<li>Money</li>
									<li>Force</li>
									<li>Agility</li>
								</ul>
							</div>

							<div style="clear: both"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Drag handle and selectable text
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
				<div class="row">
					<div class="col-md-12">
						<!-- 'handle' option -->
						<a name="h"></a>
						<div id="handle">
							<div style="width: 30%; margin-left: 10px" class="block__list_words">
								<ul id="handle-1">
									<li><span class="drag-handle">&#9776;</span>Select text freely</li>
									<li><span class="drag-handle">&#9776;</span>Drag my handle</li>
									<li><span class="drag-handle">&#9776;</span>Best of both worlds</li>
								</ul>
							</div>

							<div style="clear: both"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /col-md-12 -->
</div>
<!-- /row -->	

@endsection

@section('scripts')

<script src="{!! url('assets/js/nestable-lists/jquery.nestable.js') !!}"></script>
<script src="{!! url('assets/js/nestable-lists/nestable-custom.js') !!}"></script>
<script src="{!! url('assets/js/sortable/Sortable.js') !!}"></script>
<script src="{!! url('assets/js/sortable/Ply.min.js') !!}"></script>
<script src="{!! url('assets/js/sortable/angular.min.js') !!}"></script>

<script src="{!! url('assets/js/sortable/ng-sortable.js') !!}"></script>
<script src="{!! url('assets/js/sortable/st/app.js') !!}"></script>
<script>
	$(document).ready(function(){
		var el = document.getElementById('one');
		var sortable = Sortable.create(el,{
			animation: 150,
		});

		var elOne = document.getElementById('two');
		var sortableOne = Sortable.create(elOne,{
			animation: 150,
		});

		var elOne = document.getElementById('three');
		var sortableOne = Sortable.create(elOne,{
			animation: 150,
		});
	})
</script>

@endsection