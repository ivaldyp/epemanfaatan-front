@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
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
		.white-box
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
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container login-box" style="margin-top: 90px; padding-left: 50px; padding-right: 50px; background-color: #fefbe9; 
	height:100%;padding-bottom:0; padding-top: 70px;">
		<div class="row">
			<div class=" text-center form-box" style="padding-top: 130px;padding-bottom: 150px;">
				<h1 style="font-weight: bold; color: #183a1d; padding-bottom: 20px">CEK STATUS</h1>
				<form class="form-horizontal form-material" id="loginform" action="/{{ config('app.name') }}/cekkode">
					<div class="form-group ">
						<div class="col-xs-12">
							<input class="form-control" type="text" placeholder="Masukkan Kode Unik Mitra" required="" style="" id="input-kode" autocomplete="off" name="kode">
						</div>
					</div>
					<div class="form-group text-center">
						<div class="col-xs-12">
							<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light btn-cari" type="button" style="background-color: #f0a04b; border-color: #f0a04b;">Cari</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container" style=" padding-left: 50px; padding-right: 50px; background-color: #fefbe9">
		<div class="row">
			<div class="form-box2" style="padding-bottom: 150px;">
                <svg class="hidden">
                    <defs>
                        <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z" /> </defs>
                </svg>
                <section class="m-t-40" >
                    <div class="sttabs tabs-style-shape">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#section-shape-1">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                            <use xlink:href="#tabshape"></use>
                                        </svg> <span>Permohonan</span> </a>
                                </li>
                                <li>
                                    <a href="#section-shape-2">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                            <use xlink:href="#tabshape"></use>
                                        </svg>
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                            <use xlink:href="#tabshape"></use>
                                        </svg> <span>PKS Terbit</span> </a>
                                </li>
                                <li>
                                    <a href="#section-shape-5">
                                        <svg viewBox="0 0 80 60" preserveAspectRatio="none">
                                            <use xlink:href="#tabshape"></use>
                                        </svg> <span>Pembayaran</span> </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="content-wrap">
                            <section id="section-shape-1" style="border-radius: 5px black solid">
                                <h3>Best Clean Tab ever</h3>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                            </section>
                            <section id="section-shape-2">
                                <h2>Tabbing 2</h2></section>
                            <section id="section-shape-5">
                                <h2>Tabbing 5</h2></section>
                        </div>
                        <!-- /content -->
                    </div>
                    <!-- /tabs -->
                </section>
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
	<!-- Custom Theme JavaScript -->
	<script src="/{{config('app.name')}}{{ ('/ample/js/cbpFWTabs.js') }}"></script>
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            });
        })();
    </script>
	<script src="/{{config('app.name')}}{{ ('/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

	<script type="text/javascript">
		$(".form-box2").hide();
		$(".btn-cari").click(function() {
		    var kode = $("#input-kode").val();
		    if (kode == '') {
		    	// alert("gabole kosong");
		    } else {
		    	// alert("lah ada isinya");
		    	$(".form-box").hide();
		    	$(".form-box2").show();
		    }
		});
		$('#input-kode').on('keyup keypress', function(e) {
		  var keyCode = e.keyCode || e.which;
		  if (keyCode === 13) { 
		    e.preventDefault();
		    return false;
		  }
		});
	</script>

@endsection