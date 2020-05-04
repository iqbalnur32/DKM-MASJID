<?php

namespace App\Http\Controllers\Admin2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class CoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = DB::table('masjid_coa')->get();

        // echo json_encode($filter); die();
        return view('admin.coa.v_coa', ['data' => $jenis]);
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
        $this->validate($request, [
            'id_coa' => 'required'
        ]);

        $data = array(
            'id_coa' => $request->input('id_coa'), 
            'type' => $request->input('type'), 
            'tanggal_masuk' => $request->input('tanggal_masuk'), 
            'jenis' => $request->input('jenis'), 
            'description' => $request->input('description'), 
            'saldo' => $request->input('saldo'), 
        );

        DB::table('masjid_coa')->insert($data);
        Session::flash('sukses', 'Penambahan Data Sukses');
        return redirect('admin/coa');
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
        $jenis = DB::table('masjid_coa')->get();
        $edit = DB::table('masjid_coa')->select('*')->where('id_coa', $id)->first();
        return view('admin.coa.v_coa_edit', ['key' => $edit, 'data' => $jenis]);
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
        $this->validate($request, [
            'id_coa' => 'required'
        ]);

        $data = array(
            'id_coa' => $request->input('id_coa'), 
            'type' => $request->input('type'), 
            'tanggal_masuk' => $request->input('tanggal_masuk'), 
            'jenis' => $request->input('jenis'), 
            'description' => $request->input('description'), 
            'saldo' => $request->input('saldo'), 
        );

        DB::table('masjid_coa')->where('id_coa', $request->input('id_coa'))->update($data);
        Session::flash('sukses', 'Penambahan Data Sukses');
        return redirect('admin/coa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('masjid_coa')->where('id_coa', $id)->delete();

        return redirect('admin/coa')->with('sukses', 'Berhasil Delete');
    }
}
