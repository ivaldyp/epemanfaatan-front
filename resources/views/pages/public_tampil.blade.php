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
			padding-left: 5px;
			padding-right: 5px;
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
		.tab-pane {
			margin-left: 20px;
			margin-right: 20px;
		}
		.tooltip {
		    position: fixed;
		}
	</style>

@endsection

<!-- ////////////////// -->

@section('content')

	<div class="container" style="margin-top: 75px; padding-left: 50px; padding-right: 50px; background-color: #fefbe9">
		<div class="row text-center m-b-20" >
			<h2 class="" style="font-weight: bold;">{{ $query['nm_rekanan'] }}</h2>
			<h3>{{ $query['id_rekanan'] }}</h3>
		</div>
		<div class="row">
            <div class="white-box" style="background-color: #f7fafc; box-shadow: 0 0 5px 0 rgb(0 0 0 / 20%);
		border-radius: 8px;">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Permohonan</span></a></li>
                    <li role="presentation" class=""><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">PKS Terbit</span></a></li>
                    <li role="presentation" class=""><a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Pembayaran</span></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content" style="overflow-x: auto;">
                    <div role="tabpanel" class="tab-pane fade active in" id="home1">
                        <table id="demo-foo-accordion" class="table toggle-circle">
							<thead>
								<tr>
									<th data-toggle="true"> No. </th>
									<th>Perihal </th>
									<th>Alamat </th>
									<th>Peruntukan </th>
									<th>Luas</th>
									<th>Durasi</th>
									<th data-hide="all"> </th>
								</tr>
							</thead>
							<tbody>
								<tr class="footable-even">
									<td>ABC-02-BBB</td>
									<td>Permohonan PKS gitu</td>
									<td>JL. ABC no. 23</td>
									<td>Tempat Sampah</td>
									<td>1000 m2</td>
									<td>02/04/2021 - 03/05/2025</td>
									<td>
										<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
											<div class="col-md-2 col-md-offset-1">Tanggal</div>
											<div class="col-md-6">Kegiatan</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check" data-toggle='tooltip' title='Selesai'></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Isi formulir secara online</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check" data-toggle='tooltip' title='Selesai'></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Anter berkas ke gubernur</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check" data-toggle='tooltip' title='Selesai'></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Fotokopi 5 lembar</div>
											<div class="col-md-1">
												<button style="" class="btn btn-danger waves-effect btn-circle waves-light">
													<i class="fa fa-close" data-toggle='tooltip' title='Sedang dikerjakan'></i>
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr class="footable-even">
									<td>ABC-02-BBB</td>
									<td>Permohonan PKS gitu</td>
									<td>JL. ABC no. 23</td>
									<td>Tempat Sampah</td>
									<td>1000 m2</td>
									<td>02/04/2021 - 03/05/2025</td>
									<td>
										<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
											<div class="col-md-2 col-md-offset-1">Tanggal</div>
											<div class="col-md-6">Kegiatan</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-danger waves-effect btn-circle waves-light">
													<i class="fa fa-close"></i>
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr class="footable-even">
									<td>ABC-02-BBB</td>
									<td>Permohonan PKS gitu</td>
									<td>JL. ABC no. 23</td>
									<td>Tempat Sampah</td>
									<td>1000 m2</td>
									<td>02/04/2021 - 03/05/2025</td>
									<td>
										<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
											<div class="col-md-2 col-md-offset-1">Tanggal</div>
											<div class="col-md-6">Kegiatan</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-danger waves-effect btn-circle waves-light">
													<i class="fa fa-close"></i>
												</button>
											</div>
										</div>
									</td>
								</tr>
								<tr class="footable-even">
									<td>ABC-02-BBB</td>
									<td>Permohonan PKS gitu</td>
									<td>JL. ABC no. 23</td>
									<td>Tempat Sampah</td>
									<td>1000 m2</td>
									<td>02/04/2021 - 03/05/2025</td>
									<td>
										<div class="col-md-12 hidden-xs hidden-sm" style="padding-bottom: 10px; font-weight: bold;">
											<div class="col-md-2 col-md-offset-1">Tanggal</div>
											<div class="col-md-6">Kegiatan</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-twitter waves-effect btn-circle waves-light">
													<i class="fa fa-check"></i>
												</button>
											</div>
										</div>
										<div class="col-md-12" style="padding-bottom: 10px;">
											<div class="col-md-2 col-md-offset-1" style="font-weight: bolder;">01/02/2021</div>
											<div class="col-md-6">Ngerjain sesuatu gitu biar bisa dibilang progress</div>
											<div class="col-md-1">
												<button style="" class="btn btn-danger waves-effect btn-circle waves-light">
													<i class="fa fa-close"></i>
												</button>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile1">
                        <div class="col-md-6">
                            <h3>Lets check profile</h3>
                            <h4>you can use it with the small code</h4> </div>
                        <div class="col-md-5 pull-right">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                        </div>
                        <div class="clearfix"></div>
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
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/cbpFWTabs.js') }}"></script>
	<script type="text/javascript">
		(function () {
				[].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
				new CBPFWTabs(el);
			});
		})();
	</script>
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/custom.min.js') }}"></script>
	<!-- Footable -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
	<!--FooTable init-->
	<script src="/{{config('app.name')}}{{ ('/public/ample/js/footable-init.js') }}"></script>
	<!-- Style Switcher -->
	<script src="/{{config('app.name')}}{{ ('/public/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

@endsection