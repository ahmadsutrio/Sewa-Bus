<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AkunController extends Controller
{
    public function tampil()
    {
        
        return view('HalamanMasuk/HalamanMasuk',[
             "title" => "Daftar-Bus"
        ]);
    }
    public function masuk(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if (auth()->user()->roleAkun === 'Adminstrator') {
                // jika user superadmin
                return redirect()->intended('/Admin/HalamanBeranda/HalamanBeranda');
            } else {
                // jika user pengguna
                return redirect()->intended('/');
            }
        }
        return back();
    }
    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
