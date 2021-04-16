<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanController extends Controller
{
    public function halamanlogin()
    {
        return view('login');
    }

    public function proseslogin(Request $res)
    {
        if (Auth::attempt($res->only(['email', 'password']))) {
            return redirect('dashboard');
        } else {
            return redirect('/')->with('error', 'Email atau Password Salah!');
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('error' , 'Anda berhasil keluar');
    }
}