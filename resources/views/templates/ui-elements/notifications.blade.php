@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Notifications</div>
			<p class="block">
				Notifications are a way to communicate certain events to users of a graphical user interface which can appear on any part on the screen with of your wish with differnet colors depending on type of the notification.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-ios-bell-outline page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Unique</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Animated</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Flexible</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Easy To Use</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->      

<!-- panel -->
<div class="panel knot-panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Toastr Examples
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
				<div class="control-group">
					<div class="controls">
						<label class="control-label" for="title">Title</label>
						<input id="title" type="text" class="input-large form-control" placeholder="Enter a title ..." />
						<label class="control-label" for="message">Message</label>
						<textarea class="input-large  form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
					</div>
				</div>
				<div class="control-group">


					<div class="checkbox">
						<input id="closeButton" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="closeButton">
							Close Button
						</label>
					</div>

					<div class="checkbox">
						<input id="addBehaviorOnToastClick" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="addBehaviorOnToastClick">
							Add behavior on toast click
						</label>
					</div>

					<div class="checkbox">
						<input id="debugInfo" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="debugInfo">
							Debug
						</label>
					</div>

					<div class="checkbox">
						<input id="progressBar" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="progressBar">
							Progress Bar
						</label>
					</div>

					<div class="checkbox">
						<input id="preventDuplicates" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="preventDuplicates">
							Prevent Duplicates
						</label>
					</div>

					<div class="checkbox">
						<input id="addClear" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="addClear">
							Add button to force clearing a toast, ignoring focus
						</label>
					</div>

					<div class="checkbox">
						<input id="newestOnTop" type="checkbox" value="checked" class="input-mini" />
						<label class="checkbox" for="newestOnTop">
							Newest on top
						</label>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="control-group" id="toastTypeGroup">
					<div class="controls">
						<label>Toast Type</label>

						<div class="radio radio-success">
							<input type="radio" name="toasts" id="success" value="success" checked >
							<label for="success">
								Success
							</label>
						</div>
						<div class="radio radio-info">
							<input type="radio" name="toasts" id="info" value="info" >
							<label for="info">
								Info
							</label>
						</div>
						<div class="radio radio-warning">
							<input type="radio" name="toasts" id="warning" value="warning" >
							<label for="warning">
								Warning
							</label>
						</div>
						<div class="radio radio-danger">
							<input type="radio" name="toasts" id="error" value="error" >
							<label for="error">
								Error
							</label>
						</div>

					</div>
				</div>
				<div class="control-group" id="positionGroup">
					<div class="controls">
						<label>Position</label>

						<div class="radio">
							<input type="radio" name="positions" id="toast-top-right" value="toast-top-right" checked >
							<label for="toast-top-right">
								Top Right
							</label>
						</div>
						<div class="radio">
							<input type="radio" name="positions" id="toast-bottom-right" value="toast-bottom-right">
							<label for="toast-bottom-right">
								Bottom Right
							</label>
						</div>

						<div class="radio">
							<input type="radio" name="positions" id="toast-bottom-left" value="toast-bottom-left">
							<label for="toast-bottom-left">
								Bottom left
							</label>
						</div>

						<div class="radio">
							<input type="radio" name="positions" id="toast-top-left" value="toast-top-left">
							<label for="toast-top-left">
								Top Left
							</label>
						</div>
						<div class="radio">
							<input type="radio" name="positions" id="toast-top-full-width" value="toast-top-full-width">
							<label for="toast-top-full-width">
								Top Full Width
							</label>
						</div>

						<div class="radio">
							<input type="radio" name="positions" id="toast-bottom-full-width" value="toast-bottom-full-width">
							<label for="toast-bottom-full-width">
								Bottom Full Width
							</label>
						</div>

						<div class="radio">
							<input type="radio" name="positions" id="toast-top-center" value="toast-top-center">
							<label for="toast-top-center">
								Top Center
							</label>
						</div>
						<div class="radio">
							<input type="radio" name="positions" id="toast-bottom-center" value="toast-bottom-center">
							<label for="toast-bottom-center">
								Bottom Center
							</label>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="control-group">
					<div class="controls">
						<label class="control-label" for="showEasing">Show Easing</label>
						<input id="showEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="swing" />

						<label class="control-label" for="hideEasing">Hide Easing</label>
						<input id="hideEasing" type="text" placeholder="swing, linear" class="input-mini form-control" value="linear" />

						<label class="control-label" for="showMethod">Show Method</label>
						<input id="showMethod" type="text" placeholder="show, fadeIn, slideDown" class="input-mini form-control" value="fadeIn" />

						<label class="control-label" for="hideMethod">Hide Method</label>
						<input id="hideMethod" type="text" placeholder="hide, fadeOut, slideUp" class="input-mini form-control" value="fadeOut" />
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="control-group">
					<div class="controls">
						<label class="control-label" for="showDuration">Show Duration</label>
						<input id="showDuration" type="text" placeholder="ms" class="input-mini form-control" value="300" />

						<label class="control-label" for="hideDuration">Hide Duration</label>
						<input id="hideDuration" type="text" placeholder="ms" class="input-mini form-control" value="1000" />

						<label class="control-label" for="timeOut">Time out</label>
						<input id="timeOut" type="text" placeholder="ms" class="input-mini form-control" value="5000" />

						<label class="control-label" for="extendedTimeOut">Extended time out</label>
						<input id="extendedTimeOut" type="text" placeholder="ms" class="input-mini form-control" value="1000" />
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
				<button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
				<button type="button" class="btn btn-danger" id="clearlasttoast">Clear Last Toast</button>

			</div>
		</div>


		<pre id='toastrOptions'></pre>
	</div>


</div>

@endsection

@section('scripts')

<script src="{!! url('assets/js/toastr.min.js') !!}"></script>
<script src="{!! url('assets/js/min/toastr-custom-min.js') !!}"></script>

@endsection