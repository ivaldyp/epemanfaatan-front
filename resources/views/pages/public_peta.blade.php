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
	<!-- peta CSS -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>

	<style type="text/css">
		body {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
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
			border-radius: 5px;
			padding: 0px;
		}
		#issmap {
			height: 500px; 
			max-height: 1000px;
			/*position: absolute;
			top: 0px;
			left: 0px;
			bottom: 0px;
			right: 0px;*/ 
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')
	<input type="hidden" name="datamap" id="datamap" value="{{ json_encode($datamap) }}">

	<div class="container" style="margin-top: 90px; padding-left: 50px; padding-right: 50px;
	height:100%;padding-bottom:0;">
		<div class="row">
			<div class="white-box">
				<div id="issmap">
					
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
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/custom.min.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
	<!-- Peta JS -->

	<script>
		var datamap = $("#datamap").val();
		datamap = JSON.parse(datamap)['hasil'];

		var mymap = L.map('issmap').setView([-6.2088, 106.8456], 11);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		}).addTo(mymap);
		
		var col = "";
		$.each( datamap, function( key, value ) {

			if (value['kobar'].substring(0, 2) == '01') {
				col = 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png';
			} else if (value['kobar'].substring(0, 2) == '02') {
				col = 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-black.png';
			} else if (value['kobar'].substring(0, 2) == '03') {
				col = 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png';
			} else if (value['kobar'].substring(0, 2) == '04') {
				col = 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png';
			} else if (value['kobar'].substring(0, 2) == '05') {
				col = 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png';
			}

			var thisicon = new L.Icon({
				iconUrl: col,
				shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
				iconSize: [25, 41],
				iconAnchor: [12, 41],
				popupAnchor: [1, -34],
				shadowSize: [41, 41]
			});
			L.marker([value['lat'], value['lon']], {icon: thisicon}).addTo(mymap).bindPopup("ASET "+value['nabar']+'<br>'+value['alamat']);
		});


		// var lat = -6.2088;
		// var lon = 106.8456;
		// var colortable = ['red', 'blue', 'green', 'yellow', 'black'];

		// for (var i = 0; i <= 5; i++) {
		// 	var lon = lon + 0.1;
		// 	var circle = L.circle([-6.2088, lon], {
		// 	    color: colortable[i],
		// 	    fillColor: colortable[i],
		// 	    fillOpacity: 0.5,
		// 	    radius: 500
		// 	}).addTo(mymap);
		// 	circle.bindPopup("Hola");
		// }


		// var greenIcon = new L.Icon({
		//   iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
		//   shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
		//   iconSize: [25, 41],
		//   iconAnchor: [12, 41],
		//   popupAnchor: [1, -34],
		//   shadowSize: [41, 41]
		// });
		// L.marker([-6.2088, 106.8456], {icon: greenIcon}).addTo(mymap).bindPopup("I am a green leaf.");

	</script>

@endsection