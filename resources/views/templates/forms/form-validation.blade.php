@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Form Validation</div>
			<p class="block">
				We have included all types of validations which you can use them for all types of forms in your template.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-alert page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Suggestions</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Date pickers</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Password Strength</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Type Validation</li>
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
					Form Validation
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
				<form id="form-a" role="form" class="form form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="inline-suggestions">Inline suggestions:</label>
						<div class="col-sm-8">
							<input name="inline suggestions" type="text" id="inline-suggestions" class="form-control" data-suggestions="Monkey, Horse, Hound, Fox, Tiger, Elephant, Alligator, Ant, Bat, Banana, Cat, Cell Phone, Dog, Deer, Goat, George, India,Ireland, Jug, Jackle, Kite, King, Leapord, Lion, Moon,Mentor, Night, Notes, Oxford, Parrot, Queen, Rat, Square, Tiger, Umbrella, Van, Watch, Xenon, Zebra" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="country-suggestions">Country suggestions:</label>
						<div class="col-sm-8">
							<input name="country suggestions" data-validation="country" type="text" id="country-suggestions" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="country-suggestions">Swedish county suggestions:</label>
						<div class="col-sm-8">
							<input name="Swedish county suggestion" data-validation="swecounty" type="text" id="swedish-county-suggestions" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Year:</label>
						<div class="col-sm-8">
							<input name="birth" class="form-control" data-validation="date" data-validation-format="yyyy/mm/dd" data-suggestions="2014/01/15,2014/01/16,2014/01/17" />
						</div>
						<span class="help-block">yyyy/mm/dd</span>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Number 0-10 :</label>
						<div class="col-sm-8">
							<input name="floats" class="form-control"
							data-validation="number"
							data-validation-allowing="range[0;10], float"
							data-validation-decimal-separator=","
							/>
						</div>
						<span class="help-block">(accepting floats with comma)</span>
					</div>

					<div class="form-group password-strength">
						<label class="col-sm-2 control-label" for="password">Password Strength:</label>
						<div class="col-sm-8">
							<input name="password" type="password" id="password" class="form-control" data-validation="strength" data-validation-strength="3" />
						</div>
						<span class="help-block">(only strong)</span>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Alphanumeric and -_ and spaces</label>
						<div class="col-sm-8">
							<input name="alphanumeric with spaces" class="form-control" data-validation="alphanumeric" data-validation-allowing="-_ " />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Alphanumeric only</label>
						<div class="col-sm-8">
							<input name="aplhanumeric only" class="form-control" data-validation="alphanumeric" />
						</div>
					</div>

					<div class="form-group checkbox">
						<div class="col-sm-offset-2 col-sm-8">
							<input name="checkbox" id="c4" class="form-control" type="checkbox" data-validation="required" />
							<label for="c4"><span></span>Must be checked</label>
						</div>
					</div>

					<div class="form-group check-radio">
						<label class="col-sm-2 control-label">Must choose one:</label>
						<div class="col-sm-8">
							<ul class="list-inline checkboxes-radio">
								<li class="ms-hover">
									<div class="radio">
										<input type="radio" name="radio1" data-validation="required" id="c5">
										<label for="c5">
											Success
										</label>
									</div>
								</li>
								<li class="ms-hover">
									<div class="radio">
										<input type="radio" name="radio1" id="c7">
										<label for="c7">
											Danger
										</label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input type="radio" name="radio1" id="c8">
										<label for="c8">
											Warning
										</label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input type="radio" name="radio1" id="c9">
										<label for="c9">
											Info
										</label>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Even numbers only</label>
						<div class="col-sm-8">
							<input name="even numbers" class="form-control" data-validation="even_number" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Make a choice:</label>
						<div class="col-sm-8">
							<select class="name_search form-control" name="choice" data-validation="required" data-validation-error-msg="Please make a choice">
								<option value=""> - - Choose - - </option>
								<option> option 1 </option>
								<option> option 2 </option>
								<option> option 3 </option>
								<option> option 4 </option>
								<option> option 5 </option>
								<option> option 6 </option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Text :</label>
						<div class="col-sm-8">
							<textarea id="text-area" name="some-text" class="form-control text-area" cols="30" rows="10" placeholder="Address Form"></textarea>
						</div>
						<span class="help-block">(<span id="max-len">20</span> chars left)</span>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Server validation:</label>
						<div class="col-sm-8">
							<input class="form-control" name="code" value="secret"
							data-validation-helssp="The word is &quot;secret&quot;"
							data-validation="server"
							data-validation-url="http://formvalidator.net/validate-email.php" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">File Validation:</label>
						<div class="col-sm-8">
							<input type="file" class="filestyle" data-icon="false" name="some-file1" data-validation="size mime required"
							data-validation-error-msg-size="The file cant be larger than 400kb"
							data-validation-error-msg="You must upload an image file (max 400 kb)"
							data-validation-allowing="jpg, png, ico"
							data-validation-max-size="400kb" >
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">File Name:</label>
						<div class="col-sm-8">
							<input type="text" name="some-file2" class="form-control"
							data-validation="extension required"
							data-validation-error-msg="You must write a file name with extension jpg|png|ico"
							data-validation-allowing="jpg, png, ico"
							/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">
							Callback validation, set this value to &quot;1&quot; and
							validation will fail
						</label>
						<div class="col-sm-8">
							<input id="callback" class="form-control" />
						</div>
					</div>

					<div class="form-group check-boxes">
						<label class="col-sm-2 control-label">Check Group:</label>
						<div class="col-sm-8">
							<ul class="list-inline checkboxes-radio">
								<li>
									<div class="checkbox checkbox-primary">
										<input id="c11" class="styled" type="checkbox" name="box" value="1" data-validation="checkbox_group" data-validation-qty="1-2">
										<label for="c11">
											1
										</label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-primary">
										<input id="c12" class="styled" type="checkbox" name="box" value="2">
										<label for="c12">
											2
										</label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-primary">
										<input id="13" class="styled" type="checkbox" name="box" value="3">
										<label for="13">
											3
										</label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-primary">
										<input id="c14" class="styled" type="checkbox" name="box" value="4">
										<label for="c14">
											4
										</label>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-primary">
										<input id="c15" class="styled" type="checkbox" name="box" value="5">
										<label for="c15">
											5
										</label>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<input type="submit" class="btn btn-success pull-right">
						</div>
						<div class="col-md-3">
							<button class="btn btn-lg btn-info pull-right" type="button"
							onclick="alert('Form a is ' + ( $('#form-a').isValid({}, {}, false) ? 'VALID':'NOT VALID'));">
							Test validation via js <br> (<strong>without error messages</strong>)
						</button>
					</div>
					<div class="col-md-3">
						<button class="btn btn-lg btn-warning" type="button"
						onclick="alert('Form a is ' + ( $('#form-a').isValid() ? 'VALID':'NOT VALID'));">
						Test validation via js <br> (showing error messages)
					</button>
				</div>
				<div class="col-md-3">
					<input type="reset" class="btn btn-danger">
				</div>
			</div>

		</form>
		<hr />
		<h4>Password Validation Form</h4>
		<form id="form-b" class="form form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Number</label>
				<div class="col-sm-8">
					<input name="test" class="form-control" data-validation="number" type="text" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-8">
					<input name="pass" class="form-control" data-validation="confirmation" type="password" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Confirm Password</label>
				<div class="col-sm-8">
					<input name="pass_confirmation" class="form-control" type="password" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-8">
					<input type="submit" class="btn btn-success">
					<input type="reset" class="btn btn-warning">
				</div>
			</div>
		</form>
		<hr />

		<form id="form-d" class="form form-horizontal">
			<h4>HTML5 attributes</h4>
			<div class="form-group">
				<label class="col-sm-2 control-label">type="email"</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" required="required" list="mejl" />
					<datalist id="mejl">
						<option value="Test">Test</option>
						<option value="test2">test2</option>
						<option value="test3">test3</option>
					</datalist>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">type="url" (optional)</label>
				<div class="col-sm-8">
					<input type="url" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">type="number"</label>
				<div class="col-sm-8">
					<input type="number" class="form-control" required="required" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">type="number" [Max:30]</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" required="required" maxlength="30" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">type="number" range[-5;5]</label>
				<div class="col-sm-8">
					<input type="number" class="form-control" min="-5" max="5" required="required" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">pattern="^([a-z]+)$"</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="some-colorz" list="some-colorz" pattern="^([a-z]+)$" required="required" />
					<datalist id="some-colorz" style="display: none">
						<option value="Green">Green</option>
						<option value="Blue">Blue</option>
						<option value="Red">Red</option>
						<option value="Black">Black</option>
						<option value="White">White</option>
					</datalist>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-8">
					<input type="submit" class="btn btn-success">
					<input type="reset" class="btn btn-danger">
				</div>
			</div>
		</form>
	</div>
</div>
<!-- /panel -->
</div>
<!-- /col-md-12 -->
</div>
<!-- /row -->

@endsection

@section('scripts')

<script src="{!! url('assets/js/bootstrap-filestyle.min.js') !!}"></script>
<script src="{!! url('assets/js/form-validation/jquery.form-validator.min.js') !!}"></script>
<script src="{!! url('assets/js/form-validation.min.js') !!}"></script>

@endsection
