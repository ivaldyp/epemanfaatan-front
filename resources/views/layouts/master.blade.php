<!DOCTYPE html>
<html lang="en" style="background-color: #fefbe9; ">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="/{{config('app.name')}}{{ ('/img/bpad-black.svg') }}">
	<title>Monitoring Pemanfaatan</title>

	@yield('css')
	
</head>

<body class="fix-header">
	<!-- ============================================================== -->
	<!-- Preloader -->
	<!-- ============================================================== -->
	<div class="preloader">
		<svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
	</div>
	<!-- ============================================================== -->
	<!-- Wrapper -->
	<!-- ============================================================== -->
	<div id="wrapper" style="margin-bottom: 270px;">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<nav class="navbar navbar-default navbar-static-top m-b-0" style="padding-left: 0px; box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%)">
			<div class="navbar-header" style="background: #e1eedd;">
				<div class="top-left-part" style="border-right-width: 0px;">
					<!-- Logo -->
					{{-- <a class="logo" href="/{{ config('app.name') }}" style="font-size: 20px; color: black; font-family: Helvetica, Arial, sans-serif">
							<!-- Logo icon image, you can use font-icon also --><b>

							<!--This is dark logo icon--><img src="/{{config('app.name')}}{{ ('/ample/plugins/images/admin-logo.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/{{config('app.name')}}{{ ('/img/bpad-black.svg') }}" width="10%" alt="home" class="light-logo" />
						 </b>
						 <span style="text-transform: lowercase; color: #313131" class="hidden-xs">e<strong style="text-transform: capitalize;">Pemanfaatan</strong></span>

					</a> --}}
					<a class="logo" href="/{{ config('app.name') }}">
						<img width="20%" src="/{{config('app.name')}}/img/bpad-black.svg"><span style="text-transform: lowercase; color: #313131" class="hidden-xs">e<strong style="text-transform: capitalize;">Pemanfaatan</strong></span>
						</span>
					</a>
				</div>
				<!-- /Logo -->
				<!-- Search input and Toggle icon -->
				<ul class="nav navbar-top-links navbar-left">
					<li>
						<form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="/{{ config('app.name') }}/data/cari">
							<input type="text" placeholder="Cari Alamat..." class="form-control" name="alamat"> <a href=""><i class="fa fa-search"></i></a>
						</form>
					</li>
					<li class="mega-dropdown">
						<a class="dropdown-toggle waves-effect waves-light visible-xs visible-sm" data-toggle="dropdown" href="#"> <i class="ti-close ti-menu"></i>
						</a>
						<ul class="dropdown-menu mailbox animated bounceInDown">
							<li>
								<form role="search" class="app-search visible-xs visible-sm p-l-10" action="/{{ config('app.name') }}/data/cari">
									<<input type="text" placeholder="Cari Alamat..." class="form-control" name="alamat"> <a href=""><i class="fa fa-search"></i></a>
								</form>
								<hr style="margin-bottom: 0px">
							</li>
							<li>
								<div class="message-center">
									<a class="smallurl" href="/{{ config('app.name') }}/cekkode">CEK STATUS</a>
									<a class="smallurl" href="/{{ config('app.name') }}/peta">PETA</a>
									<a class="smallurl" href="/{{ config('app.name') }}/peraturan">PROSEDUR</a>
									<a class="smallurl" href="/{{ config('app.name') }}/faq">FAQ</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-top-links navbar-right pull-right" >
					<li class="hidden-xs hidden-sm" style="padding-left: 5px; padding-right: 5px; font-weight: bold;">
						<a href="/{{ config('app.name') }}/cekkode">CEK STATUS</a>
					</li>
					<li class="hidden-xs hidden-sm" style="padding-left: 5px; padding-right: 5px; font-weight: bold;">
						<a href="/{{ config('app.name') }}/peta">PETA</a>
					</li>
					<li class="hidden-xs hidden-sm" style="padding-left: 5px; padding-right: 5px; font-weight: bold;">
						<a href="/{{ config('app.name') }}/peraturan">PROSEDUR</a>
					</li>
					<li class="hidden-xs hidden-sm" style="padding-left: 5px; padding-right: 5px; font-weight: bold;">
						<a href="/{{ config('app.name') }}/faq">FAQ</a>
					</li>


					<!-- <li class="dropdown">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
						<ul class="dropdown-menu dropdown-user animated flipInY">
							<li>
								<div class="dw-user-box">
									<div class="u-img"><img src="plugins/images/users/varun.jpg" alt="user" /></div>
									<div class="u-text">
										<h4>Steave Jobs</h4>
										<p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
								</div>
							</li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
							<li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
							<li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
			<!-- /.navbar-header -->
			<!-- /.navbar-top-links -->
			<!-- /.navbar-static-side -->
		</nav>
		<!-- End Top Navigation -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!-- End Left Sidebar -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page Content -->
		<!-- ============================================================== -->
		<div 
            id="harusnya-page-wrapper"  
            style="
			background-color: #fefbe9; 
			margin-left: 0px; 
			margin-top: 0px;
			padding-bottom: 0px; 
			padding-top: 10px;">
		
		@yield('content')

		@include('layouts.footer')

		</div>
		
		<!-- ============================================================== -->
		<!-- End Page Content -->
		<!-- ============================================================== -->
	</div>
	<!-- /#wrapper -->

	@yield('js')

</body>

</html>
