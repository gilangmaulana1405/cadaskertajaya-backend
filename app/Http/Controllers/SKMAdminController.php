<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeteranganMeninggal;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function editSKM($id)
    {
        $data = SuratKeteranganMeninggal::find($id);
        return view('admin/editSKM', ['data' => $data]);
    }

    public function updateSKM(Request $request, $id)
    {
        $data = SuratKeteranganMeninggal::find($id)->update($request->all());
        Alert::success('Success', 'Data berhasil diubah');
        return redirect()->route('admin.skm');
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
