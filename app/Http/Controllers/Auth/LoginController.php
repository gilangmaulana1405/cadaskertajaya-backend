<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('admin/dashboard');
        }

        return redirect('admin/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }

//     public function login(Request $request)
// {
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         // Pengguna berhasil login
//         return redirect()->intended('admin.dashboard'); // Ganti '/home' dengan rute yang sesuai
//     }

//     // Jika login gagal, arahkan kembali ke halaman login
//     return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
// }
}
