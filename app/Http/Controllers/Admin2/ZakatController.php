<?php

namespace App\Http\Controllers\Admin2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class ZakatController extends Controller
{
    
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('admin.zakat.v_zakat_infaq');
    }

    public function sadaqah()
    {
        return view('admin.zakat.v_sadaqah');
    }
}
