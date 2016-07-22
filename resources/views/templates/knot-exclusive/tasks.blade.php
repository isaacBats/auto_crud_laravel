@extends('layouts.app')

@section('styles')
<link href="{!! url('assets/css/tasks.css') !!}" rel="stylesheet">
@endsection
@section('content')

<div class="row">
	<div class="col-md-12 panel-parent">    
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tasks
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
				<div class="col-lg-12 tasks-block">
					<section class="col-md-4">
						<div class="panel panel-danger ">
							<div class="panel-heading">
								<form class="form-group" id="newTaskForm">
									<div class="input-group" style="margin-bottom:-40px;">
										<div class="input-group-addon save" id="saveNewItem"><a href="">Save</a></div>
										<div class="input-group-addon cancel" id="cancel"><a href="">Cancel</a></div>
										<input class="form-control" type="text" id="newItemInput" placeholder="New Item">
									</div>
								</form>
								<div class='new-item-header'>
									<span id="newHeading">Create new task</span>
									<a href="#newItem" class="pull-right ion-compose" id="newListItem" style=""></a>
								</div>
							</div>
							<div class="panel-body">
								<ul class="list-group" id='newList'>
									<li class="list-group-item item">
										<a href="#finish" class="">
											task 1<span class="arrow pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
										</a> 
									</li>
									<li class="list-group-item item">
										<a href="#finish" class="">
											task 2<span class="arrow pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
										</a>                                   
									</li>
									<li class="list-group-item item">
										<a href="#finish" class="">
											task 3<span class="arrow pull-right"> <i class="glyphicon glyphicon-arrow-right"></i></span>
										</a>                                   
									</li>
								</ul>
							</div>
						</div>
					</section>
					<section class="col-md-4">
						<div class="panel panel-warning ">
							<div class="panel-heading">
								In Progress
							</div>
							<div class="panel-body">
								<ul class="list-group" id="currentList">
									<li class="list-group-item inProgress">
										<a href="#finish" class="">
											task 4<span class="arrow pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
										</a> 
									</li>
									
									<li class="list-group-item inProgress">
										<a href="#finish" class="">
											task 5<span class="arrow pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
										</a> 
									</li>
									
								</ul>
							</div>
						</div>
					</section>
					<section class="col-md-4">
						<div class="panel panel-success ">
							<div class="panel-heading">
								Archived
							</div>
							<div class="panel-body">
								<ul class="list-group" id="archivedList">

									<li class="list-group-item archived">
										<a href="#finish">
											task 6<span class="arrow pull-right"><i class="glyphicon success glyphicon-remove"></i></span>
										</a> 
									</li>
									<li class="list-group-item">
										<a href="#finish">
											task 7<span class="arrow pull-right"><i class="glyphicon glyphicon-remove"></i></span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#finish">
											task 8<span class="arrow pull-right"><i class="glyphicon glyphicon-remove"></i></span>
										</a> 
									</li>
									<li class="list-group-item">
										<a href="#finish">
											task 9<span class="arrow pull-right"><i class="glyphicon glyphicon-remove"></i></span>
										</a>
									</li>
									<li class="list-group-item">
										<a href="#finish">
											task 10<span class="arrow pull-right"><i class="glyphicon glyphicon-remove"></i></span>
										</a>
									</li>
									
								</ul>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-3 -->
</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/tasks/parse-1.3.0.min.js') !!}"></script>
<script src="{!! url('assets/js/tasks/app.min.js') !!}"></script>

@endsection