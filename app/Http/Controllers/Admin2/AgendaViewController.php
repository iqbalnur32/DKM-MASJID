<?php

namespace App\Http\Controllers\Admin2;
use App\Http\Controllers\Controller;
use DB;

class AgendaViewController extends Controller
{
    public function index()
    {
    	$get_data = DB::table('masjid_agenda')->get();

    	// echo json_encode($get_data); die();

        return view('admin/agenda/v_agenda_view',['agenda' => $get_data]);
    }

    public function fotoGallery($name)
	{
		$avatar_path = storage_path('image') . '/' . $name;
		
		if (file_exists($avatar_path)) {
			$file = file_get_contents($avatar_path);
			return response($file, 200)->header('Content-Type', 'image/jpeg');
		}

		return "Tidak Di Temukan"; 
	}

}
