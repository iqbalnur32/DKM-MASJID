@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Jamaah</h3>
						<button class="float-sm-right btn btn-success btn-sm">Tambah Jamaah</button>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12 col-md-12"> 
								 <table class="table table-bordered">
								 	<thead>
								 		<tr>
								 			<th>No</th>
								 			<th>Nama</th>
								 			<th>Jenis Kelamin</th>
								 			<th>Status</th>
								 			<th>Tanggal Lahir</th>
								 			<th>Tempat Lahir</th>
								 			<th><i class="fas fa-cogs"></i></th>
								 		</tr>
								 	</thead>
								 	<tbody>
								 		@foreach($jamaah as $key)
								 			<tr>
								 				<td class="text-capitalize text-dark">{{ $loop->iteration }}</td>
								 				<td class="text-capitalize text-dark">{{ $key->nama }}</td>
								 				<td class="text-capitalize text-dark">{{ $key->jenis_kelamin }}</td>
								 				<td class="text-capitalize text-dark">{{ $key->status_jamaah }}</td>
								 				<td class="text-capitalize text-dark">{{ $key->tgl_lahir }}</td>
								 				<td class="text-capitalize text-dark">{{ $key->tempat_lahir }}</td>
								 				<td align="center">
								 					<a class="btn btn-success btn-sm" href="{{ url('admin/jamaah/' . $key->id_users) }}"><i class="fas fa-pencil-alt"></i></a>
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