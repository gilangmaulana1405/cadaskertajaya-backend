<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SKDBelumMenikah;
use RealRashid\SweetAlert\Facades\Alert;

class SKDBelumMenikahAdminController extends Controller
{
     public function adminSKDBelumMenikah()
    {
        $dataSKDBelumMenikah = SKDBelumMenikah::orderBy('created_at', 'desc')->get();
        return view('admin/skdBelumMenikah', ['dataSKDBelumMenikah' => $dataSKDBelumMenikah]);
    }

    public function editSKDBelumMenikah($id)
    {
        $data = SKDBelumMenikah::find($id);
        return view('admin/editSKDBelumMenikah', ['data' => $data]);
    }

    public function updateSKDBelumMenikah(Request $request, $id)
    {
        $data = SKDBelumMenikah::find($id)->update($request->all());
        Alert::success('Success', 'Data berhasil diubah');
        return redirect()->route('admin.skdBelumMenikah');
    }

      public function deleteSKDBelumMenikah($id)
    {
        $data = SKDBelumMenikah::find($id);
        if ($data) {
            $data->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }
}
