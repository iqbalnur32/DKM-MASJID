@extends('layouts.report')
@section('content')

<style type="text/css">
	.card-header{
		background-color: rgba(0,0,0,.03)
	}

	.table td{
		border-color: #f3f1f1;
	}
</style>

<div class="content">
	<div class="row">
		<div class="col-xl-12 col-md-12">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-header">
					<h3 class="card-title">General Reporting</h3>
				</div>
				<div class="card-body">
					<br>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Laporan Pemasukan Bulan <b>{{ date('M Y') }}</b></h3>
										<button class="float-right btn btn-success btn-sm"><i class="fas fa-print"></i></button>
									</div>
									<div class="card-body">
										<table class="table">
											<thead>
												<tr>
													<th style="width: 60%;">Pemasukan</th>
													<th style="width: 20%;" >No Transaksi</th>
													<th style="width: 20%;">Saldo</th>
												</tr>
												<tbody>
													@foreach($report as $key)
														<tr>
															<td class="text-capitalize text-dark">{{ $key->description }}</td>
															<td class="text-capitalize text-dark">{{ $key->no_transaksi }}</td>
															<td class="text-capitalize text-dark">Rp. {{ $key->amount }}</td>
														</tr> 	
													@endforeach
												</tbody>
											</thead>
										</table>										
									</div>

								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Laporan Pengeluaran Bulan <b>{{ date('M Y') }}</b></h3>
										<button class="float-right btn btn-success btn-sm"><i class="fas fa-print"></i></button>
									</div>
									<div class="card-body">
										<table class="table">
											<thead>
												<tr>
													<th style="width: 60%;">Pengeluaran</th>
													<th style="width: 20%;" >No Transaksi</th>
													<th style="width: 20%;">Saldo</th>
												</tr>
												<tbody>
													@foreach($pengeluaran as $key)
														<tr>
															<td class="text-capitalize text-dark">{{ $key->description }}</td>
															<td class="text-capitalize text-dark">{{ $key->no_transaksi }}</td>
															<td class="text-capitalize text-dark">Rp. {{ $key->amount }}</td>
														</tr> 	
													@endforeach
												</tbody>
											</thead>
										</table>										
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Neraca Aktiva Bulan <b>{{ date('M Y') }}</b></h3>
										<button class="float-right btn btn-success btn-sm"><i class="fas fa-print"></i></button>
									</div>
									<div class="card-body">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width: 60%;">Keterangan</th>
													<th style="width: 20%;" >Type</th>
													<th style="width: 20%;">Saldo</th>
												</tr>
												<tbody>
													@foreach($neraca as $key)
														<tr>
															<td class="text-capitalize text-dark">{{ $key->description }}</td>
															<td class="text-capitalize text-dark">{{ $key->type }}</td>
															<td class="text-capitalize text-dark">Rp. {{ $key->saldo }}</td>
														</tr> 	
													@endforeach
													<tr>
														<td></td>
														<td class="text-capitalize text-dark">Total</td>
														<td class="text-capitalize text-dark">Rp. {{ $saldo }}</td>
													</tr>
												</tbody>
											</thead>
										</table>										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Neraca Aktiva Lancar & Kewajiban Bulan <b>{{ date('M Y') }}</b></h3>
										<button class="float-right btn btn-success btn-sm"><i class="fas fa-print"></i></button>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<h3 class="card-title">Aktiva Lancar</h3><hr>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th style="width: 40%;">Keterangan</th>
															<th style="width: 20%;" >Type</th>
															<th style="width: 20%;">Saldo</th>
														</tr>
														<tbody>
															@foreach($aktiva_lancar as $key)
															<tr>
																<td class="text-capitalize text-dark">{{ $key->description }}</td>
																<td class="text-capitalize text-dark">{{ $key->type }}</td>
																<td class="text-capitalize text-dark">Rp. {{ $key->saldo }}</td>
															</tr> 	
															@endforeach
															<tr>
																<td></td>
																<td style="font-weight: bold;" class="text-capitalize text-dark">Total</td>
																<td class="text-capitalize text-dark">Rp. {{ $saldo_lancar }}</td>
															</tr>
														</tbody>
													</thead>
												</table>
											</div>
											<div class="col-md-6">
												<h3 class="card-title">Aktiva Wajib / Bersih</h3><hr>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th style="width: 40%;">Keterangan</th>
															<th style="width: 20%;" >Type</th>
															<th style="width: 20%;">Saldo</th>
														</tr>
														<tbody>
															@empty($aktiva_wajib->count() > 0)
															<div class="alert alert-warning alert-block">
																<button type="button" class="close" data-dismiss="alert">×</button> 
																<strong>Aktiva Wajib Bulan {{ date('M Y') }} Kosong</strong>
															</div>
															@endempty
															@foreach($aktiva_wajib as $key)
															<tr>
																<td class="text-capitalize text-dark">{{ $key->description }}</td>
																<td class="text-capitalize text-dark">{{ $key->type }}</td>
																<td class="text-capitalize text-dark">Rp. {{ $key->saldo }}</td>
															</tr> 	
															@endforeach
															<tr>
																<td></td>
																<td class="text-capitalize text-dark">Total</td>
																<td class="text-capitalize text-dark">Rp. {{ $saldo_wajib }}</td>
															</tr>
														</tbody>
													</thead>
												</table>
											</div>
											<div class="float-right">
												<h3 class="card-title">Total Aktiva Lancar + Aktiva Wajib / Bersih Sebesar <b>Rp. {{ $saldo_aktiva_wajib_lancar }}</b></h3>
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
	</div>
</div>

@endsection
@section('scripts')
@parent

@endsection

