@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">COA Akun</h3>
					</div>
					<div class="card-body">
						<div class="form-group float-sm-center">
							<button data-toggle="modal" data-target="#add-coa" class="btn btn-success btn-sm">Tambah COA</button>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 mb-4">
								<table class="table table-bordered">
									<thead>
										<th>No</th>
										<th>No COA</th>
										<th>Type</th>
										<th>Description</th>
										<th>Saldo</th>
										<th><i class="fas fa-cogs"></i></th>
									</thead>
									<tbody>
										@foreach($data as $key)
										<tr>
											<td class="text-dark">{{ $loop->iteration }}</td>
											<td class="text-dark">{{ $key->id_coa }}</td>
											<td class="text-dark">{{ $key->type }}</td>
											<td class="text-dark">{{ $key->description }}</td>
											<td class="text-dark">{{ $key->saldo }}</td>
											<td align="center">
												<form action="{{ url('admin/coa/' . $key->id_coa) }}" method="POST">
													{{ method_field('DELETE') }}
													{{ csrf_field() }}
													<a class="btn btn-success btn-sm" href="{{ url('admin/coa/' . $key->id_coa . '/edit') }}"><i class="fas fa-pencil-alt"></i></a>
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

	<!-- Modal -->
	<div class="modal fade" id="add-coa">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center">Daftar COA AKUN</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{ url('admin/coa') }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>No COA</label>							
									<input class="form-control" type="text" name="id_coa" placeholder="No COA ...">
								</div>
								<div class="form-group">
									<label>Type Debit / Kredit</label>
									<select class="form-control" name="type">
										<option value="Debit">Debit</option>
										<option value="Kredit">Kredit</option>
										<option value="Cash">Cash</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Jenis Parent</label>
									<select class="form-control" type="text" name="jenis">
										@foreach($data as $key)
											<option value="{{ $key->id_coa }}">{{ $key->id_coa }} {{ $key->description }}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label>Saldo</label>
									<input class="form-control" type="text" name="saldo" placeholder="Rp ...">
								</div>
							</div>
						</div> 
						<div class="form-group">
							<label>Tanggal Masuk</label>
							<input class="form-control date" value="{{ date('Y-m-d') }}" name="tanggal_masuk">
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="form-control" name="description" placeholder="Keterangan ..."></textarea>
								</div>
							</div>
						</div>
						<hr>
						<div class="justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save</button>
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