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
    public function adminSKU()
    {
        $dataSKU = SuratKeteranganUsaha::all();
        return view('admin/sku', ['dataSKU' => $dataSKU]);
    }
    public function adminSKM()
    {
        $dataSKM = SuratKeteranganMeninggal::all();
        return view('admin/skm', ['dataSKM' => $dataSKM]);
    }
    public function adminSKTM()
    {
        $dataSKTM = SuratKeteranganTidakMampu::all();
        return view('admin/sktm', ['dataSKTM' => $dataSKTM]);
    }
    public function adminSKDDomisili()
    {
        $dataSKDDomisili = SKDDomisili::all();
        return view('admin/skdDomisili', ['dataSKDDomisili' => $dataSKDDomisili]);
    }
    public function adminSKDBelumMenikah()
    {
        $dataSKDBelumMenikah = SKDBelumMenikah::all();
        return view('admin/skdBelumMenikah', ['dataSKDBelumMenikah' => $dataSKDBelumMenikah]);
    }

    public function detailSKU($id)
    {
        $data = SuratKeteranganUsaha::find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return view('admin.error404'); // Tampilkan halaman 404 jika data tidak ditemukan
        }

        return view('admin/detailSKU', ['data' => $data]);
    }

    public function detailSKM($id)
    {
        $data = SuratKeteranganMeninggal::find($id);

        // Periksa apakah data ditemukan
        if (!$data) {
            return view('admin.error404'); // Tampilkan halaman 404 jika data tidak ditemukan
        }

        return view('admin/detailSKM', ['data' => $data]);
    }
}
