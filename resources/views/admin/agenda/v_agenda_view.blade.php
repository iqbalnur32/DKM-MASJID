@extends('layouts.admin')
@section('content')
	
	<div class="content">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Jadwal Agenda Hari Ini</h3>
					</div>
					<div class="card-body">
						<!-- Check If Agenda Kosong  -->
						@empty($agenda->count() > 0)
							<div class="alert alert-warning alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>Upsss!! Agenda Anda Kosong</strong>
							</div>
						@endempty

						@foreach($agenda->chunk(3) as $items)
						<div class="row">
							@foreach($items as $key)
							<div class="col-md-4">
								<div class="card card-widget widget-user">
									<!-- Add the bg color to the header using any of the bg-* classes -->
									<div class="widget-user-header bg-info">
										<h5 class="widget-user-desc text-center">{{ $key->title }}</h5>
									</div>
									<div class="widget-user-image">
										<img style="height: 70px;" class="img-fluid elevation-2" src="{{ url('admin/agenda/' . $key->foto) }}" alt="User Avatar">
									</div>
									<div class="card-body" style="height: 190px;">
										<div class="row">
											<div class="col-lg-12">
												<h3 class="box-title text-center">{{ $key->description }}</h3>
												<p class="box-title text-center">{{ $key->penceramah }}</p>
												<p class="box-title text-center">{{ $key->tanggal_agenda }} | {{ $key->pukul }}</p>
											</div>										
										</div>
										<!-- /.row -->
									</div>
									<div class="card-footer">
										<center> 
											<button class="btn btn-danger btn-sm" type="button" ><i class="fa fa-trash"></i></button> 
											<button class="btn btn-info btn-sm" type="button" ><i class="fa fa-pencil-alt"></i></button> 
										</center> 
									</div>
								</div>
							</div>
							@endforeach
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
@parent

@endsection