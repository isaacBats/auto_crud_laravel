@extends('layouts.app')

@section('content')

<div class="panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary knot-panel-wh">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-2 col-sm-3">
					<div class="profile-userbar">
						<div class="profile-user">
							<div class="profile-image">
								<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
							</div>
							<a href="#" class="profile-name">Stefan Salvatore</a>
							<div class="profile-designation">Web Designer</div>
							<div class="profile-location"><i class="ion ion-ios-location"></i>India</div>
						</div>
						<!--profile-user-->
						<div class="profile-menu">
							<div class="profile-menu-title">Menu:</div>
							<ul class="list-unstyled profile-menu-items">
								<li><a href="#"><i class="ion ion-ios-person"></i>profile</a></li>
								<li><a href="#"><i class="ion ion-ios-cloud-upload"></i>uploads</a></li>
								<li><a href="#"><i class="ion ion-ios-people"></i>Friends</a></li>
								<li><a href="#"><i class="ion ion-thumbsup"></i>Pages</a></li>
								<li><a href="#"><i class="ion ion-ios-people"></i>Groups</a></li>
							</ul>
						</div>
						<!--profile-menu-->
					</div>
					<!--profile-userbar-->
				</div>
				<!--col-md-2-->
				<div class="col-md-7 col-sm-6 profile-border">
					<ul class="list-unstyled list-inline profile-breadcrumb">
						<li>share <div class="profile-breadcrumb-value">2000</div></li>
						<li>Photos <div class="profile-breadcrumb-value">689</div></li>
						<li>Videos <div class="profile-breadcrumb-value">89</div></li>
						<li>Friends <div class="profile-breadcrumb-value">513</div></li>  
					</ul>
					<div class="profile-status">
						<ul class="list-unstyled list-inline profile-type">
							<li><a href="#" class="active"><i class="ion ion-document-text"></i></a></li>
							<li><a href="#"><i class="ion ion-image"></i></a></li>
							<li><a href="#"><i class="ion ion-ios-film"></i></a></li>
							<li><a href="#"><i class="ion ion-ios-location"></i></a></li>
						</ul>
						<div class="form-group">
							<textarea name="" class="form-control text-area" placeholder="Share Your Mood Here..."></textarea>
						</div>
						<div class="profile-share"><a href="#" class="btn btn-primary">Share</a></div>
						<div class="clearfix"></div>
						<div class="profile-post">
							<div class="profile-post-header">
								<div class="profile-post-img">
									<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
								</div>
								<div class="profile-post-time pull-right">4 hrs ago</div>
								<div class="profile-post-share">
									<a href="#">Elina Gilbert</a> shared a post
								</div>
								<div class="profile-post-via">
									<span>via</span> Mobile,New York
								</div>
							</div>
							<!-- Profile header-->
							<div class="profile-post-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat ultricies ex, non pulvinar nunc convallis sit amet. Maecenas sodales elementum dolor. Quisque auctor auctor dui nec convallis. Donec dictum hendrerit odio eu eleifend. Mauris nec semper est, vel tempus turpis. Proin pellentesque rhoncus scelerisque. Ut ac convallis risus. Nulla non accumsan sem. Fusce sit amet nisi et velit dictum iaculis ut et nisl. <br> Consectetur adipiscing elit. Nulla feugiat ultricies ex, non pulvinar nunc convallis sit amet. Maecenas sodales elementum dolor. Quisque auctor auctor dui nec convallis.
							</div>
							<!-- Profile body-->
							<ul class="list-unstyled list-inline profile-post-footer">
								<li><a href="#"><i class="ion ion-ios-star-outline"></i> 1.5k</a></li>
								<li><a href="#"><i class="ion ion-reply"></i> reply </a></li>
								<li><a href="#"><i class="ion ion-share"></i> share </a></li>
							</ul>
							<!-- Profile footer-->
						</div>
						<!-- Profile post-->
						<div class="profile-post">
							<div class="profile-post-header">
								<div class="profile-post-img">
									<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
								</div>
								<div class="profile-post-time pull-right">4 hrs ago</div>
								<div class="profile-post-share">
									<a href="#">Elina Gilbert</a> shared a post
								</div>
								<div class="profile-post-via">
									<span>via</span> Mobile,New York
								</div>
							</div>
							<!-- Profile header-->
							<div class="profile-post-body">
								<div class="row">
									<div class="col-md-6">
										<div class="profile-post-body-img">
											<a href="#"><img src="{!! url('assets/images/post4.jpg" alt="post4') !!}"></a>
										</div>
									</div>
									<div class="col-md-6">
										<div class="profile-post-body-img">
											<a href="#"><img src="{!! url('assets/images/post2.jpg" alt="post2') !!}"></a>
										</div>
									</div>
								</div>
							</div>
							<!-- Profile body-->
							<ul class="list-unstyled list-inline profile-post-footer">
								<li><a href="#"><i class="ion ion-ios-star-outline"></i> 1.5k</a></li>
								<li><a href="#"><i class="ion ion-reply"></i> reply </a></li>
								<li><a href="#"><i class="ion ion-share"></i> share </a></li>
							</ul>
							<!-- Profile footer-->
						</div>
						<!-- Profile post-->
						<div class="profile-post">
							<div class="profile-post-header">
								<div class="profile-post-img">
									<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
								</div>
								<div class="profile-post-time pull-right">4 hrs ago</div>
								<div class="profile-post-share">
									<a href="#">Elina Gilbert</a> shared a post
								</div>
								<div class="profile-post-via">
									<span>via</span> Mobile,New York
								</div>
							</div>
							<!-- Profile header-->
							<div class="profile-post-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat ultricies ex, non pulvinar nunc convallis sit amet. Maecenas sodales elementum dolor. Quisque auctor auctor dui nec convallis. Donec dictum hendrerit odio eu eleifend. Mauris nec semper est, vel tempus turpis. Proin pellentesque rhoncus scelerisque. Ut ac convallis risus. Nulla non accumsan sem. Fusce sit amet nisi et velit dictum iaculis ut et nisl. <br> Consectetur adipiscing elit. Nulla feugiat ultricies ex, non pulvinar nunc convallis sit amet. Maecenas sodales elementum dolor. Quisque auctor auctor dui nec convallis.
							</div>
							<!-- Profile body-->
							<ul class="list-unstyled list-inline profile-post-footer">
								<li><a href="#"><i class="ion ion-ios-star-outline"></i> 1.5k</a></li>
								<li><a href="#"><i class="ion ion-reply"></i> reply </a></li>
								<li><a href="#"><i class="ion ion-share"></i> share </a></li>
							</ul>
							<!-- Profile footer-->
						</div>
						<!-- Profile post-->
					</div>
					<!-- Profile status-->
					<div class="profile-load text-center"><a href="#" class="btn btn-primary">Load More</a></div>
				</div>
				<!--col-md-7-->
				<div class="col-md-3 col-sm-3">
					<div class="profile-sidebar">
						<div class="profile-comment">
							<div class="profile-sidebar-image">
								<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
							</div>
							<div class="profile-notif">
								<a href="#">damon salvatore</a> commented on your status.
								<div class="profile-time">2 mins ago</div>
							</div>
						</div>
						<!--profile-comment-->
						<div class="profile-comment">
							<div class="profile-sidebar-image">
								<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
							</div>
							<div class="profile-notif">
								<a href="#">damon salvatore</a> commented on your status.
								<div class="profile-time">2 mins ago</div>
							</div>
						</div>
						<!--profile-comment-->
						<div class="profile-comment">
							<div class="profile-sidebar-image">
								<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
							</div>
							<div class="profile-notif">
								<a href="#">damon salvatore</a> commented on your status.
								<div class="profile-time">2 mins ago</div>
							</div>
						</div>
						<!--profile-comment-->
						<div class="profile-comment">
							<div class="profile-sidebar-image">
								<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar">
							</div>
							<div class="profile-notif">
								<a href="#">damon salvatore</a> commented on your status.
								<div class="profile-time">2 mins ago</div>
							</div>
						</div>
						<!--profile-comment-->
						<div class="profile-chat">
							<div class="profile-chat-title">chat (13)</div>
							<ul class="list-unstyled profile-chat-items">
								<li><a href="#">damon salvatore</a><i class="ion ion-record profile-online"></i></li>
								<li><a href="#">stefan salvatore</a><i class="ion ion-record profile-offline"></i></li>
								<li><a href="#">Elina Gilbert</a><i class="ion ion-record profile-busy"></i></li>
								<li><a href="#">Caroline Diaz</a><i class="ion ion-record profile-away"></i></li>
								<li><a href="#">Melinda May</a><i class="ion ion-record profile-online"></i></li>
								<li><a href="#">damon salvatore</a><i class="ion ion-record profile-online"></i></li>
								<li><a href="#">stefan salvatore</a><i class="ion ion-record profile-offline"></i></li>
								<li><a href="#">Elina Gilbert</a><i class="ion ion-record profile-busy"></i></li>
								<li><a href="#">Caroline Diaz</a><i class="ion ion-record profile-away"></i></li>
								<li><a href="#">Melinda May</a><i class="ion ion-record profile-online"></i></li>
							</ul>
						</div>
						<!--profile-chat-->
					</div>
					<!--profile-sidebar-->
				</div>
				<!--col-md-3-->
			</div>
			<!--row-->
		</div>
		<!-- panel-body -->
	</div>
	<!-- /panel -->
</div>
<!-- panel-parent -->

@endsection