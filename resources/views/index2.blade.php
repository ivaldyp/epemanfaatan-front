@extends('layouts.master')

@section('content')


	<section >
		<div class="row">   
			<div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide2.jpg') }}" alt="Owl Image"></div>
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide3.jpg') }}" alt="Owl Image"></div>
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide4.jpg') }}" alt="Owl Image"></div>
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide6.jpg') }}" alt="Owl Image"></div>
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide1.jpg') }}" alt="Owl Image"></div>
				<div class="item"><img src="{{ ('/epemanfaatan/public/ample/plugins/images/heading-bg/slide3.jpg') }}" alt="Owl Image"></div>
			</div>
		</div>
	</section>
	<section>
		<div class="row container-fluid" style="margin-top: 25px; padding-top: 15px;">
			<div class="col-md-12">
				<div class="col-md-7">
					<div class="white-box" style="box-shadow: 0 0 8px 0 rgb(0 0 0 / 20%); border-radius: 5px">
						<div class="row">
							<div class="col-md-6 col-sm-6"><h3>Halo, User. Mau cari apa?</h3></div>
							<div class="col-md-6 col-sm-6">
								<div class="col-md-4 col-sm-4"><i class="fa fa-car text-danger"></i></div>
								<div class="col-md-4 col-sm-4"><i class="fa fa-building text-warning"></i></div>
								<div class="col-md-4 col-sm-4"><i class="fa fa-map-marker text-info"></i></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="white-box" style="box-shadow: 0 0 8px 0 rgb(0 0 0 / 20%); border-radius: 5px">
						<div class="row" style="vertical-align: middle;">
							<div class="col-md-9"><h3>Jadwal Lelang Terdekat</h3></div>
							<div class="col-md-3 pull-right">
								<a href="#"><h5>Lihat <br>Semua</h5></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="white-box" style="background-image: linear-gradient(to bottom right, #2cabe3, #1b4f72); margin-bottom: 0px">
			<div id="owl-items" class="owl-carousel owl-theme">
				<a href="detail-lelang.html">
					<div class="panel panel-default" style="border-radius: 8px;">
						<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
							<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img1.jpg') }}" class="img-items" style="transition: transform .2s;">
						</div>
						<div class="panel-body" style="padding-top: 10px">
							<div>
								<p class="font-bold">Benda 1</p>
								<p>
									<span style="color: purple" class="font-bold"> Rp 10.000.000 </span> <br>
									<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
									<i class="ti ti-location-pin"></i> Jakarta
								</p>
							</div>
						</div>
					</div>
				</a>
				
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img2.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 2</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 50.000.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img3.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 3</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 26.722.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img1.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 1</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 10.000.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img2.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 2</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 50.000.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img3.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 3</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 26.722.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img1.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 1</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 10.000.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img2.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 2</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 50.000.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
				<div class="panel panel-default" style="border-radius: 8px;">
					<div class="panel-heading" style=" border-top-right-radius: 8px; border-top-left-radius: 8px; padding: 0px; overflow: hidden;">
						<img src="{{ ('/epemanfaatan/public/ample/plugins/images/big/img3.jpg') }}" class="img-items" style="transition: transform .2s;">
					</div>
					<div class="panel-body" style="padding-top: 10px">
						<div>
							<p class="font-bold">Benda 3</p>
							<p>
								<span style="color: purple" class="font-bold"> Rp 26.722.000 </span> <br>
								<i class="ti ti-calendar"></i> 31 Maret 2021 <br>
								<i class="ti ti-location-pin"></i> Jakarta
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>

@endsection('content')