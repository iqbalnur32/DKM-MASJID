<?php

namespace App\Http\Controllers\Admin2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Jamaah;
use App\Models\Users;

class JamaahController extends Controller
{

    private $request;
        
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function dataJamaah()
    {
        $jamaah = DB::table('masjid_users')->select(['*'])
                  ->join('masjid_jamaah', 'masjid_users.id_users', '=', 'masjid_jamaah.id_jamaah')
                  ->join('masjid_level', 'masjid_users.id_level', '=', 'masjid_level.id_level')
                  ->where('masjid_users.id_level', 3)
                  ->get();

        // echo json_encode($jamaah); die();
        return view('admin.jamaah.v_jamaah', ['jamaah' => $jamaah]);
    }

    /*
      Tabungan Jamaah
    */    
    public function tabunganJamaah()
    {
      return view('admin.jamaah.v_tabungan_jamaah');
    }


    // Edit Jamaah
    public function editJamaah(Request $request, $id_users)
    {
        $edit = DB::table('masjid_users')->select(['*'])
                  ->join('masjid_jamaah', 'masjid_users.id_users', '=', 'masjid_jamaah.id_jamaah')
                  ->join('masjid_level', 'masjid_users.id_level', '=', 'masjid_level.id_level')
                  ->where('masjid_users.id_level', 3)
                  ->first();

        // echo json_encode($edit); die();
        return view('admin.jamaah.v_jamaah_edit', ['edit' => $edit]);           
    }

    public function editJamaahProcess(Request $request)
    {
      $this->validate($request, [
        'id_users' => 'required',
      ]);

      try {
        
        /*Jika Password Di Input*/
        if ($request->input('password')) {
            
            // Users Masjid
            $insert = Users::find($request->input('id_users'));
            $insert->email = $request->input('email');
            $insert->username = $request->input('username');
            $insert->password = $request->input('password');
            $insert->alamat = $request->input('alamat');
            $insert->id_level = 3;
            $save = $insert->update(); 
            die();

            if($save){
              $id_user = Users::select('id_users')->where('email', $request->input('email'))->first();

                // Users Jmaah
              $insert2 = Jamaah::find($request->input('id_users'));
              $insert2->id_jamaah = $id_user->id_users;
              $insert2->nama = $request->input('nama');
              $insert2->jenis_kelamin = $request->input('jenis_kelamin');
              $insert2->status_jamaah = $request->input('status_jamaah');
              $insert2->tgl_lahir = $request->input('tgl_lahir');
              $insert2->tempat_lahir = $request->input('tempat_lahir');
              $save2 = $insert2->update();

              echo "berhasil 1"; 
                // return redirect('login/jamaah');
            }else{
              echo "gagal 1 ";
            }
        
        }else{
            
            // Users Masjid
            $insert = Users::find($request->input('id_users'));
            $insert->email = $request->input('email');
            $insert->username = $request->input('username');
            $insert->alamat = $request->input('alamat');
            $insert->id_level = 3;
            $save = $insert->update();

            if($save){
              $id_user = Users::select('id_users')->where('email', $request->input('email'))->first();

                // Users Jmaah
              $insert2 = Jamaah::find($request->input('id_users'));
              $insert2->id_jamaah = $id_user->id_users;
              $insert2->nama = $request->input('nama');
              $insert2->jenis_kelamin = $request->input('jenis_kelamin');
              $insert2->status_jamaah = $request->input('status_jamaah');
              $insert2->tgl_lahir = $request->input('tgl_lahir');
              $insert2->tempat_lahir = $request->input('tempat_lahir');
              $save2 = $insert2->update();

              echo "berhasil"; 
                // return redirect('login/jamaah');
            }else{
              echo "gagal";
            }
        }

      } catch (Exception $e) {
        echo $e;
      }
    }

    // Absensi
    public function absensi()
    {
       return view('admin.jamaah.v_absensi');
    }

}
