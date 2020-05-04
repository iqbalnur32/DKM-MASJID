@extends('layouts.admin')
@section('content')

	<div class="content">
		<div class="float-sm-center">
			<button data-toggle="modal" data-target="#add_dkm" class="btn btn-success btn-sm">Tambah DKM</button>
		</div>		
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Berkas Masjid</h3>
					</div>
					<div class="card-body">
						<form role="form">
							<div class="row">
								<div class="form-group">
									<label>Berkas File</label>
									<input class="form-control" type="file" name="file">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Berkas Masjid</h3>
					</div>
					<div class="card-body">
						<form role="form">
							<div class="row">
								<div class="col-lg-12">	
									<div class="form-group">
										<label>Title</label>
										<input class="form-control" type="text" name="title">
									</div>
									<div class="form-group">
										<label>Foto</label>
										<input class="form-control" type="file" name="foto">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	
@endsection
@section('scripts')
@parent

@endsection