@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
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
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 90px">

		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
					<h3 class="box-title m-b-0">Aset Siap Dikerjasamakan</h3>
					
					@if(!(is_null($alamat)) && $alamat != '')
					<p class="text-muted m-b-30">Alamat yang dicari: <b>{{ $alamat }}</b></h4>
					</p>
					@endif
					
					<form method="get" action="/epemanfaatan/data/aset" class="form-horizontal" style="margin-top: 25px; margin-bottom: 25px;">
						<div class="form-group">
							<label for="yearnow" class="col-md-1 control-label"> Filter </label>
							
							<!-- <div class="col-md-3">
								<select class="form-control" name="s" id="statnow" onchange="this.form.submit()">
									<option <?php if ($s == "all"): ?> selected <?php endif ?> value="all">--SEMUA--</option>
									<option <?php if ($s == "proses"): ?> selected <?php endif ?> value="proses">Dalam Proses</option>
									<option <?php if ($s == "siap"): ?> selected <?php endif ?> value="siap">Aset Siap Dikerjasamakan</option>
								</select>
							</div> -->

							<div class="col-md-3">
								<select class="form-control" name="k" id="kibnow" onchange="this.form.submit()">
									<option <?php if ($k == "all"): ?> selected <?php endif ?> value="all">--SEMUA KIB--</option>
									<option <?php if ($k == "A"): ?> selected <?php endif ?> value="A">Tanah</option>
									<option <?php if ($k == "B"): ?> selected <?php endif ?> value="B">Peralatan dan Mesin</option>
									<option <?php if ($k == "C"): ?> selected <?php endif ?> value="C">Gedung dan Bangunan</option>
									<option <?php if ($k == "D"): ?> selected <?php endif ?> value="D">Jalan, Irigasi, dan Jaringan</option>
									<option <?php if ($k == "E"): ?> selected <?php endif ?> value="E">Aset Lainnya</option>
								</select>
							</div>
							
							@if(!(is_null($alamat)) && $alamat != '')
							<div class="col-md-2">
								<a href="/{{ config('app.name') }}/data/aset?k={{ $k }}">
								<input type="button" name="btnResetAlamat" value="Reset Filter Alamat" class="btn btn-info"></a>
							</div>
							@endif

							@if(!(is_null($alamat)) && $alamat != '')
								<input type="hidden" name="alamat" value="{{ $alamat }}">
							@endif
						</div>
					</form>

					<div class="table-responsive" style="">
						<table id="myTable" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis Aset</th>
									<th>Alamat</th>
									<th>Ukuran</th>
									<th>Lokasi</th>
									<th style="text-align: center; justify-content: center; align-content: center;">Email</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								@if($datamap)
									@foreach($datamap as $key => $data)
									<tr>
										<td style="vertical-align:middle;">{{ $key+1 }}</td>
										<td style="vertical-align:middle;">{{ ucwords(strtolower($data->nabar)) }}</td>
										<td style="vertical-align:middle;">{{ $data->alamat }}</td>
										<td style="vertical-align:middle;">{{ $data->ukuran }} {{ $data->satuan }}</td>
										<td style="vertical-align:middle;">
											@if(is_numeric($data->lat) && is_numeric($data->lon))
											<a href="/epemanfaatan/peta/cari" style="margin-right: 2px" onclick="window.open('/epemanfaatan/peta/cari?lat={{ $data->lat }}&lon={{ $data->lon }}&alamat={{ $data->alamat }}&nabar={{ $data->nabar }}&kobar={{ $data->kobar }}', 
						                        'newwindow', 
						                        'width=960,height=720'); 
						              			return false;" data-toggle="tooltip" title="Peta">
												<i class="fa fa-map-marker" style="font-size: 20px; color: #2cabe3;"></i>
											</a>
											<a target="_blank" href="https://www.google.com/maps/place/{{$data->lat}}, {{$data->lon}}" data-toggle="tooltip" title="Google Maps">
												<i class="fa fa-google text-success" style="font-size: 20px;"></i>
											</a>
											@endif
										</td>
										<td style="vertical-align: middle; text-align: center; justify-content: center; align-content: center;">
											<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=bpad@jakarta.go.id&su=Pengajuan Kerjasama Aset&body=
												Aset {{ ucwords(strtolower($data->nabar)) }} dengan alamat {{ $data->alamat }}												
											">
												<button class="btn btn-danger btn-email"><i class="fa fa-envelope"></i></button>
											</a>
										</td>
										<td style="vertical-align: middle;"><button class="btn btn-info btn-detail" data-toggle="modal" data-target="#modal-detail" data-ids="{{ $data->ids }}">Lihat</button></td>
									</tr>
									@endforeach
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div id="modal-detail" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" style="text-align: center;"><b>DETAIL</b></h4>
						</div>
						<div class="modal-body">
							<div class="loadpattern">
								<svg class="circular" viewBox="25 25 50 50">
									<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
								</svg>
							</div>
							<div class="loadisi">
								<table>
									<tbody style="font-size: 16px;">
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Jenis</td>
											<td id="detail-jenis" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Alamat</td>
											<td id="detail-alamat" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Ukuran</td>
											<td id="detail-ukuran" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Lat & Lon</td>
											<td id="detail-latlon" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Tipe</td>
											<td id="detail-tipe" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr style="">
											<td class="col-lg-4" style="vertical-align: top; width: 200px; font-weight: bold;">Catatan</td>
											<td id="detail-catatan" style="vertical-align: top;" class="detail-isi col-lg-8"></td>
										</tr>
										<tr>
											<td colspan="2" style="text-align: center; vertical-align: middle; padding-top: 15px;" class="detail-isi" id="detail-iframe">
												
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			var dt = $('#myTable').DataTable({
				// pageLength : 5,
				"searching": false,
				// "lengthChange": false,
			});


		});
	</script>

	<script>
		$(function(){
			$(".btn-detail").click(function(){
				$(".loadisi").hide();
				$(".loadpattern").show();
				$(".detail-isi").empty();
		
				var ids = $(this).data('ids');
				
				$.ajax({ 
					type: "GET", 
					url: "/epemanfaatan/data/request/getdatasingle",
					data: {ids : ids},
					dataType: "JSON",
					}).done(function( result ) { 
						$(".loadpattern").hide();
						$(".loadisi").show();
						$("#detail-jenis").text(result['nabar'].toLowerCase().replace(/\b[a-z]/g, function(letter) {
    						return letter.toUpperCase();
						}));
						$("#detail-alamat").text(result['alamat']);
						$("#detail-ukuran").text(result['ukuran'] + " " + result['satuan']);
						$("#detail-latlon").text(result['lat'] + ', ' + result['lon']);
						$("#detail-tipe").text(result['tipe_aset'] == "1" ? "Pemanfaatan Full" : "Pemanfaatan Sebagian");
						$("#detail-catatan").text(result['cat_aset']);
						$("#detail-iframe").append('<iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://maps.google.com/maps?q='+result['lat']+','+result['lon']+'&hl=es;z=14&amp;output=embed"></iframe>');
						// $("#detail-iframe").prop('src', 'https://maps.google.com/maps?q=10.305385,77.923029&hl=es;z=14&amp;output=embed');
				});

				function show_popup(){
					
				};
				window.setTimeout(show_popup, 3000 );
			}); 
			 // 5 seconds
		});
	</script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


@endsection