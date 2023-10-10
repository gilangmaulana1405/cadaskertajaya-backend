<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeteranganTidakMampu;

class SKTMAdminController extends Controller
{
     public function adminSKTM()
    {
        $dataSKTM = SuratKeteranganTidakMampu::orderBy('created_at', 'desc')->get();
        return view('admin/sktm', ['dataSKTM' => $dataSKTM]);
    }
}
