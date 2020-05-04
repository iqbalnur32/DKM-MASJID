<?php 
namespace App\Http\Controllers\Admin2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use \Carbon\Carbon;
use Session;

class ReportingController extends Controller
{
	private $row = array();

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function reportKeuangan(Request $req)
	{	
		$previous_week = strtotime("-1 month +1 month");

		$start_week = strtotime("last sunday midnight",$previous_week);
		$end_week = strtotime("next saturday",$start_week);

		$start = date('Y-m-d', $start_week);
		$end = date("Y-m-d", $end_week);

		$select = ['masjid_pemasukan.no_transaksi', 'masjid_pemasukan.saldo as amount', 'masjid_pemasukan.description'];

		// Pemasukan
		$report = DB::table('masjid_pemasukan')->select($select)
					// ->join('masjid_coa', 'masjid_pemasukan.pemasukan', '=', 'masjid_coa.id_coa')
					->whereBetween('masjid_pemasukan.tanggal_masuk', [$start, $end ])
					->get();

		$select = ['masjid_pengeluaran.no_transaksi', 'masjid_pengeluaran.saldo as amount', 'masjid_pengeluaran.description'];
		
		// Pengeluaran
		$pengeluaran = DB::table('masjid_pengeluaran')->select($select)
					// ->join('masjid_coa', 'masjid_pengeluaran.keluar_ke', '=', 'masjid_coa.id_coa')
					->whereBetween('masjid_pengeluaran.tanggal_masuk', [$start, $end ])
					->get();
		
		/*
			Neraca Seluruh aktiva
		*/ 
		$total_aktivasi_lancar = 0;			
		$total_aktiva_wajib = 0;			
		
		$data = DB::raw("SUM(saldo) as total");
		$total_aktiva_seleruh = DB::table('masjid_coa')
				->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])
				->sum('masjid_coa.saldo');

		$neraca = DB::table('masjid_coa')->select(['*', 'masjid_coa.description', 'masjid_coa.type', 'masjid_coa.saldo'])
				->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])
				->get();

		$total_aktivasi_lancar = DB::table('masjid_coa')->where('id_coa', 'like', '10%')->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])->sum('masjid_coa.saldo');		
		$aktiva_lancar = DB::table('masjid_coa')->select(['*', 'masjid_coa.description', 'masjid_coa.type', 'masjid_coa.saldo'])
						->where('id_coa', 'like', '10%')
						->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])
						->get();
		
		$total_aktiva_wajib = DB::table('masjid_coa')->where('id_coa', 'like', '30%')->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])->sum('masjid_coa.saldo');
		$aktiva_wajib = DB::table('masjid_coa')->select(['*', 'masjid_coa.description', 'masjid_coa.type', 'masjid_coa.saldo'])
						->where('id_coa', 'like', '30%')
						->whereBetween('masjid_coa.tanggal_masuk', [$start, $end])
						->get();

		$aktiva_semua = $total_aktivasi_lancar + $total_aktiva_wajib;


		// return response()->json([
		// 	'tanggal_awal' => $start,
		// 	'tanggal_akhir' => $end,
		// 	'data' => $aktiva_semua
		// ]); die();

		return view('admin.report.v_report', 
			[
			'report' => $report, 
			'pengeluaran' => $pengeluaran, 
			'neraca' => $neraca, 
			'saldo' => $total_aktiva_seleruh,
			'aktiva_lancar' => $aktiva_lancar,
			'aktiva_wajib' => $aktiva_wajib,
			'saldo_lancar' => $total_aktivasi_lancar,
			'saldo_wajib' => $total_aktiva_wajib,
			'saldo_aktiva_wajib_lancar' => $aktiva_semua
			]
		);
	}

	public function generalReport(Request $request)
	{
		$select = ['masjid_pemasukan.description', 'masjid_pemasukan.saldo as saldo_masuk', 'masjid_pengeluaran.saldo as saldo_keluar', 'masjid_pemasukan.no_transaksi', 'masjid_pemasukan.tanggal_masuk', 'masjid_pemasukan.description'];

		$data = DB::table('masjid_coa')->select(['id_coa', 'type', 'description as coa_description'])->get();		
		// $data1 = DB::table('masjid_pemasukan')->select(['saldo as saldo_masuk', 'no_transaksi', 'masuk_ke', 'tanggal_masuk', 'description as masuk_description'])->get();		
		// $data2 = DB::table('masjid_pengeluaran')->select(['saldo as saldo_keluar', 'no_transaksi', 'sumber_dana', 'tanggal_masuk', 'description as keluar_description'])->get();
		$data1 = DB::table('masjid_pemasukan')->select($select)
				->join('masjid_pengeluaran', 'masjid_pemasukan.id_pemasukan', '=', 'masjid_pengeluaran.id_pengeluaran')
				// ->join('masjid_coa', 'masjid_pemasukan.pemasukan', '=' ,'masjid_coa.id_coa')
				->get();		
		
		return response()->json([
			// 'tanggal_awal' => $start,
			// 'tanggal_akhir' => $end,
			'data' => $data1,
			'coa' => $data
		]); die();

		return view('admin.report.general_report', 
			[
			]
		);
	}
}
?>