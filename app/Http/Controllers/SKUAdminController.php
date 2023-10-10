<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeteranganUsaha;

class SKUAdminController extends Controller
{
     public function adminSKU()
    {
        $dataSKU = SuratKeteranganUsaha::all();
        return view('admin/sku', ['dataSKU' => $dataSKU]);
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
}
