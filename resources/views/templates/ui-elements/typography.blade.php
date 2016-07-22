@extends('layouts.app')

@section('content')
	
<div class="page_header">
            <div class="col-md-4">
              <div class="pull-left">
                  <div class="main-text">Typography</div>
                  <p class="block">
                      The art and technique of arranging type. Most people never think about typography, but we value it.
                  </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="text-center">
                <i class="ti-smallcap page_header_icon"></i>
                
              </div>
            </div>

            <div class="col-md-4">
              <div class="right pull-right">
                  <ul class="right_bar">
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Headings</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Inline Text Elements</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Alignment Classes</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;List Types & Groups</li>
                      <li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
                  </ul>
              </div>
            </div>
        </div>
        <!-- /pageheader -->       
		
		<!-- *** Headings Panel *** -->
		<div class="col-md-6 panel-parent">
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Headings
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
					<h1>h1.Plays major role</h1>
					<h2>h2.Plays major role</h2>
					<h3>h3.Plays major role</h3>    
					<h4>h4.Plays major role</h4>
					<h5>h5.Plays major role</h5>
					<h6>h6.Plays major role</h6>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-6 -->

		<!-- *** Custom Headings Panel *** -->
		<div class="col-md-6 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Custom Headings
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
					<h1 class="text-danger">Text in Red by.text-primary</h1>
					<h2 class="text-info">Text in Blue by .text-info</h2>
					<h3 class="text-warning">Text in Orange by .text-warning</h3>    
					<h4 class="text-default">Text in black by .text-default</h4>
					<h5 class="text-success">Text in Green by .text-success</h5>
					<h6 class="text-muted">Text in Grey by .text-inverse</h6>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-6 -->

		<!-- *** Blockquote Panel *** -->
		<div class="col-md-12 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Blockquote
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
					<blockquote>
						<p>This is default blockquote Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					</blockquote>
					<blockquote class="blockquote pull-right text-warning">
						<p>True art is characterized by an irresistible urge in the creative artist.</p>
						<small>Albert Einstein<cite title="http://www.brainyquote.com/quotes/authors/a/albert_einstein_3.html#3egzLYgYMT65zWoi.99">Source Title</cite></small>
					</blockquote>
					<blockquote class="text-danger">
						<p>As far as the laws of mathematics refer to reality, they are not certain, and as far as they are certain, they do not refer to reality. </p>
						<small>Albert Einstein<cite title="http://www.brainyquote.com/quotes/authors/a/albert_einstein_4.html#gzZhjKCTsBRK78Kj.99">Source Title</cite></small>
					</blockquote>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-12 -->

		<!-- *** Inline Text Elements Panel *** -->
		<div class="col-md-12 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Inline Text Elements
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
					<table class="table table-bordered">
						<thead>
							<tr>
								<th style="width:50%;">Text Type</th>
								<th style="width:50%;">Example</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marked Text:</td>
								<td>You can use the mark tag to <mark>highlight</mark> text.</td>
							</tr>
							<tr>
								<td>Strikethrough text:</td>
								<td><s>This line of text is meant to be treated as no longer accurate.</s></td>
							</tr>
							<tr>
								<td>Underlined text:</td>
								<td><u>This line of text will render as underlined</u></td>
							</tr>
							<tr>
								<td>Small Text:</td>
								<td><small>This line of text is meant to be treated as fine print.</small></td>
							</tr>
							<tr>
								<td>Bold Text:</td>
								<td><strong>rendered as bold text</strong></td>
							</tr>
							<tr>
								<td>Italics Text:</td>
								<td><em>rendered as italicized text</em></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-12 -->

		<!-- *** Alignment Classes Panel *** -->
		<div class="col-md-3 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Alignment Classes
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
					<p class="text-left text-success">.text-left</p><br>
					<p class="text-center text-warning">.text-center</p><br>
					<p class="text-right text-primary">.text-right</p>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-3 -->

		<!-- *** List Types Panel *** -->
		<div class="col-md-9 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						List Types
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
					<div class="row list-types">
						<div class="col-md-4">
							<ul class="text-success">
								<li>This text is in unordered list</li>
								<li>
									This text is in unordered list
									<ul>
										<li class="text-danger">subtext in unordered</li>
										<li class="text-danger">subtext in unordered</li>
										<li class="text-danger">subtext in unordered</li>
									</ul>
								</li>
								<li>This text is in unordered list</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ol class="text-warning list-unstyled">
								<li>This text is in Ordered list</li>
								<li>
									This text is in ordered list
									<ol class="text-danger ">
										<li>sublist in ordered</li>
										<li>sublist in ordered</li>
										<li>sublist in ordered</li>
									</ol>
								</li>
								<li>This text is in ordered list</li>
							</ol>
						</div>
						<div class="col-md-4">
							<ul class="text-info">
								<li>This text is in unstyled list</li>
								<li>
									This text is in ordered list
									<ul class="text-danger ">
										<li>sublist in unstyled</li>
										<li>sublist in unstyled</li>
										<li>sublist in unstyled</li>
									</ul>
								</li>
								<li>This text is in unstyled list</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-9 -->

		<!-- *** List Groups Panel *** -->
		<div class="col-md-12 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						List Groups
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
							<ul class="list-group ">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge bg-warning">14</span>
									Lorem ipsum is dummy text
								</li>
								<li class="list-group-item">
									<span class="badge bg-primary">15</span>
									Lorem ipsum is dummy text
								</li>
								<li class="list-group-item">
									<span class="badge bg-danger">15</span>
									Lorem ipsum is dummy text
								</li>
								<li class="list-group-item">
									<span class="badge bg-info">4</span>
									Lorem ipsum is dummy text
								</li>
								<li class="list-group-item">
									<span class="badge bg-success">34</span>
									Lorem ipsum is dummy text
								</li>
							</ul>
						</div>
					</div><!-- /row -->
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-12 -->

		<!-- *** Description Data Panel *** -->
		<div class="col-md-12 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Description Data
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
							<dl>
								<dt>Description lists</dt>
								<dd>A description list is perfect for defining terms.</dd>
							</dl>
							<dl>
								<dt>Euismod</dt>
								<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.</dd>
							</dl>
							<dl>
								<dt>Malesuada porta</dt>
								<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
							</dl>
						</div>  
						<!-- /col-md-4 -->

						<div class="col-md-8">
							<dl class="dl-horizontal">
								<dt>Description lists</dt>
								<dd>A description list is perfect for defining terms.</dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Euismod</dt>
								<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.</dd>
							</dl>
							<dl class="dl-horizontal">
								<dt>Malesuada porta</dt>
								<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
							</dl>
						</div>
						<!-- /col-md-8 -->
					</div>
					<!-- /row -->
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-12 -->

		<!-- *** Address Panel *** -->
		<div class="col-md-4 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Addresses
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
					<address>
						<strong>BootstrapGuru, Inc.</strong><br>
						Andhra Pradesh, India<br>
						<abbr title="Phone">P:</abbr> (999) 999-9999
					</address>

					<address>
						<strong>Full Name</strong><br>
						<a href="mailto:#">abc@example.com</a>
					</address>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-4 -->

		<!-- *** Abbreviation Panel *** -->
		<div class="col-md-4 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Basic Abbreviation
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
					<p>An abbreviation of our company is <abbr title="BootstrapGuru">BSG</abbr></p>
					<p>An abbreviation of the word attribute is <abbr title="Attribute">attr</abbr></p>
					<p><abbr title="HyperText Markup Language">HTML</abbr> is the best thing since sliced bread.</p>
					<p>An abbreviation of the word Themeforest is <abbr title="Themeforest">TF</abbr></p>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-4 -->

		<!-- *** Emphasis Panel *** -->
		<div class="col-md-4 panel-parent">
			<!-- panel -->
			<div class="panel knot-panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Emphasis
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
					<p><small>This line of text is meant to be treated as fine print.</small></p>
					<p>The following snippet of text is <strong>rendered as bold text.</strong></p>
					<p>The following snippet of text is <em>rendered as italicized text.</em></p>
					<p>An abbreviation of the word <strong>Themeforest</strong> is <abbr title="Themeforest">TF</abbr> <br></p>
				</div>
			</div>
			<!-- /panel -->
		</div>
		<!-- col-md-4 -->	

@endsection