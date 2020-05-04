<?php

namespace App\Http\Controllers\Admin2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    
    public function __construct()
    {
        # code...
    }

    public function managementDonatur()
    {
        return view('admin.donatur.v_management_donatur');
    }

    public function donatur()
    {
        return view('admin.donatur.v_donatur');
    }
}
