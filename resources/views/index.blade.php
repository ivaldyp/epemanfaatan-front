@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- Carousel CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/owl.carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/owl.carousel/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
	<!-- animation CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">

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
		.carousel-inner div img {
			height: 100%;
			width: 100%;
			border-radius: 8px;
		}
		a div p {
			color: #313131;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 90px
	height:100%;padding-bottom:0; padding-top: 70px;">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<div class="white-box" style="padding: 0px;">
							<div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
								{{-- @if(count($imgs) > 1)
                                <ol class="carousel-indicators">
									<li data-target="#carousel-0" data-slide-to="0" class="active"></li>
									@foreach($imgs as $key => $img)
                                    <li data-target="#carousel-{{ $key+1 }}" data-slide-to="{{ $key+1 }}" class=""></li>
									@endforeach
								</ol>
								@endif --}}
								
                                <div role="listbox" class="carousel-inner">
									<div class="item active"> 
										<img src="/{{config('app.name')}}{{ ('/img/index/carousel-img1.jpeg') }}" alt="First slide image">
                                    </div>
									@if(count($imgs) > 0)
									{{-- @foreach($imgs as $key => $img)
									<div class="item"> 
										<img src="{{config('app.openfilepemanfaatancarousel')}}/{{ $img['image'] }}" alt="{{ $key+1 }} slide image">
									</div>
									@endforeach --}}
									@endif
                                </div>
								@if(count($imgs) > 0)
                                <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row" style="">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">SEWA</p>
									<h1 style="color: #fefbe9" >{{ $datastat->SEWA }}</h1>
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">PINJAM PAKAI</p>
									<h1 style="color: #fefbe9" >{{ $datastat->PP }}</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">BGS</p>
									<h1 style="color: #fefbe9" >{{ $datastat->BGS }}</h1>
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">BSG</p>
									<h1 style="color: #fefbe9" >{{ $datastat->BSG }}</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">PKS</p>
									<h1 style="color: #fefbe9" >{{ $datastat->total_pks }}</h1>
								</div>
							</div>
							<div class="col-md-6" style="height: 100px;">
								<div class="white-box lainnya1">
									<p class="" style="font-weight: bold; color: #fefbe9">DALAM PROSES</p>
									<h1 style="color: #fefbe9" >{{ $datastat->dalam_proses }}</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<a href="data/aset?s=siap">
									<div class="white-box lainnya2">
										<p class="" style="font-weight: bold; color: #fefbe9">ASET SIAP DIKERJASAMAKAN</p>
										<h1 style="color: #fefbe9" >{{ $totalasd }}</h1>
                                        {{-- <h1 style="color: #fefbe9" >0</h1> --}}
									</div>
								</a>
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
							<a href="cekkode">
								<img src="/{{config('app.name')}}{{ ('/img/index/btn-ceksts.jpeg') }}" alt="cek_status"
								style="
									height: 100%;
									max-width: 100%;
									margin-left: auto;
									margin-right: auto;
									border-radius: 8px;
									display: block;
								">
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="white-box" style="margin-top: 30px; height: 80px; background-color: #f0a04b; padding: 0px;">
							<a href="peta">
								<img src="/{{config('app.name')}}{{ ('/img/index/btn-peta.jpeg') }}" alt="cek_status"
								style="
									height: 100%;
									max-width: 100%;
									margin-left: auto;
									margin-right: auto;
									border-radius: 8px;
									display: block;
								">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div id="modal-detail" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/{{config('app.name')}}{{ ('/img/prosedur/prosedur-permohonan.jpeg') }}" width="100%">
                </div>
            </div>
        </div>
    </div>

@endsection('content')

<!-- ////////////////// -->

@section('js')

	<!-- jQuery -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/ample/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!-- slimscroll JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/ample/js/jquery.slimscroll.js') }}"></script>
	<!-- Wave Effects -->
	<script src="/{{config('app.name')}}{{ ('/ample/js/waves.js') }}"></script>
	<!-- jQuery for carousel -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/owl.carousel/owl.carousel.min.js') }}"></script>
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/owl.carousel/owl.custom.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#modal-detail').modal('show');
        });
    </script>
@endsection