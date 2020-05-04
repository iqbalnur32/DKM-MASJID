@extends('layouts.admin')
@section('content')
<style type="text/css">
	.jumbotron {
		background-image: url("/adminlte/dist/masjid.png");
		padding-bottom: 10%;
		background-position: center;
	}
</style>
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">DKM Masjid</h3>
					</div>
					<div class="card-body">
						<div class="jumbotron">
							<div class="col-lg-6">
								<h1 class="display-4">Selamat Datang</h1>
							</div>
						</div>
						<div class="form-group float-sm-center">
							<button data-toggle="modal" data-target="#add_dkm" class="btn btn-success btn-sm">Tambah DKM</button>
						</div>					
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
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
									<thead>
										<tr>
											<th style="widows: 2px;">NO</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Jabatan</th>
											<th><i class="fas fa-cogs"></i></th>
										</tr>
									</thead>
									<tbody>
										
										@foreach($dkm as $key)
											<tr class="data-row">
												<td class="text-capitalize text-dark">{{ $loop->iteration }} </td>
												<td class="text-capitalize text-dark">{{ $key->nama }}</td>
												<td class="text-capitalize text-dark">{{ $key->alamat }}</td>
												<td class="text-capitalize text-dark">{{ $key->jabatan }}</td>
												<td align="center">
													<button class="edit-modal btn btn-primary btn-sm" id="select" data-toggle="modal" data-target="#edit-dkm" 
														data-id_dkm="{{ $key->id_dkm }}"
														data-nama="{{ $key->nama }}"
														data-alamat="{{ $key->alamat }}"
														data-description="{{ $key->description }}">
													<i class="fas fa-info-circle"></i></button>
													<a class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i></a>
													<a href="{{ url('admin/dkm/' . $key->id_dkm . '/edit') }}" class="btn btn-success btn-sm" href=""><i class="fas fa-pencil-alt"></i></a>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="add_dkm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Add Anggota DKM </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ url('admin/dkm') }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Nama</label>							
									<input class="form-control" type="text" name="name">
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<input class="form-control" type="text" name="description">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Alamat</label>
									<input class="form-control" type="text" name="alamat">
								</div>
								<div class="form-group">
									<label>Jabatan DKM</label>
									<select class="form-control" name="id_jabatan">
										@foreach($jabatan as $key)
											<option value="{{ $key->id_jabatan }}">{{$key->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<hr>
							<div class="justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<!-- Modal Edit -->
	<div class="modal fade" id="edit-dkm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Detail Anggota DKM </h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Nama</label>	
									<input id="id_dkm" class="form-control" type="hidden" disabled name="name">
									<input id="nama" class="form-control" type="text" disabled name="name">
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<input id="description" class="form-control" type="text" disabled name="description">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Alamat</label>
									<input id="alamat" class="form-control" type="text" disabled name="alamat">
								</div>
							</div>
							<hr>
							<div class="justify-content-between">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
@endsection
@section('scripts')
@parent

@endsection