<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        
        $dateNowID = Carbon::now()->locale('id_ID');
        $date = $dateNowID->isoFormat('D MMMM YYYY');
        
        $dateSKUToday = Carbon::now()->toDateString();
        $countSKUToday = SuratKeteranganUsaha::whereDate('created_at', $dateSKUToday)->count();
        
        $dateSKMToday = Carbon::now()->toDateString();
        $countSKMToday = SuratKeteranganMeninggal::whereDate('created_at', $dateSKMToday)->count();
        
        $dateSKDDomisiliToday = Carbon::now()->toDateString();
        $countSKDDomisiliToday = SKDDomisili::whereDate('created_at', $dateSKDDomisiliToday)->count();
        
        $dateSKDBelumMenikahToday = Carbon::now()->toDateString();
        $countSKDBelumMenikahToday = SKDBelumMenikah::whereDate('created_at', $dateSKDBelumMenikahToday)->count();
        
        $countSKU = SuratKeteranganUsaha::count();
        $countSKM = SuratKeteranganMeninggal::count();
        $countSKTM = SuratKeteranganTidakMampu::count();
        $countSKDDomisili = SKDDomisili::count();
        $countSKDBelumMenikah = SKDBelumMenikah::count();
        return view('admin/index', ['countSKU' => $countSKU, 'countSKM'=>$countSKM, 'countSKTM'=>$countSKTM, 'countSKDDomisili'=>$countSKDDomisili,'countSKDBelumMenikah'=>$countSKDBelumMenikah, 'date' => $date, 'countSKUToday'=> $countSKUToday,'countSKMToday'=> $countSKMToday, 'countSKDDomisiliToday'=> $countSKDDomisiliToday, 'countSKDBelumMenikahToday'=> $countSKDBelumMenikahToday]);
    }
}
