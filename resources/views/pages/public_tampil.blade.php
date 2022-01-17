@extends('layouts.master')

@section('css')

	<!-- Bootstrap Core CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Footable CSS -->
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet">
	<link href="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
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
			padding-left: 20px;
			padding-right: 20px;
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
			background-color: #fefbe9;
			border: 1px solid #ddd;
			border-bottom: 2px solid #f0a04b;
		}
		.footable-odd {
			background-color: #fefbe9;
		}
		.footable-row-detail {
		    background-color: #fff5e7;
		}
		.tab-pane {
			margin-left: 20px;
			margin-right: 20px;
		}
		.tooltip {
			position: fixed;
		}
		/*.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td, .table > thead > tr > th, .table-bordered {
		    border-top: 1px solid #fff;
		}*/
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 75px; padding-left: 50px; padding-right: 50px; background-color: #fefbe9">
		<div class="row text-center m-b-20" >
			<h2 class="" style="font-weight: bold;">{{ $nm_rekanan }}</h2>
			<h3 <?php if ($nm_rekanan == ''): ?> style="font-weight: bold;" <?php endif ?> >NPWP: {{ $npwp }}</h3>
		</div>
		<div class="row">
			<!-- <div class="white-box" style="background-color: #f7fafc; box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
		border-radius: 8px;"> -->
			<div class="white-box" style="box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
		border-radius: 8px;">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a style="border-top-left-radius: 8px; border-top-right-radius: 8px;" href="#home1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Permohonan</span></a></li>
					<li role="presentation" class=""><a style="border-top-left-radius: 8px; border-top-right-radius: 8px;" href="#profile1" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">PKS Terbit</span></a></li>
				   <!--  <li role="presentation" class=""><a style="border-top-left-radius: 8px; border-top-right-radius: 8px;" href="#messages1" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Pembayaran</span></a></li> -->
				</ul>
				<!-- Tab panes -->
				<div class="tab-content" style="overflow-x: auto;">
					<div role="tabpanel" class="tab-pane fade active in" id="home1">
						@if (!(isset($dataprogress[0]->nomor))) 
						<div class="col-md-12">
							<h2>Tidak ada data</h2>
						</div>
						@else
						<table id="demo-foo-accordion" class="table toggle-circle" cellspacing="14">
							<thead>
								<tr>
									<th data-toggle="true"></th>
									<th>Nomor Referensi</th>
									<th>No Surat</th>
									<th>Tgl Surat</th>
									<th class="col-md-4">Ringkasan</th>
									<th>Aset yang dikerjasamakan</th>
									<th data-hide="all"> </th>
								</tr>
							</thead>
							<tbody>
								@for($i=0; $i < count($dataprogress); $i++)
								<?php $flag = 0; ?>
								<tr class="footable-even">
									<td></td>
									<td>{{ $dataprogress[$i]->noref }}</td>
									<td>{{ $dataprogress[$i]->no_surat ? $dataprogress[$i]->no_surat : "-"}}</td>
									<td>
										{{ $dataprogress[$i]->tgl_surat ? date("d-M-Y", strtotime($dataprogress[$i]->tgl_surat)) : "-"}}
									</td>
									<td>{{ $dataprogress[$i]->ringkasan }}</td>
									<td><button class="btn btn-info" style="background-color: #f6c453; border: #f6c453" data-toggle="modal" data-target="#modal-aset-{{ $i }}">Lihat Aset</button></td>
									<div id="modal-aset-{{$i}}" class="modal fade" role="dialog">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title"><b>Aset yang dikerjasamakan</b></h4>
												</div>
												<div class="modal-body">
													<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
														<div class="col-md-1">No</div>
														<div class="col-md-5">Alamat</div>
														<div class="col-md-2">Ukuran</div>
														<div class="col-md-2">Tanggal Oleh</div>
													</div>
													@foreach($dataprogress[$i]->aset as $key => $aset)
													<div class="col-md-12" style="margin-bottom: 10px">
														<div class="col-md-1">{{ $key+1 }}</div>
														<div class="col-md-5">{{ $aset->alamat }}</div>
														<div class="col-md-2">{{ $aset->ukuran }} {{ $aset->satuan }}</div>
														<div class="col-md-2">{{ date("d-M-Y", strtotime($aset->tgloleh)) }}</div>
													</div>
													@endforeach
													<div class="clearfix"></div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default pull-right" style="margin-right: 10px" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<td>
										<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
											<div class="col-md-4">Kegiatan</div>
											<div class="col-md-2 col-md-offset-1">Tanggal Proses</div>
										</div>
										<?php $nomor = 1; ?>
										@while(true)
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-4">{{ $nomor }}. {{ $dataprogress[$i]->status }}</div>
											<?php $nomor++; ?>
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">{{ $dataprogress[$i]->tanggal_proses }}</div>
											<div class="col-md-1">
												@if(isset($dataprogress[$i+1]->noref) && $dataprogress[$i]->noref == $dataprogress[$i+1]->noref)
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check" data-toggle='tooltip' title='Selesai'></i>
												</button>
												<?php $i++; ?>
												@elseif($dataprogress[$i]->nomor == 14)
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check" data-toggle='tooltip' title='Selesai'></i>
												</button>
												<?php $flag = 1; ?>
												@else
												<button style="" class="btn btn-danger waves-effect btn-circle waves-light">
													<i class="fa fa-close" data-toggle='tooltip' title='Sedang dikerjakan'></i>
												</button>
												<?php $flag = 1; ?>
												@endif
											</div>
										</div>
										<?php if ($flag == 1) break; ?>
										@endwhile
									</td>
								</tr>
								
								@endfor
							</tbody>
						</table>
						@endif
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile1">
						<div class="col-md-12">
							@if(!(isset($datahistory[0]->nm_rekanan)))
							<h2>Tidak ada data</h2>
							@else
							<div class="table-responsive">
								<table class="table table-hover display compact">
									<thead>
										<tr>
											<th>No</th>
											<th>Perjanjian</th>
											<th>Barang</th>
											<th>Peruntukan</th>
											<th>Ukuran</th>
											<th>Alamat</th>
											<th>Nomor PKS</th>
											<th>Durasi</th>
										</tr>
									</thead>
									<tbody>
										@foreach($datahistory as $key => $his)
											<tr>
												<td>{{ $key + 1 }}</td>
												<td>{{ $his->nm_perjanjian }}</td>
												<td>{{ ucwords(strtolower($his->nabar)) }}</td>
												<td>{{ $his->nm_peruntukan }}</td>
												<td>{{ $his->ukuran }} {{ $his->satuan }}</td>
												<td>{{ $his->alamat }}</td>
												<td>{{ $his->no_pks }}</td>
												<td>{{ date('d/M/Y', strtotime($his->tgl_awalpks)) }} - {{ date('d/M/Y', strtotime($his->tgl_akhirpks)) }}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							@endif
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="messages1">
						<div class="col-md-6">
							<h3>Come on you have a lot message</h3>
							<h4>you can use it with the small code</h4> </div>
						<div class="col-md-5 pull-right">
							<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
						</div>
						<div class="clearfix"></div>
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
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/custom.min.js') }}"></script>
	<!-- Footable -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
	<!--FooTable init-->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/footable-init.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection