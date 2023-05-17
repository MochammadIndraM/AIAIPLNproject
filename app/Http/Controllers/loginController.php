<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
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

      return redirect()->intended('/dashboard');
    } else {
      dd('blok');
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
    // dd('test');
  }
}
