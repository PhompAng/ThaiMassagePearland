<header class="main-header">
	<nav class="navbar navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Feenix <sup><small>alpha</small></sup></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li @if(Request::is('backend/dashboard')) class="active bg-blue-active" @endif><a href="{{ URL::to('/backend/dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
					<li @if(Request::is('backend/coupon')) class="active bg-blue-active" @endif><a href="{{ URL::to('/backend/coupon') }}"><i class="fa fa-money"></i>Coupon Management</a></li>
					<li @if(Request::is('backend/booking')) class="active bg-blue-active" @endif><a href="{{ URL::to('/backend/booking') }}"><i class="fa fa-cubes"></i>Booking Management</a></li>
					<li @if(Request::is('backend/setting')) class="active bg-blue-active" @endif><a href="{{ URL::to('/backend/setting') }}"><i class="fa fa-wrench"></i>System Setting</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Administrator<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="http://localhost:8000/profile/edit"><span class="fa fa-pencil"></span>Edit Profile</a></li>
							<li><a href="http://localhost:8000/profile/password"><span class="fa fa-wrench"></span>Change Password</a></li>
							<li class="divider"></li>
							<li><a href="{{ URL::to('/backend/auth/logout') }}"><span class="glyphicon glyphicon-log-out text-danger"></span><span class="text-danger">Sign Out</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>