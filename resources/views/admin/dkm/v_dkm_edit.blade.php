@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="container">
				<div class="col-lg-12 col-md-12 mb-4">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Edit Anggota DKM</h3>
						</div>
						<div class="card-body">
							<div class="col-lg-12">
								<form action="{{ url('admin/dkm/' . $edit->id_dkm) }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('PUT') }}
									<div class="form-group">
										<label>Nama</label>
										<input class="form-control" type="text" name="name" value="{{ $edit->nama }}">
										<input class="form-control" type="hidden" name="id_dkm" value="{{ $edit->id_dkm }}">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<input class="form-control" type="text" name="alamat" value="{{ $edit->alamat }}">
									</div>
									<div class="form-group">
										<label>Keterangan</label>
										<input class="form-control" type="text" name="description" value="{{ $edit->description}}">
									</div>
									<div class="form-group">
										<label>Jabatan</label>
										<select class="form-control" name="id_jabatan">
											@foreach($jabatan as $key)
												<option selected="" value="{{ $key->id_jabatan }}">{{$key->name}}</option>
											@endforeach 
										</select>
									</div>
									<div>
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