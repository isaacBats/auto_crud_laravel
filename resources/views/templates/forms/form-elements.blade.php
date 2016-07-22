@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Form Elements</div>
			<p class="block">
				Knot elements are designed in an awesome way which gives a unified and professional look to the forms. 
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion ion-ios-list-outline page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Input Masks</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Group selection</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Various Switches</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Pickers</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="col-md-6 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Forms
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
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="RetypePassword">Retype password</label>
					<input type="password" class="form-control" id="RetypePassword" placeholder="Password">
				</div>                            
				<div class="form-group">
					<label for="NameInput">Name</label>
					<input type="text" class="form-control" id="NameInput" placeholder="name">
				</div>                            
				<div class="checkbox checkbox-primary">
					<input id="remember" class="styled" type="checkbox">
					<label for="remember">
						Remember
					</label>
				</div>
				<button type="submit" class="btn btn-success">Login into website</button>              
			</form>
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
				Horizontal Forms
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
			<p>Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.</p>
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="inputUsername" class="col-sm-2 control-label">Username</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputUsername" placeholder="username">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPetName" class="col-sm-2 control-label">Pet name</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPetName" placeholder="petname">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox checkbox-primary">
							<input id="remember1" class="styled" type="checkbox">
							<label for="remember1">
								Remember
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Lets Go</button>
					</div>
				</div>
			</form>
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
				Inline Forms
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
			<p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
			<form class="form-inline">
				<div class="form-group">
					<label for="exampleInputName2">Name</label>
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg">Send invitation</button>	
				</div>
				
			</form>
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
				Inline Forms
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
			<p>Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. <strong>This only applies to forms within viewports that are at least 768px wide.</strong></p>
			<form class="form-inline">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail3">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label class="sr-only" for="exampleInputPassword3">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
				</div>
				<div class="checkbox checkbox-primary">
					<input id="remember2" class="styled" type="checkbox">
					<label for="remember2">
						Remember
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-danger btn-lg">Sign in</button>	
				</div>
				
			</form>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-6 -->


<div class="col-md-12 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Inline Forms
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
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-2 control-label">Default-input</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Text input">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Default Toggle Switch</label>
					<div class="col-sm-10">                    
						<input type="checkbox" class="js-switch" checked />                                  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Disabled Toggle Switch</label>
					<div class="col-sm-10">                    
						<input type="checkbox" class="js-switch" checked disabled />                                  
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Toggle Switch colors</label>
					<div class="col-sm-10">
						<input type="checkbox" class="success-toggle" checked/>              
						<input type="checkbox" class="danger-toggle" checked/>              
						<input type="checkbox" class="warning-toggle" checked/>                                                            
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Toggle Switch size</label>
					<div class="col-sm-10">
						<input type="checkbox" class="js-switch" checked />
						<input type="checkbox" class="small-toggle" checked/> 
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Disabled input</label>
					<div class="col-sm-10">
						<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Focused input</label>
					<div class="col-sm-10">
						<input class="form-control" id="focusedInput" type="text" value="This is focused...input">
					</div>
				</div>

				<div class="form-group has-success">
					<label class="col-sm-2 control-label">Input with success</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputSuccess" placeholder="for success  key">
					</div>
				</div>

				<div class="form-group has-warning">
					<label class="col-sm-2 control-label">Input with warning</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputWarning" placeholder="for  obselete key">
					</div>
				</div>

				<div class="form-group has-error">
					<label class="col-sm-2 control-label ">Input with error</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputError" placeholder="for wrong input error">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">.input-default</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" placeholder="Default input">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">.input-lg</label>
					<div class="col-sm-10">
						<input class="form-control input-lg" type="text" placeholder=".input-lg">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">.input-sm</label>
					<div class="col-sm-10">
						<input class="form-control input-sm" type="text" placeholder=".input-sm">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">.input-lg</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Text input">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Default-input</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Text input">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Textarea</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Selection</label>
					<div class="col-sm-10">
						<select class="form-control input-sm">
							<option>option one</option>
							<option>option two</option>
							<option>option three</option>
							<option>option four</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Password strength</label>
					<div class="col-sm-10">
						<div class="input-group"> 
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="text" class="form-control" name="password" id="password" placeholder="Password" required data-toggle="popover" title="Password Strength" data-content="Enter Password...">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Submit</label>
					<div class="col-sm-10">
						<label>
							<button type="button" class="btn btn-success">Submit</button>
						</label>
					</div>
				</div>


				<div class="form-group">
					<label class="col-sm-2 control-label">Checkboxes and Radio buttons</label>
					<div class="col-sm-10">
						<div class="checkbox">
							<input id="checkbox1" class="styled" type="checkbox">
							<label for="checkbox1">
								Default
							</label>
						</div>
						<div class="checkbox checkbox-primary">
							<input id="checkbox2" class="styled" type="checkbox">
							<label for="checkbox2">
								Primary
							</label>
						</div>
						<div class="checkbox checkbox-success">
							<input id="checkbox3" class="styled" type="checkbox">
							<label for="checkbox3">
								Success
							</label>
						</div>
						<div class="checkbox checkbox-info">
							<input id="checkbox4" class="styled" type="checkbox">
							<label for="checkbox4">
								Info
							</label>
						</div>
						<div class="checkbox checkbox-warning">
							<input id="checkbox5" type="checkbox" class="styled">
							<label for="checkbox5">
								Warning
							</label>
						</div>
						<div class="checkbox checkbox-danger">
							<input id="checkbox6" type="checkbox" class="styled" checked>
							<label for="checkbox6">
								checked
							</label>
						</div>
						<div class="checkbox checkbox-warning">
							<input id="checkbox7" type="checkbox" class="styled" disabled>
							<label for="checkbox7">
								Disabled
							</label>
						</div>

						<h4>Radio buttons</h4>
						<div class="radio">
							<input type="radio" name="radio1" id="radio1" value="option1" checked="">
							<label for="radio1">
								Small
							</label>
						</div>
						<div class="radio">
							<input type="radio" name="radio1" id="radio2" value="option2">
							<label for="radio2">
								Big
							</label>
						</div>
						<div class="radio radio-danger">
							<input type="radio" name="radio2" id="radio3" value="option1">
							<label for="radio3">
								Next
							</label>
						</div>
						<div class="radio radio-danger">
							<input type="radio" name="radio2" id="radio4" value="option2" checked="">
							<label for="radio4">
								One
							</label>
						</div>


						<h4>Inline buttons</h4>
						<div class="checkbox checkbox-inline checkbox-warning">
							<input type="checkbox" id="inlineCheckbox1" value="option1">
							<label for="inlineCheckbox1"> First </label>
						</div>
						<div class="checkbox checkbox-inline checkbox-primary">
							<input type="checkbox" id="inlineCheckbox2" value="option1">
							<label for="inlineCheckbox2"> second </label>
						</div>
						<div class="checkbox checkbox-inline checkbox-danger">
							<input type="checkbox" id="inlineCheckbox3" value="option1">
							<label for="inlineCheckbox3"> Third </label>
						</div>

						<h4>Inline Radio buttons</h4>
						<div class="radio radio-warning radio-inline">
							<input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
							<label for="inlineRadio1"> Inline One </label>
						</div>
						<div class="radio radio-inline">
							<input type="radio" id="inlineRadio2" value="option1" name="radioInline">
							<label for="inlineRadio2"> Inline Two </label>
						</div>
						<div id="summernote" class="me"></div>
					</div>            
				</div>    
			</form>
			<div class="form-horizontal">
				<label class="col-sm-2 control-label">Multiple Form Fields</label>
				<div class="col-sm-10">
					<div id="fields">
						<div class="controls"> 
							<form role="form" autocomplete="off">
								<div class="entry input-group col-xs-3">
									<input class="form-control" name="fields[]" type="text" placeholder="Type something" />
									<span class="input-group-btn">
										<button class="btn btn-success btn-add btn-lg" type="button">
											<span class="glyphicon glyphicon-plus"></span>
										</button>
									</span>
								</div>
							</form>
							<small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-12 -->

<div class="col-md-6 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Select2
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
			<div class="col-md-6">
				<!-- xselectize form   -->
				<div class="form-group">
					<label class="control-label">Select:</label>
					<select class="name_search form-control">
						<option value="1"> option 1 </option>
						<option value="2"> option 2 </option>
						<option value="3"> option 3 </option>
						<option value="4"> option 4 </option>
						<option value="5"> option 5 </option>
						<option value="6"> option 6 </option>
						<option value="7"> option 7 </option>
					</select>
				</div>
				<!-- xselect form   -->

				<!-- xselect form with input group   -->
				<div class="form-group">
					<label class="control-label">Select with input group:</label>
					<div class="input-group">
						<span class="input-group-addon bg">
							<i class="ion-plus"></i>
						</span>
						<select class="name_search form-control">
							<option value="1"> option 1 </option>
							<option value="2"> option 2 </option>
							<option value="3"> option 3 </option>
							<option value="4"> option 4 </option>
							<option value="5"> option 5 </option>
							<option value="6"> option 6 </option>
							<option value="7"> option 7 </option>
						</select>
					</div>
					<!-- /input-group -->
				</div>
				<!-- xselect form with input group   -->

				<!-- xselectize form multiple  -->
				<div class="form-group">
					<label class="control-label">Select Multiple:</label>
					<select class="multi form-control" multiple>
						<option value="1"> option 1 </option>
						<option value="2"> option 2 </option>
						<option value="3"> option 3 </option>
						<option value="4"> option 4 </option>
						<option value="5"> option 5 </option>
						<option value="6"> option 6 </option>
						<option value="7"> option 7 </option>
					</select>
				</div>
				<!-- xselect form multiple  -->

				<!-- xselectize form 2 keywords  -->
				<div class="form-group">
					<label class="control-label">Select (Atleast 2 keywords):</label>
					<select class="mintwo form-control">
						<option value="1"> option 1 </option>
						<option value="2"> option 2 </option>
						<option value="3"> option 3 </option>
						<option value="4"> option 4 </option>
						<option value="5"> option 5 </option>
						<option value="6"> option 6 </option>
						<option value="7"> option 7 </option>
					</select>
				</div>
				<!-- xselect form 2 keywords  -->

				<!-- xselectize form multiple  -->
				<div class="form-group">
					<label class="control-label">Select Multiple (Maximum 3 Items are allowed):</label>
					<select class="maxallowed form-control" multiple>
						<option value="0"> option 1 </option>
						<option value="1"> option 2 </option>
						<option value="2"> option 3 </option>
						<option value="3"> option 4 </option>
						<option value="4"> option 5 </option>
						<option value="5"> option 6 </option>
						<option value="6"> option 7 </option>
					</select>
				</div>
				<!-- xselect form multiple  -->

				<!-- xmulti select  -->
				<p class="control-label">Multi Select:</p>
				<select id='pre-selected-options' multiple='multiple'>
					<option value='option_1' selected>option 1</option>
					<option value='option_2'>option 2</option>
					<option value='option_3'>option 3</option>
					<option value='option_4' selected>option 4</option>
					<option value='option_5'>option 5</option>
					<option value='option_6'>option 6</option>
					<option value='option_7'>option 7</option>
					<option value='option_8'>option 8</option>
				</select>
				<!-- xmulti select  -->


			</div>
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
				Date Picker
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
			<!-- xdefault date picker  -->
			<div class="picker">
				<div class="col-md-5">
					<p class="control-label align-rt">Default Date Picker</p>
				</div>
				<div class="col-md-7">
					<div class="datepicker"></div>
				</div>
			</div>
			<!-- xdefault date picker  -->

			<!-- xdate picker popup  -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-5">
						<label class="control-label align-rt">Date Picker Popup</label>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" id="date-popup" data-provide="datepicker">

					</div>
				</div>
			</div>
			<!-- xdate picker popup  -->

			<!-- xdate picker popup With Input group  -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-5">
						<label class="control-label align-rt">Date Picker Popup With Input group</label>
					</div>
					<div class="col-md-7" id="date-popup-group">
						<div class="input-group date">
							<input type="text" class="form-control" data-provide="datepicker">
							<span class="input-group-addon bg">
								<i class="ion ion-ios-calendar-outline"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- xdate picker popup With Input group  -->

			<!-- xdate picker popup With Start and End  -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-5">
						<label class="control-label align-rt">Date Picker Popup With Start and End Date</label>
					</div>
					<div class="col-md-7" id="date-popup-startend">
						<div class="input-group date">
							<input type="text" class="form-control">
							<span class="input-group-addon bg">
								<i class="ion ion-ios-calendar-outline"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- xdate picker popup With Start and End  -->

			<!-- xdate picker popup With disabled  -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-5">
						<label class="control-label align-rt">Date Picker Popup With disabled</label>
					</div>
					<div class="col-md-7" id="date-disabled">
						<div class="input-group date">
							<input type="text" class="form-control">
							<span class="input-group-addon bg">
								<i class="ion ion-ios-calendar-outline"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- xdate picker popup With disabled  -->              

		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-6 -->


<div class="col-md-12 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Input masks
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

			<div class="col-md-6">
				<!-- xDate -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Date</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="date">
								<span class="help-block">Date format: mm/dd/yyy</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xDate -->

				<!-- xphone -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Phone</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="phone">
								<span class="help-block">Phone format: (999) 999-9999</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xphone -->

				<!-- xphoneext -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Phone + Ext</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="phoneext">
								<span class="help-block">Phone + Ent: (999) 999-9999? x99999</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xphoneext -->

				<!-- xtin -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Tin</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="tin">
								<span class="help-block">Tin format: 99-9999999</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xtin -->
			</div>

			<div class="col-md-6">   
				<!-- xssn -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">SSN</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="ssn">
								<span class="help-block">SSN format: 999-99-9999</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xssn -->

				<!-- xPercent -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Percent</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="percent">
								<span class="help-block">Percent format: 99%</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xPercent -->

				<!-- xcurrency -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Currency</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="currency">
								<span class="help-block">Currency format: $999,999,999.00</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xcurrency -->

				<!-- xproductkey -->
				<div class="picker">
					<div class="form-group">
						<div class="col-md-3">
							<label class="control-label align-rt">Product Key</label>
						</div>
						<div class="col-md-9">
							<div class="input-group date-block">
								<input type="text" class="form-control" id="productkey">
								<span class="help-block">Product Key format: a*-999-a999</span>
							</div>
						</div>
					</div>
				</div>
				<!-- xproductkey -->
			</div>


		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-12 -->


<div class="col-md-12 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Input masks
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
			<!-- xColor Picker -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label align-rt">Color Picker</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="color-default form-control">
					</div>
				</div>
			</div>
			<!-- xColor Picker -->

			<!-- xColor Picker at Addon -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label align-rt">Color Picker at Addon</label>
					</div>
					<div class="col-md-9">
						<div class="input-group inputgrp">
							<input type="text" class="form-control" />
							<span class="input-group-addon bg"><i class="color-picker-addon"></i></span>
						</div>
					</div>
				</div>
			</div>
			<!-- xColor Picker at Addon -->

			<!-- xColor Picker Horizontal -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label align-rt">Color Picker Horizontal</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="color-default form-control" data-horizontal="true">
					</div>
				</div>
			</div>
			<!-- xColor Picker Horizontal-->

			<!-- xColor Picker RGBA -->
			<div class="picker">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label align-rt">Color Picker RGBA</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" id="color-rgb">
					</div>
				</div>
			</div>
			<!-- xColor Picker RGBA -->

		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-12 -->

@endsection

@section('scripts')

<script src="{!! url('assets/js/select2.min.js') !!}"></script>
<script src="{!! url('assets/js/jquery.multi-select.min.js') !!}"></script>
<script src="{!! url('assets/js/form-elements.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! url('assets/js/jquery.maskedinput.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap-colorpicker.min.js') !!}"></script>
<script src="{!! url('assets/js/summernote.min.js') !!}"></script>
<script src="{!! url('assets/js/dynamic.form-fields.min.js') !!}"></script>

<script>

	$(document).ready(function(){

		$('#summernote').summernote();
		var elem = document.querySelector('.success-toggle');
		if(elem)
		{
			var switchery = new Switchery(elem, { color: '#00B5B5', jackColor: '#FFFFFF' });        
		}

		var elem1 = document.querySelector('.warning-toggle');
		if(elem1)
		{
			var switchery = new Switchery(elem1, { color: '#F7CA18', jackColor: '#FFFFFF' });        
		}

		var elem2 = document.querySelector('.danger-toggle');
		if(elem2)
		{
			var switchery = new Switchery(elem2, { color: '#FC6042', jackColor: '#FFFFFF' });        
		}

		var elem3 = document.querySelector('.small-toggle');
		if(elem3)
		{
			var switchery = new Switchery(elem3, { size: 'small' });
		}

		var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
		elems.forEach(function(html) {
			var switchery = new Switchery(html);                      
		});

        //minimum 8 characters
        var bad = /(?=.{8,}).*/;
        //Alpha Numeric plus minimum 8
        var good = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{8,}$/;
        //Must contain at least one upper case letter, one lower case letter and (one number OR one special char).
        var better = /^(?=\S*?[A-Z])(?=\S*?[a-z])((?=\S*?[0-9])|(?=\S*?[^\w\*]))\S{8,}$/;
        //Must contain at least one upper case letter, one lower case letter and (one number AND one special char).
        var best = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{8,}$/;

        $('#password').on('keyup', function () {
        	var password = $(this);
        	var pass = password.val();
        	var passLabel = $('[for="password"]');
        	var stength = 'Weak';
        	var pclass = 'danger';
        	if (best.test(pass) == true) {
        		stength = 'Very Strong';
        		pclass = 'success';
        	} else if (better.test(pass) == true) {
        		stength = 'Strong';
        		pclass = 'warning';
        	} else if (good.test(pass) == true) {
        		stength = 'Almost Strong';
        		pclass = 'warning';
        	} else if (bad.test(pass) == true) {
        		stength = 'Weak';
        	} else {
        		stength = 'Very Weak';
        	}

        	var popover = password.attr('data-content', stength).data('bs.popover');
        	popover.setContent();
        	popover.$tip.addClass(popover.options.placement).removeClass('danger success info warning primary').addClass(pclass);

        });

        $('input[data-toggle="popover"]').popover({
        	placement: 'top',
        	trigger: 'focus'
        });
    });

</script>

@endsection