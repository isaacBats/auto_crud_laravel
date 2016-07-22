@extends('layouts.app')

@section('content')

<div class="page_header">
	<div class="col-md-4">
		<div class="pull-left">
			<div class="main-text">User Table</div>
			<p class="block">
				Fully functional User table with create,edit and delete options provided with thumb images and represented in a user friendly manner.
			</p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="text-center">
			<i class="ion-person-add page_header_icon"></i>

		</div>
	</div>

	<div class="col-md-4">
		<div class="right pull-right">
			<ul class="right_bar">
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Fully functional</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Add,Create and Delete</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;AJAX User Addition</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;Adavnced</li>
				<li class="list-unstyled"><i class="ion ion-ios-checkmark-empty"></i> &nbsp;and more...</li>
			</ul>
		</div>
	</div>
</div>
<!-- /pageheader -->

<div class="row">
	<div class="col-md-12 panel-parent">
		<!-- panel starts here-->
		<div class="panel knot-panel panel-primary panel-users">
			<div class="panel-heading">
				<h3 class="panel-title">
					List of Users
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
					<div class="col-md-12">
						<form class="form-inline" id="add-user-form">
							<div class="col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-2">
								<div class="form-group">
									<label for="exampleInputName2">Name</label>
									<input type="text" class="form-control" name="name" id="exampleInputName2" placeholder="Jane Doe">
								</div>
							</div>

							<div class="col-md-2 col-sm-2">
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" class="form-control" name="address" id="address" placeholder="Adress">

								</div>
							</div>
							<div class="col-md-2 col-sm-2">
								<div class="form-group">
									<label for="exampleInputEmail2">Email</label>
									<input type="text" class="form-control" name="email" id="exampleInputEmail2" placeholder="jane.doe@example.com">
								</div>
							</div>
							<div class="col-md-2 col-sm-2">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" name="phone" id="phone" placeholder="99XXXXXXXXX">
								</div>
							</div>
							<div class="col-md-2 col-sm-2">
								<div class="user-form-margin">
									<button type="submit" class="btn btn-primary btn-lg add-user">Add User</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover users-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>E-Mail</th>
								<th>Phone Number</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>	
							</tr>
						</thead>
						<tbody>
							<tr class="table-row">
								<td>Rita J. Wansley</td>
								<td>550 Cedarstone Drive</td>
								<td><a href="mailto:hubert55@example.com">hubert55@example.com</a></td>
								<td>300-24-XXXX</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/one.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Ivory Bahringer</td>
								<td>219 Hills Greens Suite 557</td>
								<td><a href="mailto:samson27@example.com">samson27@example.com</a></td>
								<td>9985018610</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/two.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Teagan Thompson</td>
								<td>862 Beier Way Apt. 748</td>
								<td><a href="mailto:hpollich@example.com">hpollich@example.com</a></td>
								<td>9985018610</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/three.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Ettie O'Keefe</td>
								<td>7705 Nadia Plaza Suite 750</td>
								<td><a href="mailto:vhayes@example.org">vhayes@example.org</a></td>
								<td>4958358922</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/four.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Adeline Blick</td>
								<td>7705 Nadia Plaza Suite 750</td>
								<td><a href="mailto:hodkiewicz.duncan@example.org">hodkiewicz.duncan@example.org</a></td>
								<td>9866245598</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/five.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Christopher Lakin</td>
								<td>88966 Tillman Drives Suite 330</td>
								<td><a href="mailto:gene.kessler@example.org">gene.kessler@example.org</a></td>
								<td>4958358922</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/six.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Jazlyn Kutch</td>
								<td>399 Kelli Stravenue</td>
								<td><a href="mailto:taryn.skiles@example.com">taryn.skiles@example.com</a></td>
								<td>9985018610</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/seven.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Arthur Hamill</td>
								<td>323 Estefania Roads</td>
								<td><a href="mailto:danyka19@example.net">danyka19@example.net</a></td>
								<td>570804954</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/eight.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Yvonne Turner</td>
								<td>4263 Yessenia Pike Suite 915</td>
								<td><a href="mailto:kkautzer@example.org">kkautzer@example.org</a></td>
								<td>570804954</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/nine.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Coleman Mittie</td>
								<td>1470 Kassulke Radial</td>
								<td><a href="mailto:acrist@example.org">acrist@example.org</a></td>
								<td>9985018610</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/one.png') !!}" alt="user">
								</td>	
							</tr>
							<tr class="table-row">
								<td>Enoch Batz</td>
								<td>1323 Stracke Points Suite 462</td>
								<td><a href="mailto:will.jenifer@example.com">will.jenifer@example.com</a></td>
								<td>570804954</td>
								<td>
									<a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a>
								</td>
								<td>
									<a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a>
								</td>
								<td>
								<img src="{!! url('assets/images/avatar/two.png') !!}" alt="user">
								</td>	
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- col-md-3 -->
</div>

@endsection

@section('scripts')

<script>
	$(document).ready(function () {
		if($(".table-row").length > 0){
			$('.table-row').on('click', function(){
                // $('.table-row').removeClass('active');
                $(this).toggleClass('active');
            }); 

			$('.add-user').on('click',function (e) {
				e.preventDefault();
				var formData = $('#add-user-form').serializeArray();

				$('.users-table tbody').prepend('<tr class="table-row"><td>' + formData[0]['value'] + '</td><td>' + formData[1]['value'] + '</td><td><a href="mailto:' + formData[2]['value'] + '">' + formData[2]['value'] + '</a></td><td>' + formData[3]['value'] + '</td><td><a href="#" class="btn btn-primary"><i class="ion ion-edit"></i></a></td><td><a href="#" class="btn btn-danger  delete-row"><i class="ion ion-ios-trash-outline"></i></a></td><td><img src="{!! url('assets/images/avatar.png') !!}" alt="user"></td></tr>')

			});

			$('.delete-row').on('click',function (e) {
				e.preventDefault();
				$(this).closest('.table-row').addClass('hidden');
			})
		}
	});
</script>

@endsection