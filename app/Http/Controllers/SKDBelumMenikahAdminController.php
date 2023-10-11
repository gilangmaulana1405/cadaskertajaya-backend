<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SKDBelumMenikah;

class SKDBelumMenikahAdminController extends Controller
{
     public function adminSKDBelumMenikah()
    {
        $dataSKDBelumMenikah = SKDBelumMenikah::orderBy('created_at', 'desc')->get();
        return view('admin/skdBelumMenikah', ['dataSKDBelumMenikah' => $dataSKDBelumMenikah]);
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
