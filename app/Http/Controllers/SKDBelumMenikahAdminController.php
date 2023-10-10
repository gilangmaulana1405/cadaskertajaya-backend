<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SKDBelumMenikah;

class SKDBelumMenikahAdminController extends Controller
{
     public function adminSKDBelumMenikah()
    {
        $dataSKDBelumMenikah = SKDBelumMenikah::all();
        return view('admin/skdBelumMenikah', ['dataSKDBelumMenikah' => $dataSKDBelumMenikah]);
    }
}
