<?php

namespace App\Http\Controllers;

use App\Models\SKDDomisili;
use Illuminate\Http\Request;

class SKDDomisiliAdminController extends Controller
{
    public function adminSKDDomisili()
    {
        $dataSKDDomisili = SKDDomisili::all();
        return view('admin/skdDomisili', ['dataSKDDomisili' => $dataSKDDomisili]);
    }
}
