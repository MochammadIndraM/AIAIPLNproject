<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
  public function index()
  {
    return view('layout.login');
    // dd(Hash::make('123'));
  }

  public function cek_login(Request $request)
  {
    // dd($request);
    $dataLogin = $request->validate([
      'username' => 'required',
      'password' => 'required'
    ]);

    if (Auth::attempt($dataLogin)) {
        if (Auth::user()->role === 'admin') {
            $request->session()->regenerate();

        }
        // dd('berhasil');
        Alert::success('Berhasil', 'Berhasil Login');
      return redirect()->intended('/dashboard');
    } else {
        Alert::error('Login Gagal', 'Username atau password salah.')->persistent(true)->autoClose(3000);
        return redirect()->back();
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();

    Alert::success('Berhasil', 'Berhasil Menambah Data');
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    // dd('test');
  }
}
