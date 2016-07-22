@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Tabs &amp; Accordions</div>
			<p class="block">
				With Tabs & Accordions you can add quick and dynamic functionality to transition through panes of local content, even via dropdown menus
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-layout-tab page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Flexible</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Easy to use</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Customizable</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="row">  
	<!--*** Tabs Left With Border ***-->     
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Left With Border
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
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
						<div role="tabpanel" class="tab-pane" id="profile">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
						<div role="tabpanel" class="tab-pane" id="messages">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
						<div role="tabpanel" class="tab-pane" id="settings">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!--*** Tabs Right With Border ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Right With Border
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
					<ul class="nav nav-tabs knot-tabs right-tabs" role="tablist">
						<li role="presentation"><a href="#settingsrt" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						<li role="presentation"><a href="#messagesrt" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#profilert" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation" class="active"><a href="#homert" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="homert">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
						<div role="tabpanel" class="tab-pane" id="profilert">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
						<div role="tabpanel" class="tab-pane" id="messagesrt">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
						<div role="tabpanel" class="tab-pane" id="settingsrt">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">
	<!--*** Tabs Justified With Border ***-->       
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Justified With Border
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
					<ul class="nav nav-tabs nav-justified knot-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#hometab" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profiletab" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messagestab" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#settingstab" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="hometab">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam eleifend scelerisque. Curabitur et tortor eu eros sodales posuere. Maecenas turpis metus, dapibus at nisl vitae, tristique rhoncus dui. Cras hendrerit accumsan erat in dictum. Fusce nunc tortor, malesuada sit amet porttitor condimentum, elementum sed erat. Ut magna turpis, accumsan at gravida a, vestibulum et quam. Integer sagittis at tortor ac commodo. Donec nibh ligula, varius vitae tristique quis, eleifend vel nibh. Nunc sit amet condimentum ex. Maecenas aliquam nulla sit amet mauris venenatis gravida. Sed volutpat volutpat tortor sit amet lobortis.</div>
						<div role="tabpanel" class="tab-pane" id="profiletab">Vestibulum lorem nisl, laoreet non nulla eu, dignissim placerat elit. Fusce cursus ex velit, id placerat velit accumsan non. Vestibulum sed mauris molestie, tincidunt turpis ac, vulputate odio. Ut semper, risus ut condimentum tempus, massa neque viverra justo, eu accumsan nibh lectus eu erat. Maecenas sem risus, pharetra quis aliquet in, finibus vitae lorem. Nunc nec lectus vel magna volutpat placerat. Ut non egestas neque, eu scelerisque magna. Pellentesque mollis suscipit suscipit. Etiam sagittis egestas ipsum, vitae ullamcorper erat ultrices non.</div>
						<div role="tabpanel" class="tab-pane" id="messagestab">Aliquam erat volutpat. Nullam sed dui nulla. Quisque a cursus lectus, id luctus lorem. Quisque in pharetra sem. Sed placerat nisi sit amet tincidunt fringilla. Cras leo erat, posuere eu nunc sit amet, egestas maximus diam. Cras eget libero lacinia, commodo turpis vel, maximus nunc. Nullam ac metus facilisis, efficitur libero ut, sollicitudin leo. Integer rhoncus scelerisque purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla bibendum ex eget lorem porta placerat. Vestibulum eros mauris, congue quis leo sit amet, placerat molestie leo.</div>
						<div role="tabpanel" class="tab-pane" id="settingstab">Integer a lobortis ex. Praesent nibh metus, efficitur in gravida at, feugiat at velit. Vivamus tincidunt nisi eget pulvinar sodales. Praesent dignissim arcu quis velit fermentum dictum. Donec mattis elit sit amet sapien lacinia, at mattis dui pharetra. Mauris ac dolor at metus lobortis tristique ac ut mi. Phasellus vel lacinia ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu pretium turpis. Duis nulla dolor, rhoncus ac sagittis eget, ultricies ac tortor. Sed semper metus ut arcu laoreet feugiat. Nunc ac ante ultricies, ultrices leo quis, pellentesque libero.</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">       
	<!--*** Tabs Right Without Border ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Right Without Border
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
					<ul class="nav nav-tabs knot-tabs knot-noborder right-tabs" role="tablist">
						<li role="presentation"><a href="#settingsrtnb" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
						<li role="presentation"><a href="#messagesrtnb" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#profilertnb" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation" class="active"><a href="#homertnb" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="homertnb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
						<div role="tabpanel" class="tab-pane" id="profilertnb">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
						<div role="tabpanel" class="tab-pane" id="messagesrtnb">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
						<div role="tabpanel" class="tab-pane" id="settingsrtnb">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!--*** Tabs Left Without Border ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Left Without Border
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
					<ul class="nav nav-tabs knot-tabs knot-noborder" role="tablist">
						<li role="presentation" class="active"><a href="#homenb" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profilenb" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messagesnb" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#settingsnb" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="homenb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
						<div role="tabpanel" class="tab-pane" id="profilenb">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
						<div role="tabpanel" class="tab-pane" id="messagesnb">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
						<div role="tabpanel" class="tab-pane" id="settingsnb">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">       
	<!--*** Tabs Justified Without Border ***-->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Tabs Justified Without Border
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
					<ul class="nav nav-tabs nav-justified knot-tabs knot-noborder" role="tablist">
						<li role="presentation" class="active"><a href="#hometabnb" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profiletabnb" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messagestabnb" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
						<li role="presentation"><a href="#settingstabnb" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content knot-tab-content">
						<div role="tabpanel" class="tab-pane active" id="hometabnb">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam eleifend scelerisque. Curabitur et tortor eu eros sodales posuere. Maecenas turpis metus, dapibus at nisl vitae, tristique rhoncus dui. Cras hendrerit accumsan erat in dictum. Fusce nunc tortor, malesuada sit amet porttitor condimentum, elementum sed erat. Ut magna turpis, accumsan at gravida a, vestibulum et quam. Integer sagittis at tortor ac commodo. Donec nibh ligula, varius vitae tristique quis, eleifend vel nibh. Nunc sit amet condimentum ex. Maecenas aliquam nulla sit amet mauris venenatis gravida. Sed volutpat volutpat tortor sit amet lobortis.</div>
						<div role="tabpanel" class="tab-pane" id="profiletabnb">Vestibulum lorem nisl, laoreet non nulla eu, dignissim placerat elit. Fusce cursus ex velit, id placerat velit accumsan non. Vestibulum sed mauris molestie, tincidunt turpis ac, vulputate odio. Ut semper, risus ut condimentum tempus, massa neque viverra justo, eu accumsan nibh lectus eu erat. Maecenas sem risus, pharetra quis aliquet in, finibus vitae lorem. Nunc nec lectus vel magna volutpat placerat. Ut non egestas neque, eu scelerisque magna. Pellentesque mollis suscipit suscipit. Etiam sagittis egestas ipsum, vitae ullamcorper erat ultrices non.</div>
						<div role="tabpanel" class="tab-pane" id="messagestabnb">Aliquam erat volutpat. Nullam sed dui nulla. Quisque a cursus lectus, id luctus lorem. Quisque in pharetra sem. Sed placerat nisi sit amet tincidunt fringilla. Cras leo erat, posuere eu nunc sit amet, egestas maximus diam. Cras eget libero lacinia, commodo turpis vel, maximus nunc. Nullam ac metus facilisis, efficitur libero ut, sollicitudin leo. Integer rhoncus scelerisque purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla bibendum ex eget lorem porta placerat. Vestibulum eros mauris, congue quis leo sit amet, placerat molestie leo.</div>
						<div role="tabpanel" class="tab-pane" id="settingstabnb">Integer a lobortis ex. Praesent nibh metus, efficitur in gravida at, feugiat at velit. Vivamus tincidunt nisi eget pulvinar sodales. Praesent dignissim arcu quis velit fermentum dictum. Donec mattis elit sit amet sapien lacinia, at mattis dui pharetra. Mauris ac dolor at metus lobortis tristique ac ut mi. Phasellus vel lacinia ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu pretium turpis. Duis nulla dolor, rhoncus ac sagittis eget, ultricies ac tortor. Sed semper metus ut arcu laoreet feugiat. Nunc ac ante ultricies, ultrices leo quis, pellentesque libero.</div>
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
	<!--*** Accordions ***-->       
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Accordions
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
				<div class="panel-group knot-accordion" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Collapsible Group Item #1
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!--*** Accordion Modal Two ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Accordion Modal Two
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
				<div class="panel-group knot-accordion knot-accordion-two" id="accordionTwo" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingModalDemo">
							<h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalOne" aria-expanded="true" aria-controls="collapseOne">
									Collapsible Group Item #1
								</a>
							</h4>
						</div>
						<div id="collapseModalOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingModalTwo">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalTwo" aria-expanded="false" aria-controls="collapseTwo">
									Collapsible Group Item #2
								</a>
							</h4>
						</div>
						<div id="collapseModalTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingModalThree">
							<h4 class="panel-title">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
								</a>
							</h4>
						</div>
						<div id="collapseModalThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->

<div class="row">       
	<!--*** Vertical Tabs Left Without Border ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Vertical Tabs Left without Border
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
					<div class="row">
						<div class="col-md-3">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs knot-tabs knot-vertical-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#homevl" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
								<li role="presentation"><a href="#profilevl" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
								<li role="presentation"><a href="#messagesvl" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
								<li role="presentation"><a href="#settingsvl" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							</ul>
						</div>
						<div class="col-md-9">
							<!-- Tab panes -->
							<div class="tab-content knot-tab-content vertical-content">
								<div role="tabpanel" class="tab-pane active" id="homevl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
								<div role="tabpanel" class="tab-pane" id="profilevl">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
								<div role="tabpanel" class="tab-pane" id="messagesvl">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
								<div role="tabpanel" class="tab-pane" id="settingsvl">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->

	<!--*** Vertical Tabs Right Without Border ***-->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Vertical Tabs Right Without Border
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
					<div class="row">
						<div class="col-md-9">
							<!-- Tab panes -->
							<div class="tab-content knot-tab-content vertical-content">
								<div role="tabpanel" class="tab-pane active" id="homevr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a mauris sed magna mattis congue eget sit amet leo. Vivamus tempor leo sed egestas venenatis. Ut congue lectus eget diam consequat, ut blandit nisi euismod. Phasellus nibh est, blandit eget tincidunt id, semper vel diam. Curabitur leo sapien, dignissim ac efficitur ut, posuere id justo. Aenean laoreet lacus at urna tincidunt, nec ultricies lacus fermentum. Donec in dignissim urna, vel convallis ipsum.</div>
								<div role="tabpanel" class="tab-pane" id="profilevr">Integer ut felis lorem. Sed at venenatis odio. Quisque luctus volutpat sapien, sed rutrum libero congue ut. Maecenas scelerisque sapien ipsum, id iaculis risus aliquet in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec congue lacinia tristique. Fusce ut aliquam massa.</div>
								<div role="tabpanel" class="tab-pane" id="messagesvr">Nunc faucibus turpis et est fermentum porta. Donec ut ultricies leo. Aliquam tempus metus odio, eu cursus libero commodo eu. Donec sed vestibulum diam. Duis vitae neque erat. Nulla posuere dignissim libero facilisis lacinia. Etiam sagittis et lacus quis ultrices. Praesent pulvinar nec sem ut iaculis. Pellentesque vel dui vel augue efficitur vehicula.</div>
								<div role="tabpanel" class="tab-pane" id="settingsvr">Sed ac fringilla nunc. Fusce scelerisque tempus mauris eu laoreet. Sed sem eros, congue tempor neque non, blandit fringilla nibh. Pellentesque vitae fringilla nibh. Etiam leo elit, faucibus et dignissim quis, auctor vitae lectus. Donec a ex id dolor rhoncus pellentesque. Proin augue urna, commodo id metus in, hendrerit placerat sem.</div>
							</div>
						</div>
						<div class="col-md-3">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs knot-tabs knot-vertical-tabs knot-vertical-tabs-right" role="tablist">
								<li role="presentation" class="active"><a href="#homevr" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
								<li role="presentation"><a href="#profilevr" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
								<li role="presentation"><a href="#messagesvr" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
								<li role="presentation"><a href="#settingsvr" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
</div>
<!-- /row -->	

@endsection

@section('scripts')



@endsection