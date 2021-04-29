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
		.navbar-top-links li a{
			transition: 0.2s;
		}
		.navbar-top-links li a:hover{
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
					<h3 class="box-title m-b-0">Tabel Aset</h3>
					<form method="get" action="/epemanfaatan/data/aset" class="form-horizontal" style="margin-top: 25px;">
						<div class="form-group">
							<label for="yearnow" class="col-md-1 control-label"> Filter </label>
							<div class="col-md-3">
								<select class="form-control" name="s" id="statnow" onchange="this.form.submit()">
									<option <?php if ($s == "all"): ?> selected <?php endif ?> value="all">--SEMUA--</option>
									<option <?php if ($s == "proses"): ?> selected <?php endif ?> value="proses">Dalam Proses</option>
									<option <?php if ($s == "siap"): ?> selected <?php endif ?> value="siap">Aset Siap Dikerjasamakan</option>
								</select>
							</div>
						</div>
					</form>
					<div class="table-responsive">
						<table id="myTable" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Tanggal Oleh</th>
									<th>Alamat</th>
									<th>Ukuran</th>
									<th>Lokasi</th>
								</tr>
							</thead>
							<tbody>
								@if($datamap)
									@foreach($datamap as $key => $data)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ ucwords(strtolower($data->nabar)) }}</td>
										<td>{{ date('d-M-Y', strtotime(str_replace('/', '-', $data->tgloleh ))) }}</td>
										<td>{{ $data->alamat }}</td>
										<td>{{ $data->ukuran }} {{ $data->satuan }}</td>
										<td>
											<a href="/epemanfaatan/peta/cari" onclick="window.open('/epemanfaatan/peta/cari?lat={{ $data->lat }}&lon={{ $data->lon }}&alamat={{ $data->alamat }}&nabar={{ $data->nabar }}', 
						                        'newwindow', 
						                        'width=960,height=720'); 
						              			return false;">
												<i class="fa fa-map-marker" style="font-size: 20px; color: #2cabe3;"></i>
											</a>
										</td>
									</tr>
									@endforeach
								@endif
							</tbody>
						</table>
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
				// "searching": false,
				// "lengthChange": false,
			});


		});
	</script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>


@endsection