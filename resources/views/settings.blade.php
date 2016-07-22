@extends('layouts.app')

@section('content')
@include('flash::message')
<div class="row">
	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Application Settings
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
				
				{!! Form::model('', ['url' => 'settings', 'method' => 'post']) !!}
				
				{{ csrf_field() }}

				<div class="form-group col-sm-12">
					<label for="site_title">Application Name</label>
					{!! Form::text('site_title', Setting::get('site_title', 'Marketizy'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-sm-12">
					<label for="site_description">Application description</label>
					{!! Form::text('site_description', Setting::get('site_description', 'Knot Laravel Admin Template'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-sm-12">
					<label for="pagination">Pagination</label>
					{!! Form::text('pagination', Setting::get('pagination', '10'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group col-sm-12">
					<label for="default-role">Default role</label>
					{!! Form::select('role', $roles, Setting::get('role', 'user'), ['class' => 'name_search form-control', 'placeholder' => 'Select role']) !!}
				</div>                            
				<div class="form-group col-sm-12">
					<label for="copyright">Copyright text</label>
					{!! Form::text('copyright', Setting::get('copyright', 'copyright &copy; Marketizy. All rights reserved'), ['class' => 'form-control']) !!}
				</div>                            
				<div class="form-group col-sm-6">
					<button type="submit" class="btn btn-success">Save</button>	
				</div>
				{!! Form::close() !!}	
				
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
					Social Settings
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

				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs knot-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#facebook" aria-controls="facebook" role="tab" data-toggle="tab">Facebook</a></li>
						<li role="presentation"><a href="#twitter" aria-controls="twitter" role="tab" data-toggle="tab">Twitter</a></li>
						<li role="presentation"><a href="#google" aria-controls="google" role="tab" data-toggle="tab">Google</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="facebook">

							<form method="post" action="{!! url('settings') !!}">

								{{ csrf_field() }}

								<div class="form-group col-sm-12">
									<label for="client_id">Client ID</label>
									{!! Form::text('facebook_client_id', Setting::get('facebook_client_id','962617307188894'), ['class' => 'form-control']) !!}
								</div>
								<div class="form-group col-sm-12">
									<label for="client_secret">Client secret key</label>
									{!! Form::text('facebook_client_secret', Setting::get('facebook_client_secret','98c13b7a6d04e11bd9f6370efe5d067f'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-12">
									<label for="redirect">Redirect link</label>
									{!! Form::text('facebook_redirect', Setting::get('facebook_redirect','http://knot.dev/account/facebook'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-6">
									<button type="submit" class="btn btn-success">Save</button>              
								</div>
							</form>

						</div>
						<div role="tabpanel" class="tab-pane" id="twitter">

							<form method="post" action="{!! url('settings') !!}">

								{{ csrf_field() }}

								<div class="form-group col-sm-12">
									<label for="client_id">Client ID</label>
									{!! Form::text('twitter_client_id', Setting::get('twitter_client_id','IGaQwaYw65EEXi8rCwNJsbSjO'), ['class' => 'form-control']) !!}
								</div>
								<div class="form-group col-sm-12">
									<label for="client_secret">Client secret key</label>
									{!! Form::text('twitter_client_secret', Setting::get('twitter_client_secret','6kBrPAuVTMPs0guyK0kuSjmQT0fGRt0N0ljYOX7pQL4LYq9UUQ'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-12">
									<label for="redirect">Redirect link</label>
									{!! Form::text('twitter_redirect', Setting::get('twitter_redirect','http://knot.dev/account/twitter'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-6">
									<button type="submit" class="btn btn-success">Save</button>              
								</div>
							</form>

						</div>
						<div role="tabpanel" class="tab-pane" id="google">

							<form method="post" action="{!! url('settings') !!}">

								{{ csrf_field() }}

								<div class="form-group col-sm-12">
									<label for="client_id">Client ID</label>
									{!! Form::text('google_client_id', Setting::get('google_client_id','987247622433-237aho6obi8s49oj6nvb81a002aqnlf9.apps.googleusercontent.com'), ['class' => 'form-control']) !!}
								</div>
								<div class="form-group col-sm-12">
									<label for="client_secret">Client secret key</label>
									{!! Form::text('google_client_secret', Setting::get('google_client_secret','4_r99v-6Tyo4Xr6GG75Q6SZe'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-12">
									<label for="redirect">Redirect link</label>
									{!! Form::text('google_redirect', Setting::get('google_redirect','http://knot.dev/account/google'), ['class' => 'form-control']) !!}
								</div>                            
								<div class="form-group col-sm-6">
									<button type="submit" class="btn btn-success">Save</button>              
								</div>
							</form>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-6 -->
</div>

@endsection

@section('scripts')
<script src="{!! url('assets/js/tinymce/tinymce.min.js') !!}"></script>
<script src="{!! url('assets/js/select2.min.js') !!}"></script>

<script>

	$(document).ready(function(){
		$(".name_search").select2({
			placeholder: "Select"
		});
	});
</script>
@endsection