	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title> Knot - Lock Screen </title>

		<link href="{!! url('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{!! url('assets/css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
		<link href="{!! url('assets/css/animate.css') !!}" rel="stylesheet" type="text/css" media="all"/>

		

	</head>

	<body>
		
		<div class="lockscreen-bg">
			<div class="lockscreen">
				<div class="lockscreen-image">
					<img src="{!! url('assets/images/avatar.png')!!}" alt="avatar">
				</div>
				<div class="lockscreen-details">
					<div class="lockscreen-user">Bootstrap Guru</div>
					<form class="" action="{!! url('/') !!}">
						<!-- fixes autocomplete off -->
						<input style="display:none">
						<input type="password" style="display:none">
						<!-- /fixes autocomplete off -->
						<div class="form-group animated flipInX">
							<input type="password" class="form-control lockscreen-input" id="lockpassword" placeholder="Enter Password To Unlock">
						</div>
						<button type="submit" class="btn btn-primary btn-sm pull-right">Unlock</button>
					</form>
					<!--lockscreen form-->
				</div>
				<!--lockscreen details-->
			</div>
			<!--lockscreen-->
		</div>
		<!--lockscreen bg-->
		<div class="lockscreen-bottom">
			<ul class="list-unstyled list-inline lockscreen-icons">
				<li><a href="#"><i class="ion ion-ios-email"></i><span>10</span></a></li>
				<li><a href="#"><i class="ion ion-ios-chatboxes"></i><span>13</span></a></li>
				<li class="lockscreen-icon-right"><a href="#"><i class="ion ion-ios-gear"></i></a></li>
			</ul>
		</div>
		<!--lockscreen bottom-->



		<script src="{!! url('assets/js/jquery-2.1.4.min.js') !!}"></script>
		<script src="{!! url('assets/js/bootstrap.min.js') !!}"></script>

		
	</body>
	</html>
