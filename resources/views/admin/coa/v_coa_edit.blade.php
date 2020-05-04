@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Edit COA Akun</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 mb-4">
								<form action="{{ url('admin/coa/' . $key->id_coa) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('PUT') }}
									<div class="form-group">
										<label>No Coa</label>
										<input class="form-control" type="number" name="id_coa" value="{{ $key->id_coa }}">
									</div>
									<div class="form-group">
										<label>Type Debit / Kredit</label>
										<select class="form-control" name="type">
											<option value="Debit">Debit</option>
											<option value="Kredit">Kredit</option>
											<option value="Cash">Cash</option>
										</select>
									</div>
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
										<input class="form-control" type="text" name="saldo" placeholder="Rp ..." value="{{ $key->saldo }}">
									</div>
									<div class="form-group">
										<label>Tanggal Masuk</label>
										<input class="form-control date" name="tanggal_masuk" value="{{ $key->tanggal_masuk }}">
									</div>
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control" name="description" placeholder="Keterangan ...">{{ $key->description }}</textarea>
									</div>
									<div class="float-right">
										<button type="submit" class="btn btn-success btn-sm">Update</button>
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