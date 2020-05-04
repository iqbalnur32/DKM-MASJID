@extends('layouts.admin')
@section('content')
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Transaksi KAS Masuk</h3>
					</div>
					<div class="card-body">
						<form method="POST" action="{{ url('admin/pemasukan') }}">
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

							<div class="row">
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="form-group">
										<label>Uang sejumlah</label>
										<input class="form-control" type="number" name="saldo" required="">	
									</div>
									<div class="form-group">
										<label>Sumber Dana</label>
										<select name="pemasukan" class="form-control">
											@foreach($filter as $key)
												<option selected="" value="{{ $key->id_coa }}">{{ $key->id_coa }} {{ $key->description }}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label>Tanggal Transaksi</label>
										<input type="date" class="form-control" value="{{ date('Y-m-d') }}" required="" name="tanggal_masuk">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-xs-12">
									<div class="form-group">
										<label>No Ref</label>
										<input type="number" class="form-control" required="" name="no_transaksi" value="{{ $no }}" readonly>
									</div>
									<div class="form-group">
										<label>Masuk Ke</label>
										<select name="masuk_ke" class="form-control">
											@foreach($masuk as $key)
												<option selected="" value="{{ $key->id_coa }}">{{ $key->id_coa }} {{ $key->description }}</option>
											@endforeach
										</select>
									<div class="form-group">
										<label>Keterangan</label>
										<textarea class="form-control" name="description" required=""></textarea>
									</div>
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-primary">Save</button>
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