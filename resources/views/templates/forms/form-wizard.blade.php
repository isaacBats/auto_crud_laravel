@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Form Wizard</div>
			<p class="block">
				The form wizard can help you create new web forms in a matter of minutes. In a few simple steps you can create a completely working form to collect information from your visitors.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-layout-accordion-separated page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Basic Wizard</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;With Progress Bar</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Vertical Wizard</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;With Advanced Options</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->      

<div class="row">
	<!-- ***Basic Form Validation ***-->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Basic Form Wizard
					<span class="panel-options">
						<a href="#" class="panel-refresh">
							<i class="ion ion-refresh"></i> 
						</a>
						<a href="#" class="panel-minimize">
							<i class="ion ion-chevron-up"></i> 
						</a>
						<a href="#" class="panel-close">
							<i class="ion ion-close"></i> 
						</a>
					</span>
				</h3>
			</div>
			<div class="panel-body">
				<div id="rootwizard" class="tabbable tabs-left">
					<ul class="knot-tabs">
						<li><a href="#tab1" data-toggle="tab">First</a>
						</li>
						<li><a href="#tab2" data-toggle="tab">Second</a>
						</li>
						<li><a href="#tab3" data-toggle="tab">Third</a>
						</li>
						<li><a href="#tab4" data-toggle="tab">Forth</a>
						</li>
						<li><a href="#tab5" data-toggle="tab">Fifth</a>
						</li>
						<li><a href="#tab6" data-toggle="tab">Sixth</a>
						</li>
						<li><a href="#tab7" data-toggle="tab">Seventh</a>
						</li>
					</ul>
					<div class="tab-content knot-tab-content">
						<div class="tab-pane" id="tab1">
							<p></p>
							<p class="text-primary"><b>First Step content goes here</b>
							</p>
							<p>Lorem ipsum dolor sit amet, <span class="bg-success">Aliquam</span>consectetur adipiscing elit. Maecenas porttitor mollis lectus quis maximus. Curabitur semper nibh nunc, eu dapibus ipsum dapibus vestibulum. Fusce eu odio in leo fermentum efficitur. <span class="bg-warning">Pellentesque</span> porttitor lorem sit amet tristique pellentesque. Vivamus ultricies nisl nec ex sagittis, sed porttitor justo commodo. Etiam sodales blandit augue, a fermentum nisi gravida non. Nam consectetur lorem eget mattis eleifend. Sed consequat diam ut quam vestibulum, nec dapibus elit laoreet. <span class="bg-danger">Aliquam</span>Aenean in imperdiet tortor, ac mollis tortor. In hac habitasse platea dictumst. Aliquam erat volutpat.</p>
						</div>
						<div class="tab-pane" id="tab2">
							<p></p>
							<p class="text-danger"><b>Second Step content goes here</b>
							</p>
							<p>Maecenas vitae volutpat leo. In metus velit, bibendum ac odio ut, condimentum congue orci. In eu faucibus eros. Curabitur vitae risus quam. <span class="bg-success text-white">Aliquam</span> Phasellus a euismod nisi, vel molestie ex. Integer fringilla, odio et fringilla gravida, turpis quam mattis lorem, vitae venenatis est velit vitae urna. Donec hendrerit metus nec eleifend gravida. Maecenas ante odio, vestibulum a tincidunt at, <span class="bg-info">condimentum eu ante</span>. Nulla facilisi. Nam pretium tortor ante, eget sagittis magna pellentesque sed. Integer et felis imperdiet, ullamcorper dui id, malesuada sapien. Pellentesque id nulla tellus. Curabitur sed condimentum neque.</p>
						</div>
						<div class="tab-pane" id="tab3">
							<p></p>
							<p class="text-warning"><b>Third Step content goes here</b>
							</p>
							<p>Nam et mauris et <span class="bg-success">Aliquam</span> felis vehicula pellentesque. Quisque hendrerit risus a porttitor luctus. Maecenas ante velit, viverra non odio feugiat, vestibulum luctus lectus. <span class="bg-primary">Maecenas</span> vel justo non dui posuere pharetra eu id urna. Ut ultricies in leo non suscipit. Proin iaculis eget tellus et luctus. Nulla malesuada nec lacus vel vestibulum. congue enim sit amet egestas fermentum. Aenean efficitur orci sed sagittis aliquam. Praesent sit amet tincidunt metus, vel porttitor purus. Nullam accumsan porttitor nulla at blandit. In vel tristique arcu.</p>
						</div>
						<div class="tab-pane" id="tab4">
							<p></p>
							<p class="text-success"><b>Fourth Step content goes here</b>
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor mollis lectus quis maximus. Curabitur semper nibh nunc, eu dapibus ipsum dapibus vestibulum. Fusce eu odio in leo fermentum efficitur. <span class="bg-success">Pellentesque</span> porttitor lorem sit amet tristique pellentesque. Vivamus ultricies nisl nec ex sagittis, sed porttitor justo commodo. Etiam sodales blandit augue, a fermentum nisi gravida non. <span class="bg-danger">Nam consectetur</span> lorem eget mattis eleifend. Sed consequat diam ut quam vestibulum, nec dapibus elit laoreet. Aenean in imperdiet tortor, ac mollis tortor. In hac habitasse platea dictumst. <span class="bg-info">Aliquam</span> erat volutpat.</p>
						</div>
						<div class="tab-pane" id="tab5">
							<p></p>
							<p class="text-info"><b>Fifth Step content goes here</b>
							</p>
							<p>Maecenas vitae volutpat leo. In metus velit, bibendum ac odio ut, condimentum congue orci. In eu faucibus eros. Curabitur vitae risus quam. Phasellus a euismod <span class="bg-success">Pellentesque</span>nisi, vel molestie ex. Integer fringilla, odio et fringilla gravida, turpis quam mattis lorem, vitae venenatis est velit vitae urna. Donec hendrerit metus <span class="bg-danger">Nam consectetur</span>nec eleifend gravida. Maecenas ante odio, vestibulum a tincidunt at, condimentum eu ante. Nulla facilisi. Nam pretium tortor ante, eget sagittis magna pellentesque sed. <span class="bg-info">Aliquam</span> Integer et felis imperdiet, ullamcorper dui id, malesuada sapien. Pellentesque id nulla tellus. Curabitur sed condimentum neque.</p>
						</div>
						<div class="tab-pane" id="tab6">
							<p></p>
							<p class="text-warning"><b>Sixth Step content goes here</b>
							</p>
							<p>Nam et mauris et felis vehicula pellentesque. Quisque hendrerit risus a porttitor luctus. Maecenas ante velit, viverra non odio feugiat, vestibulum luctus <span class="bg-success">Pellentesque</span>lectus. Maecenas vel justo non dui posuere pharetra eu id urna. Ut ultricies in leo non suscipit. Proin iaculis eget tellus et luctus. Nulla malesuada nec lacus vel vestibulum. <span class="bg-danger">Nam consectetur</span> Aliquam congue enim sit amet egestas fermentum. Aenean efficitur orci sed sagittis aliquam. <span class="bg-info">Aliquam</span> Praesent sit amet tincidunt metus, vel porttitor purus. Nullam accumsan porttitor nulla at blandit. In vel tristique arcu.</p>
						</div>
						<div class="tab-pane" id="tab7">
							<p></p>
							<p class="text-success"><b>Seventh Step content goes here</b>
							</p>
							<p>Curabitur eget pharetra diam, id laoreet lectus. Suspendisse augue tellus, vestibulum ut cursus eu, tincidunt non odio. Praesent non pretium orci. <span class="bg-success">Pellentesque</span>Etiam vulputate commodo tellus quis vehicula. Donec in massa at arcu mattis euismod non sit amet massa. In eu tempor nisi, ac condimentum felis. Duis consequat elit neque. <span class="bg-danger">Nam consectetur</span> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <span class="bg-info">Aliquam</span> Proin pulvinar nulla lobortis pellentesque placerat. Nam vulputate lectus nec viverra condimentum. Etiam commodo dolor eu urna hendrerit, id molestie mauris mattis. Nunc nec quam aliquam, placerat magna nec, ornare purus.</p>
						</div>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a>
							</li>
							<li class="previous"><a href="#">Previous</a>
							</li>
							<li class="next last" style="display:none;"><a href="#">Last</a>
							</li>
							<li class="next"><a href="#">Next</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->

	<!-- ***Form Validation Wizard With Progress Bar*** -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Form Validation Wizard With Progress Bar
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
				<div id="rootwizard1">
					<div class="navbar">
						<div class="navbar-inner">

							<ul class="knot-tabs knot-noborder nav-justified">
								<li><a href="#tabs1" data-toggle="tab">Hello</a>
								</li>
								<li><a href="#tabs2" data-toggle="tab">Name</a>
								</li>
								<li><a href="#tabs3" data-toggle="tab">Welcome</a>
								</li>
								<li><a href="#tabs4" data-toggle="tab">Location</a>
								</li>
								<li><a href="#tabs5" data-toggle="tab">Description</a>
								</li>
								<li><a href="#tabs6" data-toggle="tab">Finish</a>
								</li>
							</ul>

						</div>
					</div>
					<div id="bar1" class="progress">
						<div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
					</div>
					<div class="tab-content knot-tab-content">
						<div class="tab-pane" id="tabs1">
							<p class="text-success"><b>You are invited to the Form wizard which includes form validation and the data can be sent to next steps in a very flexible way.</b>
							</p>
							<p>Please click the next step to explore the wizard right now.</p>
						</div>
						<div class="tab-pane" id="tabs2">
							<p>
								<input class="form-control" type='text' name='name' id='name' placeholder='Enter Your Name'>
							</p>
						</div>
						<div class="tab-pane" id="tabs3">
							Please make it a step-by-step process
						</div>
						<div class="tab-pane" id="tabs4">
							<p>
								<input class="form-control" type='text' name='location' id='location' placeholder='Enter Your Location'>
							</p>
						</div>
						<div class="tab-pane" id="tabs5">
							Please make it a step-by-step process
						</div>
						<div class="tab-pane" id="tabs6">
							<h3>Hope you like it! </h3>
						</div>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a>
							</li>
							<li class="previous"><a href="#">Previous</a>
							</li>
							<li class="next last" style="display:none;"><a href="#">Last</a>
							</li>
							<li class="next"><a href="#">Next</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /rootwizard1 -->
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->

	<!-- ***Advanced Form Wizard*** --> 
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Advanced Form Wizard
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
				<div id="rootwizard2" class="tabbable tabs-left">
					<ul class="piluku-tabs nav nav-tabs">
						<li class=""><a href="#tab11" data-toggle="tab" aria-expanded="false">First</a>
						</li>
						<li class=""><a href="#tab12" data-toggle="tab" aria-expanded="false">Second</a>
						</li>
						<li class=""><a href="#tab13" data-toggle="tab" aria-expanded="false">Third</a>
						</li>
						<li class=""><a href="#tab14" data-toggle="tab" aria-expanded="false">Forth</a>
						</li>
						<li class=""><a href="#tab15" data-toggle="tab" aria-expanded="false">Fifth</a>
						</li>
						<li class=""><a href="#tab16" data-toggle="tab" aria-expanded="false">Sixth</a>
						</li>
						<li class="#"><a href="#tab17" data-toggle="tab" aria-expanded="true">Seventh</a>
						</li>
					</ul>
					<div class="tab-content piluku-tab-content">
						<div class="tab-pane" id="tab11">
							<p></p>
							<p class="text-primary"><b>First Step content goes here</b>
							</p>
							<p>Lorem ipsum dolor sit amet, <span class="bg-success">Aliquam</span>consectetur adipiscing elit. Maecenas porttitor mollis lectus quis maximus. Curabitur semper nibh nunc, eu dapibus ipsum dapibus vestibulum. Fusce eu odio in leo fermentum efficitur. <span class="bg-warning">Pellentesque</span> porttitor lorem sit amet tristique pellentesque. Vivamus ultricies nisl nec ex sagittis, sed porttitor justo commodo. Etiam sodales blandit augue, a fermentum nisi gravida non. Nam consectetur lorem eget mattis eleifend. Sed consequat diam ut quam vestibulum, nec dapibus elit laoreet. <span class="bg-danger">Aliquam</span>Aenean in imperdiet tortor, ac mollis tortor. In hac habitasse platea dictumst. Aliquam erat volutpat.</p>
						</div>
						<div class="tab-pane" id="tab12">
							<p></p>
							<p class="text-danger"><b>Second Step content goes here</b>
							</p>
							<p>Maecenas vitae volutpat leo. In metus velit, bibendum ac odio ut, condimentum congue orci. In eu faucibus eros. Curabitur vitae risus quam. <span class="bg-success">Aliquam</span> Phasellus a euismod nisi, vel molestie ex. Integer fringilla, odio et fringilla gravida, turpis quam mattis lorem, vitae venenatis est velit vitae urna. Donec hendrerit metus nec eleifend gravida. Maecenas ante odio, vestibulum a tincidunt at, <span class="bg-info">condimentum eu ante</span>. Nulla facilisi. Nam pretium tortor ante, eget sagittis magna pellentesque sed. Integer et felis imperdiet, ullamcorper dui id, malesuada sapien. Pellentesque id nulla tellus. Curabitur sed condimentum neque.</p>
						</div>
						<div class="tab-pane" id="tab13">
							<p></p>
							<p class="text-warning"><b>Third Step content goes here</b>
							</p>
							<p>Nam et mauris et <span class="bg-success">Aliquam</span> felis vehicula pellentesque. Quisque hendrerit risus a porttitor luctus. Maecenas ante velit, viverra non odio feugiat, vestibulum luctus lectus. <span class="bg-primary">Maecenas</span> vel justo non dui posuere pharetra eu id urna. Ut ultricies in leo non suscipit. Proin iaculis eget tellus et luctus. Nulla malesuada nec lacus vel vestibulum. congue enim sit amet egestas fermentum. Aenean efficitur orci sed sagittis aliquam. Praesent sit amet tincidunt metus, vel porttitor purus. Nullam accumsan porttitor nulla at blandit. In vel tristique arcu.</p>
						</div>
						<div class="tab-pane" id="tab14">
							<p></p>
							<p class="text-success"><b>Fourth Step content goes here</b>
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor mollis lectus quis maximus. Curabitur semper nibh nunc, eu dapibus ipsum dapibus vestibulum. Fusce eu odio in leo fermentum efficitur. <span class="bg-success">Pellentesque</span> porttitor lorem sit amet tristique pellentesque. Vivamus ultricies nisl nec ex sagittis, sed porttitor justo commodo. Etiam sodales blandit augue, a fermentum nisi gravida non. <span class="bg-danger">Nam consectetur</span> lorem eget mattis eleifend. Sed consequat diam ut quam vestibulum, nec dapibus elit laoreet. Aenean in imperdiet tortor, ac mollis tortor. In hac habitasse platea dictumst. <span class="bg-info">Aliquam</span> erat volutpat.</p>
						</div>
						<div class="tab-pane" id="tab15">
							<p></p>
							<p class="text-info"><b>Fifth Step content goes here</b>
							</p>
							<p>Maecenas vitae volutpat leo. In metus velit, bibendum ac odio ut, condimentum congue orci. In eu faucibus eros. Curabitur vitae risus quam. Phasellus a euismod <span class="bg-success">Pellentesque</span>nisi, vel molestie ex. Integer fringilla, odio et fringilla gravida, turpis quam mattis lorem, vitae venenatis est velit vitae urna. Donec hendrerit metus <span class="bg-danger">Nam consectetur</span>nec eleifend gravida. Maecenas ante odio, vestibulum a tincidunt at, condimentum eu ante. Nulla facilisi. Nam pretium tortor ante, eget sagittis magna pellentesque sed. <span class="bg-info">Aliquam</span> Integer et felis imperdiet, ullamcorper dui id, malesuada sapien. Pellentesque id nulla tellus. Curabitur sed condimentum neque.</p>
						</div>
						<div class="tab-pane" id="tab16">
							<p></p>
							<p class="text-warning"><b>Sixth Step content goes here</b>
							</p>
							<p>Nam et mauris et felis vehicula pellentesque. Quisque hendrerit risus a porttitor luctus. Maecenas ante velit, viverra non odio feugiat, vestibulum luctus <span class="bg-success">Pellentesque</span>lectus. Maecenas vel justo non dui posuere pharetra eu id urna. Ut ultricies in leo non suscipit. Proin iaculis eget tellus et luctus. Nulla malesuada nec lacus vel vestibulum. <span class="bg-danger">Nam consectetur</span> Aliquam congue enim sit amet egestas fermentum. Aenean efficitur orci sed sagittis aliquam. <span class="bg-info">Aliquam</span> Praesent sit amet tincidunt metus, vel porttitor purus. Nullam accumsan porttitor nulla at blandit. In vel tristique arcu.</p>
						</div>
						<div class="tab-pane active" id="tab17">
							<p></p>
							<p class="text-success"><b>Seventh Step content goes here</b>
							</p>
							<p>Curabitur eget pharetra diam, id laoreet lectus. Suspendisse augue tellus, vestibulum ut cursus eu, tincidunt non odio. Praesent non pretium orci. <span class="bg-success">Pellentesque</span>Etiam vulputate commodo tellus quis vehicula. Donec in massa at arcu mattis euismod non sit amet massa. In eu tempor nisi, ac condimentum felis. Duis consequat elit neque. <span class="bg-danger">Nam consectetur</span> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <span class="bg-info">Aliquam</span> Proin pulvinar nulla lobortis pellentesque placerat. Nam vulputate lectus nec viverra condimentum. Etiam commodo dolor eu urna hendrerit, id molestie mauris mattis. Nunc nec quam aliquam, placerat magna nec, ornare purus.</p>
						</div>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a>
							</li>
							<li class="previous"><a href="#">Previous</a>
							</li>
							<li class="next last disabled" style="display:none;"><a href="#">Last</a>
							</li>
							<li class="next disabled"><a href="#">Next</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12">
						<input type='text' name='stepid' id='stepid' value='1' size='2' style='width:20px;' />
						<input type='button' class='btn btn-success' id='disable-step' value='Disable' />
						<input type='button' class='btn btn-success' id='enable-step' value='Enable' />
						<input type='button' class='btn btn-info' id='show-step' value='Show' />
						<input type='button' class='btn btn-info' id='hide-step' value='Hide' />
						<input type='button' class='btn btn-danger' id='remove-step' value='Remove' />
					</div>
				</div>
				<!-- /root wizard2 -->
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-12 -->

	<!-- ***Vertical Wizard*** -->
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Vertical Wizard
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
				<div id="tabsleft" class="tabbable tabs-left">
					<div role="tabpanel">
						<div class="row">
							<div class="col-md-3">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs knot-tabs knot-vertical-tabs">
									<li class="active"><a href="#tabsleft-tab1" data-toggle="tab">First</a></li>
									<li><a href="#tabsleft-tab2" data-toggle="tab">Second</a></li>
									<li><a href="#tabsleft-tab3" data-toggle="tab">Third</a></li>
									<li><a href="#tabsleft-tab4" data-toggle="tab">Forth</a></li>
									<li><a href="#tabsleft-tab5" data-toggle="tab">Fifth</a></li>
									<li><a href="#tabsleft-tab6" data-toggle="tab">Sixth</a></li>
									<li><a href="#tabsleft-tab7" data-toggle="tab">Seventh</a></li>
								</ul>
							</div>
							<div class="col-md-9">

								<div class="tab-content knot-tab-content vertical-content">
									<div id="bar" class="progress">
										<div class="bar progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
									</div>
									<div class="tab-pane active" id="tabsleft-tab1">
										<h3 class="text-info">I'm in Section 1.</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab2">
										<h3 class="text-info">Howdy, I'm in Section 2.</h3>
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab3">
										<h3 class="text-info">I'm in section 3</h3>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab4">
										<h3 class="text-info">I'm in section 4</h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab5">
										<h3 class="text-info">I'm in Section 5.</h3>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab6">
										<h3 class="text-info">Howdy, I'm in Section 6.</h3>
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
									</div>
									<div class="tab-pane" id="tabsleft-tab7">
										<h3 class="text-info">I'm in section 7</h3>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>  
									</div>
									<ul class="pager wizard">
										<li class="previous first disabled"><a href="javascript:;">First</a></li>
										<li class="previous disabled"><a href="javascript:;">Previous</a></li>
										<li class="next last"><a href="javascript:;">Last</a></li>
										<li class="next"><a href="javascript:;">Next</a></li>
										<li class="next finish" style="display: none;"><a href="javascript:;">Finish</a></li>
									</ul>
								</div> 
								<!-- /tab-content -->
							</div>
							<!-- /col-md-9 --> 
						</div>
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-12 -->

		</div>
		<!-- /row -->
	</div>
</div>	

@endsection

@section('scripts')

<script src="{!! url('assets/js/jquery.bootstrap.wizard.js') !!}"></script>
<script src="{!! url('assets/js/prettify.js') !!}"></script>
<script src="{!! url('assets/js/form-wizard.js') !!}"></script>

@endsection