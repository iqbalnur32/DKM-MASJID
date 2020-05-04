@extends('layouts.admin')
@section('content')
	<div class="content">
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
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Tambah Fasilitas</h3>
					</div>
					<div class="card-body">
						<form role="form" action="{{ url('admin/fasilitas') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-12">	
									<div class="form-group">
										<label>Fasilitas</label>
										<input class="form-control" type="text" name="fasilitas" placeholder="Fasilitas ...">
									</div>
									<div class="form-group">
										<label>Jumlah</label>
										<input class="form-control" min="0" type="number" name="jumlah" placeholder="Jumlah ...">
									</div>
									<div class="form-group">
										<label>Description</label>
										<input class="form-control" type="text" name="description" placeholder="Description ...">
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-sm">Simpan Data</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Fasilitas Masjid</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-bordered">
									<thead>
										<th>No</th>
										<th>Fasilitas</th>
										<th>Jumlah</th>
										<th>Description</th>
										<th><i class="fas fa-cogs"></i></th>
									</thead>
									<tbody>
										@foreach($fasilitas as $key)
											<tr>
												<td class="text-dark">{{ $loop->iteration }}</td>
												<td class="text-dark">{{ $key->fasilitas }}</td>
												<td class="text-dark">{{ $key->jumlah }}</td>
												<td class="text-dark">{{ $key->description }}</td>
												<td align="center">
													<a class="btn btn-success btn-sm" href="{{ url('admin/fasilitas/' . $key->id_fasilitas . '/edit') }}"><i class="fas fa-pencil-alt"></i></a>
													<form action="{{ url('admin/fasilitas/' . $key->id_fasilitas) }}" method="POST">
														{{ method_field('DELETE') }}
														{{ csrf_field() }}
														<button onclick="return confirm('Anda yakin ingin menghapus ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
													</form>
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
@endsection
@section('scripts')
@parent

@endsection