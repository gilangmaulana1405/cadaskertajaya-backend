<?php

namespace App\Http\Controllers;

use App\Models\SKDDomisili;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SKDDomisiliAdminController extends Controller
{
    public function adminSKDDomisili()
    {
        $dataSKDDomisili = SKDDomisili::orderBy('created_at', 'desc')->get();
        return view('admin/skdDomisili', ['dataSKDDomisili' => $dataSKDDomisili]);
    }

     public function editSKDDomisili($id)
    {
        $data = SKDDomisili::find($id);
        return view('admin/editSKDDomisili', ['data' => $data]);
    }

    public function updateSKDDomisili(Request $request, $id)
    {
        $data = SKDDomisili::find($id)->update($request->all());
        Alert::success('Success', 'Data berhasil diubah');
        return redirect()->route('admin.skdDomisili');
    }

    public function deleteSKDDomisili($id){
         $data = SKDDomisili::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
