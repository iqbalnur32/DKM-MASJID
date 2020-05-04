@extends('layouts.admin')
@section('content')
	
	<div class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Agenda Masjid</h3>
					</div>
					<div class="card-body">
						<form role=form enctype="multipart/form-data" action="{{ url('admin/agenda') }}" method="POST">
							
							{{ csrf_field() }}
							@if ($message = Session::get('sukses'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>{{ $message }}</strong>
							</div>
							@endif
							
							@if ($message = Session::get('gagal'))
							<div class="alert alert-danger alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>{{ $message }}</strong>
							</div>
							@endif
							
							@if ($message = Session::get('peringatan'))
							<div class="alert alert-warning alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>{{ $message }}</strong>
							</div>
							@endif
							<div class="row">
								<div class="col-md-6 col-lg-6 mb-4">
									<div class="form-group">
										<label>Judul Acara</label>
										<input class="form-control" type="text" name="title" >
									</div>
									<div class="form-group">
										<label>Tanggal Acara</label>
										<input class="form-control" type="date" name="tanggal_agenda" value="{{ date('Y-m-d') }}" >
									</div>
								</div>
								<div class="col-md-6 col-lg-6 mb-4">
									<div class="form-group">
										<label>Penceramah</label>
										<input class="form-control" type="text" name="penceramah" >
									</div>
									<div class="form-group">
										<label>Pukul</label>
										<input class="form-control" type="time" name="pukul" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 mb-4">
									 <div class="form-group">
									 	<label>Lampirkan Foto</label>
									 	<input class="form-control" type="file" name="foto">
									 </div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 mb-4">
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control" name="description"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-xl" type="submit">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('scripts')
@parent

@endsection