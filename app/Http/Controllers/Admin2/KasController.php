<?php

namespace App\Http\Controllers\Admin2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;

class KasController extends Controller
{	
	// Kotak Amal
	public function kotakAmal()
	{
		return view('admin.kas.v_kotak_amal');
	}
	public function kotakAmalYatim()
	{
		return view('admin.kas.v_kotak_amal_yatim');
	}

	//Generate Random
	private function generateNoTransaksi($length = 10) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function pemasukan()
	{
		$no_transaksi = $this->generateNoTransaksi(8);
		$sumber = DB::table('masjid_coa')->where('id_coa', 'like', '10%')->get();
		$masuk = DB::table('masjid_coa')->where('id_coa', 'like', '30%')->get();

		return view('admin.kas.v_pemasukan', ['no' => $no_transaksi, 'filter' => $sumber, 'masuk' => $masuk]);
	}

	public function addPemasukan(Request $request)
	{
		try {
			
			$validator = Validator::make($request->all(), [
				'pemasukan' => 'required',
				'masuk_ke' => 'required',
				'no_transaksi' => 'required',
				'tanggal_masuk' => 'required',
				'description' => 'required',
			]);

			if ($validator->fails()) {
				return redirect('admin/pemasukan')
				->withErrors($validator)
				->withInput();
			}

			$data = new Pemasukan;
			$data->saldo = $request->input('saldo');
			$data->pemasukan = $request->input('pemasukan');
			$data->tanggal_masuk = $request->input('tanggal_masuk');
			$data->no_transaksi = $request->input('no_transaksi');
			$data->masuk_ke = $request->input('masuk_ke');
			$data->description = $request->input('description');
			$data->save();

			return redirect('admin/pemasukan')->with('sukses', 'Berhasil Menambahkan Data');
		
		} catch (Exception $e) {
			return redirect('admin/pemasukan')->with('gagal', 'Gagal Menambahkan Data');
		}
	}

	public function addPengeluaran(Request $request)
	{
		try {
			
			$validator = Validator::make($request->all(), [
				'saldo' => 'required',
				'pemasukan' => 'required',
				'keluar_ke' => 'required',
				'no_transaksi' => 'required',
				'tanggal_masuk' => 'required',
				'description' => 'required',
			]);

			if ($validator->fails()) {
				return redirect('admin/pengeluaran')->with('peringatan', 'Isikan Column Dengan Benar')
				->withErrors($validator)
				->withInput();
			}

			$data = new Pengeluaran;
			$data->saldo = $request->input('saldo');
			$data->sumber_dana = $request->input('pemasukan');
			$data->tanggal_masuk = $request->input('tanggal_masuk');
			$data->no_transaksi = $request->input('no_transaksi');
			$data->keluar_ke = $request->input('keluar_ke');
			$data->description = $request->input('description');
			$data->save();

			return redirect('admin/pengeluaran')->with('sukses', 'Berhasil Menambahkan Data');
		
		} catch (Exception $e) {
			return redirect('admin/pemasukan')->with('gagal', 'Gagal Menambahkan Data');
		}
	}

	public function pengeluaran()
	{
		$no_transaksi = $this->generateNoTransaksi(8);
		$sumber = DB::table('masjid_coa')->where('id_coa', 'like', '10%')->get();
		$masuk = DB::table('masjid_coa')->where('id_coa', 'like', '40%')->get();

		return view('admin.kas.v_pengeluaran', ['no' => $no_transaksi, 'filter' => $sumber, 'masuk' => $masuk]);
	}

}
