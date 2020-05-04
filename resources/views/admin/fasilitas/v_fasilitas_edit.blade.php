@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Edit Fasilitas</h3>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/fasilitas/' . $edit->id_fasilitas) }}" method="POST">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
							<div class="form-group">
								<label>Fasilitas</label>
								<input class="form-control" type="hidden" name="id_fasilitas" value="{{ $edit->id_fasilitas }}">
								<input class="form-control" type="text" name="fasilitas" value="{{ $edit->fasilitas }}">
							</div>
							<div class="form-group">
								<label>Jumlah</label>
								<input class="form-control" type="number" name="jumlah" value="{{ $edit->jumlah }}">
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" name="description">{{ $edit->description }}</textarea>
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
@endsection
@section('scripts')
@parent

@endsection