<?php

namespace App\Http\Controllers;

use App\Models\SKDDomisili;
use Illuminate\Http\Request;

class SKDDomisiliAdminController extends Controller
{
    public function adminSKDDomisili()
    {
        $dataSKDDomisili = SKDDomisili::orderBy('created_at', 'desc')->get();
        return view('admin/skdDomisili', ['dataSKDDomisili' => $dataSKDDomisili]);
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
