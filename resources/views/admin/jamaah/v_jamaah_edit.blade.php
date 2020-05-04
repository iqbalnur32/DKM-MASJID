@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Edit Data Jamaah</h3>
					</div>
					<div class="card-body">
						<form action="{{ url('admin/jamaah/' . $edit->id_users) }}" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-6 col-md-6"> 
									<div class="form-group">
										<label>Username</label>
										<input class="form-control" type="text" name="username" value="{{ $edit->username }}">
										<input class="form-control" type="hidden" name="id_users" value="{{ $edit->id_users }}">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" type="text" name="password" value="">
									</div>
									<div class="form-group">
										<label>Nama</label>
										<input class="form-control" type="text" name="nama" value="{{ $edit->nama }}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6"> 
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="" name="email" value="{{ $edit->email }}">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<input class="form-control" type="" name="alamat" value="{{ $edit->alamat }}">
									</div>
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<input class="form-control" type="" name="jenis_kelamin" value="{{ $edit->jenis_kelamin }}">
									</div>
									<div class="float-right">
										<button class="btn btn-success btn-sm" type="submit">Edit Data</button>
									</div>
								</div>
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