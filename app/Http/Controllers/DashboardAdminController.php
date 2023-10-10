<?php

namespace App\Http\Controllers;

use App\Models\SKDBelumMenikah;
use App\Models\SKDDomisili;
use App\Models\SuratKeteranganMeninggal;
use App\Models\SuratKeteranganTidakMampu;
use App\Models\SuratKeteranganUsaha;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $countSKU = SuratKeteranganUsaha::count();
        $countSKM = SuratKeteranganMeninggal::count();
        $countSKTM = SuratKeteranganTidakMampu::count();
        $countSKDDomisili = SKDDomisili::count();
        $countSKDBelumMenikah = SKDBelumMenikah::count();
        return view('admin/index', ['countSKU' => $countSKU, 'countSKM'=>$countSKM, 'countSKTM'=>$countSKTM, 'countSKDDomisili'=>$countSKDDomisili,'countSKDBelumMenikah'=>$countSKDBelumMenikah]);
    }
}
