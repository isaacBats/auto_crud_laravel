@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">Dynamic Tables</div>
			<p class="block">
				The data in the table will be updated dynamically with single click which gives good interface to the user.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ti-widgetized page_header_icon"></i>
			
		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Mindup Editing</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Sorting</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Pagination</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Dynamic Search</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->        
<div class="col-md-12 panel-parent">
	<!-- panel starts here-->
	<div class="panel knot-panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Basic tables
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
			<table id="mainTable" class="table table-striped" style="cursor: pointer;">
				<thead>
					<tr>
						<th>Technology</th>
						<th>Cost</th>
						<th>Profit</th>
						<th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td tabindex="1">asdasd</td>
						<td tabindex="1">100</td>
						<td tabindex="1">200</td>
						<td tabindex="1">0</td>
					</tr>
					<tr>
						<td tabindex="1">css</td>
						<td tabindex="1">330</td>
						<td tabindex="1">240</td>
						<td tabindex="1">1</td>
					</tr>
					<tr>
						<td tabindex="1">Jquery</td>
						<td tabindex="1">430</td>
						<td tabindex="1">540</td>
						<td tabindex="1">3</td>
					</tr>
					<tr>
						<td tabindex="1">.Net</td>
						<td tabindex="1">100</td>
						<td tabindex="1">200</td>
						<td tabindex="1">0</td>
					</tr>
					<tr>
						<td tabindex="1">PHP</td>
						<td tabindex="1">330</td>
						<td tabindex="1">240</td>
						<td tabindex="1">1</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th><strong>TOTAL</strong>
						</th>
						<th>1290</th>
						<th>1420</th>
						<th>5</th>
					</tr>
				</tfoot>
			</table>
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
				Basic tables
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
			<table class="table table-bordered table-hover table-striped display" id="example">
				<thead>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>Trident</td>
						<td><span class="label bg-info">Internet Explorer 4.0</span></td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center"><span class="badge bg-warning">X</span></td>
					</tr>
					<tr class="even gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center"><span class="badge bg-info">C</span>
						</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td><span class="label bg-danger">Internet
							Explorer 5.5</span>
						</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td><span class="label bg-primary">Internet Explorer 7</span>
						</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td><span class="label bg-warning">AOL browser (AOL desktop)</span>
						</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-info">Firefox 1.0</span>
						</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-info">Firefox 2.0</span>
						</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-success">Camino 1.0</span>
						</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge bg-warning">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-success">Netscape 7.2</span>
						</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center"><span class="badge bg-info">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-gray">Netscape Navigator 9</span>
						</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge bg-danger">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="label bg-info">Mozilla 1.0</span>
						</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center"><span class="badge bg-primary">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-info">Mozilla 1.2</span>
						</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-info">Mozilla 1.4</span>
						</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center"><span class="badge bg-success">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-info">Mozilla 1.6</span>
						</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center"><span class="badge bg-danger">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-info">Mozilla 1.8</span>
						</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge bg-info">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-warning">Seamonkey 1.1</span>
						</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge bg-primary">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td><span class="status status-danger">Epiphany 2.20</span>
						</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center"><span class="badge bg-success">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td><span class="status status-danger">Safari 1.2</span>
						</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center"><span class="badge bg-warning">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center"><span class="badge bg-info">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td><span class="status status-danger">Safari 2.0</span>
						</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center"><span class="badge bg-warning">x</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center"><span class="badge bg-success">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td><span class="status status-info">OmniWeb 5.5</span></td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td><span class="status status-purple">iPod Touch / iPhone</span>
						</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center"><span class="badge bg-warning">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center"><span class="badge bg-primary">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td><span class="status status-info">Opera 7.0</span>
						</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-success">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td><span class="status status-info">Opera 8.0</span>
						</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td><span class="status status-info">Opera 9.0</span>
						</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-info">X</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td><span class="status status-info">Opera 9.5</span>
						</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-danger">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td><span class="status status-primary">Nokia N800</span>
						</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center"><span class="badge bg-info">C/A<sup>1</sup></span>
						</td>
					</tr>
					<tr class="gradeC">
						<td>KHTML</td>
						<td><span class="status status-success">Konqureror 3.1</span>
						</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center"><span class="badge bg-primary">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center"><span class="badge">A</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td><span class="status status-success">Konqureror 3.5</span>
						</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center"><span class="badge bg-success">X</span>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td><span class="status status-info">Internet Explorer 5.1</span>
						</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center"><span class="badge bg-info">C</span>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center"><span class="badge bg-danger">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td><span class="status status-purple">NetFront 3.1</span>
						</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-danger">C</span>
						</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td><span class="status status-purple">Dillo 0.8</span>
						</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td><span class="status status-purple">Lynx</span>
						</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">X</span>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td><span class="status status-danger">IE Mobile</span>
						</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">c</span>
						</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">c</span>
						</td>
					</tr>
					<tr class="gradeU">
						<td>Other browsers</td>
						<td><span class="status status-danger">All others</span>
						</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center"><span class="badge bg-warning">c</span>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /panel -->
</div>
<!-- col-md-12 -->

@endsection

@section('scripts')

<script src="{!! url('assets/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! url('assets/js/bootstrap-datatables.js') !!}"></script>
<script src="{!! url('assets/js/dataTables-custom.js') !!}"></script>
<script src="{!! url('assets/js/mindmup-editabletable.js') !!}"></script>
<script src="{!! url('assets/js/numeric-input-example.js') !!}"></script>
<script src="{!! url('assets/js/dynamic-tables.js') !!}"></script>

@endsection