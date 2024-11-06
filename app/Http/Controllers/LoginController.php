<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showlogin()
    {
        if(Auth::check()) {
            return redirect()->back()->with('error', 'Anda Sudah Login');
        } else {
            return view('login');
        }
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/')->with('success','Login Berhasil');
        } else {
            return redirect()->back()->with('error','Username Atau Password Salah');
        }
    }

    public function postlogout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout Berhasil');
    }
}
