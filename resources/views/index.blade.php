@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- Carousel CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/plugins/bower_components/owl.carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ ('/epemanfaatan/public/ample/plugins/bower_components/owl.carousel/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
	<!-- animation CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">

	<style type="text/css">
		.img-items:hover {
			transform: scale(1.5);
		}
		.navbar-top-links li a{
			transition: 0.2s;
		}
		.navbar-top-links li a:hover{
			background: transparent;
			transform: scale(1.3);
		}
		footer h3{
			color: #e7e5df;
			/*border-bottom: 1px solid white;*/
			font-weight: bold;
		}
		.white-box {
			box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
			border-radius: 8px;
		}
		.lainnya1 {
			background-color: #f6c453;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 0px;
			padding-right: 0px;
		}
		.lainnya2 {
			background-color: #183a1d;
			text-align: center;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 0px;
			padding-right: 0px;
		}
		.lainnya1 p,
		.lainnya1 h1 {
			margin-bottom: 0px;
			margin-top: 0px;
		}
		.lainnya2 p,
		.lainnya2 h1 {
			margin-bottom: 0px;
			margin-top: 0px;
			color: #e1eedd;
		}
		.row-full{
			width: 100vw;
			position: relative;
			margin-left: -50vw;
			/*height: 100px;*/
			/*margin-top: 100px;*/
			left: 50%;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 90px">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<div class="white-box" style="padding: 0px;">
							<img src="{{ ('/epemanfaatan/public/img/index/carousel-welcome.jpeg') }}" alt="welcome"
							style="
								height: 100%;
								width: 100%;
								border-radius: 8px;
							">
						</div>
					</div>
					<div class="col-md-4">
						<div class="row" style="">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">SEWA</p>
									<h1 style="">10</h1> 
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">PINJAM PAKAI</p>
									<h1 style="">20</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">BTO</p>
									<h1 style="">40</h1>
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">BOT</p>
									<h1 style="">15</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">ASET IDLE</p>
									<h1 style="">15</h1>
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold;">DALAM PROSES</p>
									<h1 style="">5</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="white-box lainnya2">
									<p class="" style="font-weight: bold;">TOTAL PKS</p>
									<h1 style="">85</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row row-full" style="background-color: #183a1d;">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<div class="white-box" style="margin-top: 30px; height: 80px; background-color: #f0a04b; padding: 0px;">
							<img src="{{ ('/epemanfaatan/public/img/index/btn-ceksts.jpeg') }}" alt="cek_status"
							style="
								height: 100%;
								max-width: 100%;
								margin-left: auto;
								margin-right: auto;
								border-radius: 8px;
								display: block;
							">
						</div>

					</div>
					<div class="col-md-4">
						<div class="white-box" style="margin-top: 30px; height: 80px; background-color: #f0a04b; padding: 0px;">
							<img src="{{ ('/epemanfaatan/public/img/index/btn-peta.jpeg') }}" alt="cek_status"
							style="
								height: 100%;
								max-width: 100%;
								margin-left: auto;
								margin-right: auto;
								border-radius: 8px;
								display: block;
							">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection('content')

<!-- ////////////////// -->

@section('js')

	<!-- jQuery -->
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ ('/epemanfaatan/public/ample/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!-- slimscroll JavaScript -->
	<script src="{{ ('/epemanfaatan/public/ample/js/jquery.slimscroll.js') }}"></script>
	<!-- Wave Effects -->
	<script src="{{ ('/epemanfaatan/public/ample/js/waves.js') }}"></script>
	<!-- jQuery for carousel -->
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/owl.carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/owl.carousel/owl.custom.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="{{ ('/epemanfaatan/public/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


@endsection