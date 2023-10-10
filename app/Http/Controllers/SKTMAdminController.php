<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeteranganTidakMampu;

class SKTMAdminController extends Controller
{
     public function adminSKTM()
    {
        $dataSKTM = SuratKeteranganTidakMampu::all();
        return view('admin/sktm', ['dataSKTM' => $dataSKTM]);
    }
}
