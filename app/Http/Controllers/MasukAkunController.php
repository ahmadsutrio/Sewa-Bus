<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukAkunController extends Controller
{
    public function masuk(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','kataSandi'))){
           
            return redirect('/')->with('succes');
        }else{

            return redirect('ubah')->with('succes');
        }
    }
}
