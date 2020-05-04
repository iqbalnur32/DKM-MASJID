@extends('layouts.admin')
@section('content')
<style type="text/css">
	.jumbotron {
		background-image: url("/adminlte/dist/masjid3.jpg");
		padding-bottom: 10%;
		background-position: cover;
		background-repeat: no-repeat;
	}
</style>
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Absensi Sholat Harian</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="jumbotron">
									<h3 class="text font-weight-bold" style="color: #fff">Bekasi</h3>
									<div class="row">
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Imsak</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="imsak12"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Subuh</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="subuh12"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Dzuhur</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="dzuhur12"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Ashar</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="ashar12"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Mahgrib</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="maghrib12"></span>
												</div>
											</div>
										</div>
										<div class="col-lg-2">
											<div class="info-box bg-white">
												<div class="info-box-content">
													<span class="text-center font-weight-bold info-box-text">Isya</span>
													<span style="color: #28a745; font-size: 23px;" class="text-center info-box-number" id="isya12"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<form action="" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Subuh</label>
												<input class="form-control" type="number" name="subuh" required="" >
											</div>
											<div class="form-group">
												<label>Ashar</label>
												<input class="form-control" type="number" name="ashar" required="">
											</div>
											<div class="form-group">
												<label>Isya</label>
												<input class="form-control" type="number" name="isya" required="">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<label>Dzuhur</label>
												<input class="form-control" type="number" name="dzuhur" required="">
											</div>
											<div class="form-group">
												<label>Mahgrib</label>
												<input class="form-control" type="number" name="maghrib" required="">
											</div>
											<div class="form-group">
												<label>Tanggal</label>
												<input class="form-control" type="date" name="tanggal" value="{{ date('Y-m-d') }}" required="">
											</div>

											<div class="float-right">
												<button class="btn btn-success btn-sm">Save</button>
											</div>	
										</div>	
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
@parent

@endsection