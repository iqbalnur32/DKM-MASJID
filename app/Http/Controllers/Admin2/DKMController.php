<?php

namespace App\Http\Controllers\Admin2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class DKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jabatan = DB::table('masjid_jabatan')->get();
        $dkm = DB::table('masjid_dkm')->select(['*', 'masjid_dkm.name as nama', 'masjid_jabatan.name as jabatan'])
                   ->join('masjid_jabatan', 'masjid_dkm.id_jabatan', '=', 'masjid_jabatan.id_jabatan')
                   ->get();

        return view('admin.dkm.v_dkm', ['jabatan' => $jabatan, 'dkm' => $dkm]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
           $this->validate($request, [
            'name' => 'required'
           ]);

           /*$data = [];

           foreach ($_POST as $key => $value) {
                $data += [$key => $_POST[$key]];    
           }*/

           $data = array(
                'name' => $request->input('name'), 
                'description' => $request->input('description'), 
                'alamat' => $request->input('alamat'), 
                'id_jabatan' => $request->input('id_jabatan'), 
            );

           DB::table('masjid_dkm')->insert($data);
           Session::flash('sukses', 'Penambahan Data Sukses');
           return redirect('admin/dkm');

       } catch (Exception $e) {
           Session::flash('gagal', 'Penambahan Data Gagal');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = DB::table('masjid_jabatan')->get();
        $edit = DB::table('masjid_dkm')->select(['*', 'masjid_dkm.name as nama', 'masjid_jabatan.name as jabatan'])
                   ->join('masjid_jabatan', 'masjid_dkm.id_jabatan', '=', 'masjid_jabatan.id_jabatan')
                   ->where('id_dkm', $id)
                   ->first();

        // echo json_encode($edit); die();
        return view('admin.dkm.v_dkm_edit', compact('edit', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required'
            ]);

            $edit = array(
               'name' => $request->input('name'), 
               'description' => $request->input('description'), 
               'alamat' => $request->input('alamat'), 
               'id_jabatan' => $request->input('id_jabatan'),  
            );

            DB::table('masjid_dkm')->where('id_dkm', $request->input('id_dkm'))->update($edit);
            return redirect('admin/dkm');

        } catch (Exception $e) {
            echo $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('masjid_dkm')->where('id_dkm', $id)->delete();

        return redirect('admin/dkm');
    }
}
