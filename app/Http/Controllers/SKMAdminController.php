<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeteranganMeninggal;

class SKMAdminController extends Controller
{

    public function adminSKM()
    {
        $dataSKM = SuratKeteranganMeninggal::orderBy('created_at', 'desc')->get();
        return view('admin/skm', ['dataSKM' => $dataSKM]);
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

     public function deleteSKM($id)
    {
        $data = SuratKeteranganMeninggal::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
