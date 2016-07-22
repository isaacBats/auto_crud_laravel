@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Dropdowns</div>
			<p class="block">
				Toggleable, contextual menu for displaying lists of links. Made interactive with the dropdown JavaScript plugin.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-layout-list-thumb page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Simple</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Linked Items List</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Contextual Classes</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Custom styles</li>
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
					Dropdown Left
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
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="dropdown knot-dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications Dropdown</a>
							<ul class="dropdown-menu notification-drop user-drop dropdown-right">
								<li class="heading">You have 20 unread messages !</li>
								<li>
									<ul class="scroll-block">
										<li><a href="#"><i class="ion-ios-star yellow"></i> <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> <span class="time">6 minutes ago</span></a></li>
										<li><a href="#"><i class="ion-email-unread red"></i> 36 new mails <span class="time">1 day ago</span></a></li>
										<li><a href="#"><i class="ion-happy blue"></i> Iris accepted your friendship <span class="time">2 days ago</span></a></li>
										<li><a href="#"><i class="ion-help-buoy sky"></i> Phone number updated <span class="time">3 days ago</span></a></li>
										<li><a href="#"><i class="ion-settings red"></i> Phone number updated <span class="time">3 days ago</span></a></li>
										<li><a href="#"><i class="ion-briefcase green"></i> Phone number updated <span class="time">3 days ago</span></a></li>
										<li><a href="#"><i class="ion-calendar torque"></i> Phone number updated <span class="time">3 days ago</span></a></li>
									</ul>
								</li>
								<li class="footer"><a href="#">See all notifications</a></li>
							</ul>
						</div>
						<!-- notifications dropdown -->
					</div>
					<!-- col-md-4 -->
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="dropdown knot-dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown With Image </a>
							<ul class="dropdown-menu message-drop dropdown-right">
								<li>
									<ul class="scroll-block">
										<li>
											<a href="#">
												<span class="user-avatar">
													<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
													<span class="status away"></span>
												</span>                      
												<p class="name">Denver Wizard</p>
												<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
												<p class="time">2 minutes ago</p>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="user-avatar">
													<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
													<span class="status online"></span>
												</span>                      
												<p class="name">Richard Henry</p>
												<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
												<p class="time">2 minutes ago</p>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="user-avatar">
													<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
													<span class="status away"></span>
												</span>                      
												<p class="name">Sharpova</p>
												<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
												<p class="time">2 minutes ago</p>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="user-avatar">
													<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
													<span class="status offline"></span>
												</span>                      
												<p class="name">Harley</p>
												<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
												<p class="time">2 minutes ago</p>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="user-avatar">
													<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
													<span class="status away"></span>
												</span>                      
												<p class="name">Karthik nayak</p>
												<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
												<p class="time">2 minutes ago</p>
											</a>
										</li>
									</ul>
									<li class="footer"><a href="#">See all notifications</a></li>
								</ul>
							</div>  
							<!-- Dropdown With Image -->
						</div>
						<!-- col-md-4 -->
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="dropdown knot-dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Default Dropdown</a>
								<ul class="dropdown-menu user-drop dropdown-right">
									<li><a href="#"><i class="ion-help-buoy torque"></i> Settings</a></li>
									<li><a href="#"><i class="ion-alert-circled blue"></i> Privacy Settings</a></li>
									<li><a href="#"><i class="ion-document-text yellow"></i> My Notes</a></li>
									<li><a href="#"><i class="ion-hammer red"></i> Edit</a></li>
									<li><a href="#"><i class="ion-power sky"></i> Logout</a></li>
								</ul>
							</div>
							<!-- notifications dropdown -->
						</div>
						<!-- col-md-4 -->
					</div>
					<!-- row -->
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
						Dropdown Right
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
							<div class="dropdown knot-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications Dropdown</a>
								<ul class="dropdown-menu notification-drop user-drop dropdown-left">
									<li class="heading">You have 20 unread messages !</li>
									<li>
										<ul class="scroll-block">
											<li><a href="#"><i class="ion-ios-star yellow"></i> <p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> <span class="time">6 minutes ago</span></a></li>
											<li><a href="#"><i class="ion-email-unread red"></i> 36 new mails <span class="time">1 day ago</span></a></li>
											<li><a href="#"><i class="ion-happy blue"></i> Iris accepted your friendship <span class="time">2 days ago</span></a></li>
											<li><a href="#"><i class="ion-help-buoy sky"></i> Phone number updated <span class="time">3 days ago</span></a></li>
											<li><a href="#"><i class="ion-settings red"></i> Phone number updated <span class="time">3 days ago</span></a></li>
											<li><a href="#"><i class="ion-briefcase green"></i> Phone number updated <span class="time">3 days ago</span></a></li>
											<li><a href="#"><i class="ion-calendar torque"></i> Phone number updated <span class="time">3 days ago</span></a></li>
										</ul>
									</li>
									<li class="footer"><a href="#">See all notifications</a></li>
								</ul>
							</div>
							<!-- notifications dropdown -->
						</div>
						<!-- col-md-4 -->
						<div class="col-md-4">
							<div class="dropdown knot-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown With Image </a>
								<ul class="dropdown-menu message-drop dropdown-left">
									<li>
										<ul class="scroll-block">
											<li>
												<a href="#">
													<span class="user-avatar">
														<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
														<span class="status away"></span>
													</span>                      
													<p class="name">Denver Wizard</p>
													<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
													<p class="time">2 minutes ago</p>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="user-avatar">
														<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
														<span class="status online"></span>
													</span>                      
													<p class="name">Richard Henry</p>
													<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
													<p class="time">2 minutes ago</p>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="user-avatar">
														<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
														<span class="status away"></span>
													</span>                      
													<p class="name">Sharpova</p>
													<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
													<p class="time">2 minutes ago</p>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="user-avatar">
														<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
														<span class="status offline"></span>
													</span>                      
													<p class="name">Harley</p>
													<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
													<p class="time">2 minutes ago</p>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="user-avatar">
														<img src="{!! url('assets/images/avatar.png') !!}" alt="avatar" class="message-img">
														<span class="status away"></span>
													</span>                      
													<p class="name">Karthik nayak</p>
													<p class="text">You earned 32 points Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione et, dicta reiciendis architecto facere sapiente, sunt error, fuga beatae sint voluptates eos enim atque alias assumenda iste iusto nam. </p> 
													<p class="time">2 minutes ago</p>
												</a>
											</li>
										</ul>
										<li class="footer"><a href="#">See all notifications</a></li>
									</ul>
								</div>  
								<!-- Dropdown With Image -->
							</div>
							<!-- col-md-4 -->
							<div class="col-md-4">
								<div class="dropdown knot-dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Default Dropdown</a>
									<ul class="dropdown-menu user-drop dropdown-left">
										<li><a href="#"><i class="ion-help-buoy torque"></i> Settings</a></li>
										<li><a href="#"><i class="ion-alert-circled blue"></i> Privacy Settings</a></li>
										<li><a href="#"><i class="ion-document-text yellow"></i> My Notes</a></li>
										<li><a href="#"><i class="ion-hammer red"></i> Edit</a></li>
										<li><a href="#"><i class="ion-power sky"></i> Logout</a></li>
									</ul>
								</div>
								<!-- notifications dropdown -->
							</div>
							<!-- col-md-4 -->
						</div>
						<!-- row -->
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
							Bootstrap Dropdowns
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
							<div class="col-md-3">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropdown
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Default Dropdown -->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropup">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropup
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Default Dropup -->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropdown With Seperator
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Dropdown With Seperator -->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropup">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropup  With Seperator
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Dropup With Seperator -->
							</div>
							<!-- /col-md-3 -->
						</div>
						<!-- /row -->
						<br><br><br>
						<div class="row">
							<div class="col-md-3">
								<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropdown Disabled Menu Items
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Dropdown Disabled Menu Items -->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropup">
									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropup Disabled Menu Items
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Dropup Disabled Menu Items -->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropdown pull-left">
									<button class="btn btn-default dropdown-toggle pull-right" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropdown Right
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-right" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Default Dropdown Right-->
							</div>
							<!-- /col-md-3 -->
							<div class="col-md-3">
								<div class="dropup pull-left">
									<button class="btn btn-default dropdown-toggle pull-right" type="button" data-toggle="dropdown" aria-expanded="true">
										Dropup Right
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-right" role="menu">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
										<li role="presentation" class="divider"></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
									</ul>
								</div>
								<!-- /Default Dropup Right -->
							</div>
							<!-- /col-md-3 -->
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-12 -->
		</div> 
		<!-- row -->

		@endsection

		@section('scripts')



		@endsection