@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- animation CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="{{ ('/epemanfaatan/public/ample/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">

	<style type="text/css">
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
			border-radius: 5px;
		}
		#input-kode {
			text-align: center;
		}
		#input-kode::-webkit-input-placeholder {
		  text-align: center;
		}

		#input-kode:-moz-placeholder {
		  text-align: center;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container login-box" style="margin-top: 90px; padding-left: 50px; padding-right: 50px; background-color: #fefbe9">
		<div class="row">
			<div class=" text-center" style="padding-top: 130px;padding-bottom: 150px;">
				<h1 style="font-weight: bold; color: #183a1d; padding-bottom: 20px">CEK STATUS</h1>
				 <form class="form-horizontal form-material" id="loginform" action="index.html">
					<div class="form-group ">
					  <div class="col-xs-12">
						<input class="form-control" type="text" required="" placeholder="Masukkan Kode Unik" style="" id="input-kode">
					  </div>
					</div>
					<div class="form-group text-center">
					  <div class="col-xs-12">
						<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" style="background-color: #f0a04b; border-color: #f0a04b;">Cari</button>
					  </div>
					</div>
				</form>

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
	<!-- Custom Theme JavaScript -->
	<script src="{{ ('/epemanfaatan/public/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="{{ ('/epemanfaatan/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection