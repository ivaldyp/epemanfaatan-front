@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- toast CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
	<!-- animation CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">

	<style type="text/css">
		body {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		}
		.navbar-right li a{
			transition: 0.2s;
		}
		.navbar-right li a:hover{
			background: transparent;
			transform: scale(1.3);
		}
		footer h3{
			color: #e7e5df;
			/*border-bottom: 1px solid white;*/
			font-weight: bold;
		}
		.white-box,
		.form-box2 {
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

		.tabs-style-shape nav li.tab-current a svg{
			fill: #f0a04b;
		}
		.tabs-style-shape nav li.tab-current a span {
			background-color: #f0a04b;
		}
		.tabs-style-shape nav li a span {
			background-color: #f6c453;
		}
		.tabs-style-shape nav li a svg {
			fill: #f6c453;
		}
		.sttabs nav li.tab-current a {
			color: #fff;
		}
		.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
			background-color: #fff;
			border: 1px solid #ddd;
			border-bottom: 0;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center" style="top: 80px; font-size: 16px;">
				@if(Session::has('message'))
					<div class="alert <?php if(Session::get('msg_num') == 1) { ?>alert-success<?php } else { ?>alert-danger<?php } ?> alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color: #fefbe9; opacity: 1;">&times;</button>{{ Session::get('message') }}</div>
				@endif
			</div>
		</div>
	</div>
	
	<div class="container login-box" style="margin-top: 90px; padding-left: 50px; padding-right: 50px; background-color: #fefbe9">
		
		<div class="row">
			<div class=" text-center form-box" style="padding-top: 130px;padding-bottom: 150px;">
				<h1 style="font-weight: bold; color: #183a1d; padding-bottom: 20px">CEK STATUS</h1>
				<form class="form-horizontal form-material" id="loginform" action="/{{ config('app.name') }}/cekkode/tampil" method="POST">
					@csrf
					<div class="form-group ">
						<div class="col-xs-12">
							<!-- <input class="form-control" type="text" placeholder="Masukkan 15 digit NPWP (hanya angka)" required="" data-mask="99.999.999.9-999.999" id="input-kode" autocomplete="off" name="kode">  -->
							<input class="form-control" type="text" placeholder="Masukkan 15 digit NPWP (hanya angka)" required="" id="input-kode" autocomplete="off" name="kode"> 
						</div>
					</div>
					<div class="form-group" id="div-show-npwp">
						<div>
							<b><p class="text-static text-center" id="show-npwp"></p></b>
						</div>
					</div>
					<div class="form-group text-center">
						<div class="col-xs-12">
							<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light btn-cari" type="submit" id="btn-npwp" style="background-color: #f0a04b; border-color: #f0a04b;">Cari</button>
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
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!-- slimscroll JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/jquery.slimscroll.js') }}"></script>
	<!-- Wave Effects -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/waves.js') }}"></script>
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/mask.js') }}"></script>
	<!-- Toast js -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/toastr.js') }}"></script>
	<script type="text/javascript">
		$("#input-kode").mouseup(function () {
		    this.setSelectionRange(0,0);    
		});

		//Alerts
		$(".myadmin-alert .closed").click(function (event) {
			$(this).parents(".myadmin-alert").fadeToggle(350);
			return false;
		});
		/* Click to close */
		$(".myadmin-alert-click").click(function (event) {
			$(this).fadeToggle(350);
			return false;
		});
		$(".showtop").click(function () {
			$(".alerttop").fadeToggle(350);
		});
		$(".showtop2").click(function () {
			$(".alerttop2").fadeToggle(350);
		});
		/** Alert Position Bottom  **/
		$(".showbottom").click(function () {
			$(".alertbottom").fadeToggle(350);
		});
		$(".showbottom2").click(function () {
			$(".alertbottom2").fadeToggle(350);
		});
		/** Alert Position Top Left  **/
		$("#showtopleft").click(function () {
			$("#alerttopleft").fadeToggle(350);
		});
		/** Alert Position Top Right  **/
		$("#showtopright").click(function () {
			$("#alerttopright").fadeToggle(350);
		});
		/** Alert Position Bottom Left  **/
		$("#showbottomleft").click(function () {
			$("#alertbottomleft").fadeToggle(350);
		});
		/** Alert Position Bottom Right  **/
		$("#showbottomright").click(function () {
			$("#alertbottomright").fadeToggle(350);
		});
	</script>
	<!-- Custom Theme JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


@endsection