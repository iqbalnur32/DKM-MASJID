<?php

namespace App\Http\Controllers\Admin2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Fasilitas;
use DB;
use Session;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = DB::table('masjid_fasilitas')->get();
        return view('admin.fasilitas.v_fasilitas', ['fasilitas' => $fasilitas]);
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
            
            $fasilitas = array(
                'fasilitas' => $request->input('fasilitas'), 
                'jumlah' => $request->input('jumlah'), 
                'description' => $request->input('description'), 
            );

            DB::table('masjid_fasilitas')->insert($fasilitas);
            return redirect('admin/fasilitas')->with('sukses', 'Berhasil Menambahkan Data');
        } catch (Exception $e) {
            echo $e;
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
        $edit = DB::table('masjid_fasilitas')->select('*')->where('id_fasilitas', $id)->first();

        return view('admin.fasilitas.v_fasilitas_edit', ['edit' => $edit]);
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
                'fasilitas' => 'required'
            ]);

            $edit = array(
             'fasilitas' => $request->input('fasilitas'), 
             'jumlah' => $request->input('jumlah'), 
             'description' => $request->input('description'), 
             'id_fasilitas' => $request->input('id_fasilitas'),  
         );

            DB::table('masjid_fasilitas')->where('id_fasilitas', $request->input('id_fasilitas'))->update($edit);
            return redirect('admin/fasilitas')->with('sukses', 'Berhasil');

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
        DB::table('masjid_fasilitas')->where('id_fasilitas', $id)->delete();

        return redirect('admin/fasilitas');
    }
}
