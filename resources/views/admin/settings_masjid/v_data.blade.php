	@extends('layouts.admin')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
           		<div class="card-header">
           			<h3 class="card-title">Data Settings Masjid</h3>
           		</div>
	           	<div class="card-body">
	           		<form role="form" action="{{ url('admin/setting-masjid') }}" method="POST" enctype="multipart/form-data">
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
	           				<div class="col-sm-6">
	           					<!-- text input -->
	           					<div class="form-group">
	           						<label>Nama Masjid</label>
	           						<input type="hidden" class="form-control" placeholder="Nama Masjid ..." value="{{ $key[0]->id }}" name="id" required="">
	           						<input type="text" class="form-control" placeholder="Nama Masjid ..." value="{{ $key[0]->nama }}" name="nama" required="">
	           						<small style="color: red">* Pastikan Nama Masjid Anda Benar</small>
	           					</div>
	           					<div class="form-group">
	           						<label>No Telp</label>
	           						<input type="number" class="form-control" placeholder="No Telp Masjid ..." value="{{ $key[0]->no_telp }}" name="no_telp" required="">
	           					</div>
	           					<div class="form-group">
	           						<label>Status Tanah</label>
	           						<select class="form-control" name="status_tanah" required="">
	           							<option>Tanah Waqaf</option>
	           							<option>Tanah Giri</option>
	           							<option>Tanah SHM</option>
	           						</select>
	           					</div>
	           					<div class="form-group">
	           						<label>Organisasi Masjid</label>
	           						<input class="form-control" type="text" value="{{ $key[0]->organisasi }}" name="organisasi" placeholder="Organisasi Masjid" required="">
	           					</div>
	           					<div class="form-group">
	           						<label>Alamat Lengkap</label>
	           						<textarea class="form-control" type="text" value="{{ $key[0]->alamat_lengkap }}" name="alamat_lengkap" placeholder="Alamat ..." required="" >{{ $key[0]->alamat_lengkap }}</textarea>
	           						<small style="color: red;">* Pastikan Alamat Benar</small>
	           					</div>
	           				</div>
	           				<div class="col-sm-6">
	           					<div class="form-group">
	           						<label>Lat & Lng</label>
	           						<input type="text" class="form-control" value="{{ $key[0]->lat_lng }}" name="lat_lng" placeholder="Ex: -7.617810,108.902679" required="">
	           						<small style="color: red;">* Pastikan Posisi latitude & longitude</small>
	           					</div>
	           					<div class="form-group">
	           						<label>Halaman Website</label>
	           						<input type="text" class="form-control" value="{{ $key[0]->website }}" name="website" placeholder="Website ..." required="">
	           					</div>
	           					<div class="form-group">
	           						<label>Kategori</label>
	           						<select class="form-control" name="kategori_masjid" required="">
	           							<option>Masjid Raya</option>
	           							<option>Masjid Agung</option>
	           							<option>Masjid Besar</option>
	           							<option>Musholla</option>
	           						</select>
	           					</div>
	           					<div class="form-group">
	           						<label>Jumlah Remaja</label>
	           						<input class="form-control" type="text" value="{{ $key[0]->jumlah_remaja }}" name="jumlah_remaja" placeholder="Jumlah Remaja Masjid ..." required="">
	           					</div>
	           					<div class="form-group">
	           						<label>Luas Tanah</label>
	           						<input class="form-control" type="text" value="{{ $key[0]->luas_tanah }}" name="luas_tanah" placeholder="Organisasi Masjid" required="">
	           						<small style="color: red">* Ex: 10.0000m2</small>
	           					</div>
	           					{{--<form role="form" action="{{ url('admin/setting-masjid/update') }}" method="POST" enctype="multipart/form-data">
	           						<div class="float-right">
	           							<button type="submit" class="btn btn-primary btn-sm">Update Data</button>	
	           						</div>
	           					</form>--}}
		           				<div class="float-right">
		           					<button type="submit" class="btn btn-success btn-sm">Save Data</button>	
		           				</div>
	           				</div>
	           			</div>
	           		</form>
	           		<button onclick="openMaps('{{ $key[0]->lat_lng }}')" class="btn btn-primary btn-sm">Info Detail Masjid</button><br><br>
	           		<div class="row">
	           			<div class="col-lg-12">	
	           				<div class="card">
	           					<div class="card-header">
	           						<h3 class="card-title">Maps Info</h3>
	           					</div>
	           					<div class="card-body">
	           						<div id="maps_track">

	           						</div>
	           					</div>
	           				</div>
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

