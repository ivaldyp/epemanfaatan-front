@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
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
		.img-items:hover {
			transform: scale(1.5);
		}
		.navbar-right li a{
			transition: 0.2s;
		}
		.navbar-right li a:hover{
			background: transparent;
			transform: scale(1.2);
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
		.tabs-vertical li.active a, .tabs-vertical li.active a:hover, .tabs-vertical li.active a:focus {
			background-color: rgb(246, 196, 83);
			background: rgb(246, 196, 83);
			border-right: rgb(246, 196, 83);
		}

	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 90px">

		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<h2 class="box-title">Prosedur</h2>
					<div class="vtabs">
                        <ul class="nav tabs-vertical">
                            <li class="tab active">
                                <a data-toggle="tab" href="#home3" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">1. Cari</span> </a>
                            </li>
                            <li class="tab">
                                <a data-toggle="tab" href="#profile3" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">2. Hubungi</span> </a>
                            </li>
                            <li class="tab">
                                <a aria-expanded="false" data-toggle="tab" href="#messages3"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">3. Pantau</span> </a>
                            </li>
                        </ul>
                        <div class="tab-content" style="vertical-align: middle;">
                            <div id="home3" class="tab-pane active">
                                <h4 style="font-size: 30px; text-align: right; font-weight: bold; word-wrap: break-word; max-width: 20ch;">Cari aset yang ingin anda kerjasamakan</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div id="profile3" class="tab-pane">
                                <h4 style="font-size: 30px; text-align: right; font-weight: bold; word-wrap: break-word; max-width: 20ch;">Hubungi pegawai BPAD untuk memulai memanfaatkan aset</h4>
                                <div class="clearfix"></div>
                            </div>
                            <div id="messages3" class="tab-pane">
                                <h4 style="font-size: 30px; text-align: right; font-weight: bold; word-wrap: break-word; max-width: 20ch;">Pantau progress sampai aset tersebut berhasil anda kerjasamakan </h4>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
				</div>				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<h2 class="box-title">Produk Hukum</h2>
					
				</div>				
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
	<!-- Custom Theme JavaScript -->
	<!-- Data table -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


@endsection