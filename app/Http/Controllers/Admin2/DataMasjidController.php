<?php

namespace App\Http\Controllers\Admin2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class DataMasjidController extends Controller
{
    public function searchData($status = false)
    {
        
    }

    public function index()
    {
        $provinsi = DB::table('masjid_provinsi')->get();
        $masjid = DB::table('data_masjid')->get();
        // $detail = DB::table('data_masjid')->first();
        // echo json_encode($masjid); die();
        return view('admin/settings_masjid/v_data', 
            [
                'provinsi' => $provinsi,
                'key' => $masjid
            ]
        );
    }

    public function kota($id_kota, Request $request)
    {
        $provinsi = DB::table('masjid_kota')->select(['*'])->where('masjid_kota.id_prov', $id_kota)->get();
        
        return response()->json([
            'status' =>  200,
            'data' => $provinsi
        ]);
    }

    public function addProcess(Request $request)
    {
    	$this->validate($request, [
    		'alamat_lengkap' => 'required'
    	]);

    	try {
    		$update = array(
                'nama' => $request->input('nama'), 
                'no_telp' => $request->input('no_telp'), 
                'website' => $request->input('website'), 
                'kategori_masjid' => $request->input('kategori_masjid'), 
                'alamat_lengkap' => $request->input('alamat_lengkap'), 
                'lat_lng' => $request->input('lat_lng'), 
                'jumlah_remaja' => $request->input('jumlah_remaja'), 
                'organisasi' => $request->input('organisasi'), 
                'status_tanah' => $request->input('status_tanah'), 
                'luas_tanah' => $request->input('luas_tanah'), 
            );
            DB::table('data_masjid')->insert($update);
            Session::flash('sukses', 'Penambahan Data Sukses');
            return redirect('admin/setting-masjid');

    	} catch (Exception $e) {
            Session::flash('gagal', 'Gagal Menambahkan Data Sukses');
            return redirect('admin/setting-masjid'); die();
    		echo $e;
    	}
    }

    public function updateData(Request $request)
    {
        
        $this->validate($request, [
            'alamat_lengkap' => 'required'
        ]);

        try {
            $update_data = array(
                'nama' => $request->input('nama'), 
                'no_telp' => $request->input('no_telp'), 
                'website' => $request->input('website'), 
                'kategori_masjid' => $request->input('kategori_masjid'), 
                'alamat_lengkap' => $request->input('alamat_lengkap'), 
                'lat_lng' => $request->input('lat_lng'), 
                'jumlah_remaja' => $request->input('jumlah_remaja'), 
                'organisasi' => $request->input('organisasi'), 
                'status_tanah' => $request->input('status_tanah'), 
                'luas_tanah' => $request->input('luas_tanah'), 
            );
            if ($update) {
                DB::table('data_masjid')->where('id', $request->input('id'))->delete(); die();
            }
            DB::table('data_masjid')->where('id', $request->input('id'))->update($update_data);
            Session::flash('sukses', 'Update Data Sukses');
            return redirect('admin/setting-masjid');

        } catch (Exception $e) {
            Session::flash('gagal', 'Gagal Menambahkan Data Sukses');
            return redirect('admin/setting-masjid'); die();
            echo $e;
        }
    }
}
