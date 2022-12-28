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
		.white-box {
			box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
			border-radius: 5px;
			padding: 0px;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 90px; padding-left: 50px; padding-right: 50px;
	height:100%;padding-bottom:0;">
		<div class="row">
            <div class="col-md-12">
            	<h2 class="box-title m-b-20 text-center" style="font-weight: bold;">FAQs</h2>
            	<div class="panel-group" role="tablist" aria-multiselectable="true">
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingOne">
	                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="font-bold"> Apa itu sistem E-Pemanfaatan? </a> </h4> </div>
	                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	                        <div class="panel-body"> Sistem E-Pemanfaatan merupakan sistem dimana para mitra dapat mengetahui aset DKI Jakarta mana saja yang dapat dikerjasamakan. </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingTwo">
	                        <h4 class="panel-title"> <a class="collapsed font-bold" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" > Bagaimana mitra dapat mengetahui aset DKI Jakarta mana saja yang dapat dimanfaatkan? </a> </h4> </div>
	                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	                        <div class="panel-body"> Mitra dapat menggunakan fitur "Peta" atau "Cari" untuk menampilkan seluruh aset DKI Jakarta yang dapat dimanfaatkan. </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingThree">
	                        <h4 class="panel-title"> <a class="font-bold collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" > Aset jenis apa saja yang ditampilkan pada sistem E-Pemanfaatan? </a> </h4> </div>
	                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
	                        <div class="panel-body"> 
	                        	Ada 5 jenis aset yang ditampilkan di sistem ini yaitu : <br>
	                        	<ul>
	                        		<li>KIB A: Aset Tanah</li>
	                        		<li>KIB B: Peralatan dan Mesin</li>
	                        		<li>KIB C: Gedung dan Bangunan</li>
	                        		<li>KIB D: Jalan, Irigasi dan Jaringan</li>
	                        		<li>KIB E: Aset Lainnya</li>
	                        	</ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingFour"> <a class="collapsed font-bold panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Apa yang harus dilakukan apabila telah memilih aset yang ingin dikerjasamakan? </a> </div>
	                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
	                        <div class="panel-body"> Mitra dapat langsung berkoordinasi dengan perwakilan subbidang Pemanfaatan pada BPAD DKI Jakarta untuk melanjutkan proses pemanfaatan aset DKI Jakarta. </div>
	                    </div>
	                </div>
	                <div class="panel panel-default">
	                    <div class="panel-heading" role="tab" id="headingFive"> <a class="collapsed font-bold panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Apakah mitra dapat mengetahui perkembangan proses pemanfaatan aset yang sedang berjalan di BPAD DKI Jakarta? </a> </div>
	                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
	                        <div class="panel-body"> Mitra dapat dapat mengetahui perkembangan proses pemanfaatan melalui fitur "Cek Status". Cukup masukkan NPWP yang telah didaftarkan agar mitra dapat melihat perkembangan proses pemanfaatan yang sedang berjalan di BPAD. </div>
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
	<script src="/{{config('app.name')}}{{ ('/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection