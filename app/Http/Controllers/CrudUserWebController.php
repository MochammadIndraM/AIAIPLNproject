<?php

namespace App\Http\Controllers;

use App\Models\userweb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class CrudUserWebController extends Controller
{
    public function index()
    {
        $crudweb = userweb::where('role', 'Manager ULP')
        ->orWhere('role', 'Manager UP3')
        ->orWhere('role', 'Pihak Pabrik')

        ->get();
        return view('layout.masteruser_web', compact('crudweb'));
    }


    public function store(Request $request)
{
    $id = 'USRWEB' . str_shuffle(date('YmdHis'));
    $password = Hash::make($request->input('password'));

    $request->validate([
        'nama' => 'required',
        'unit_induk' => 'required',
        'up3' => 'required',
        'ulp' => 'required',
        'username' => 'required',
        'password' => 'required',
        'role' => 'required',
    ]);

    $existingUser = userweb::where('username', $request->username)->first();
    if ($existingUser) {
        Alert::error('Gagal', 'Username sudah digunakan!')->autoClose(3000)->timerProgressBar();
        return redirect('/masteruser-web');
    }

    userweb::create([
        'kode_user' => $id,
        'nama' => $request->nama,
        'unit_induk' => $request->unit_induk,
        'up3' => $request->up3,
        'ulp' => $request->ulp,
        'username' => $request->username,
        'password' => $password,
        'role' => $request->role,
    ]);

    Alert::success('Berhasil', 'Berhasil Menambah Data');
    return redirect('/masteruser-web');
}



    public function update(Request $request)
    {
        $update=userweb::find($request->kodeuser);

        $password=Hash::make($request->input('password'));

        $update->nama = $request -> nama;
        $update->username = $request -> username;
        $update->password = $password;
        $update->save();
        Alert::success('Berhasil', 'Berhasil Mengedit Data');
        return redirect('/masteruser-web');
    }

    public function destroy($id)
    {
        $crudweb = userweb::find($id);
        // dd($id);
        $crudweb->delete();

        Alert::success('Berhasil', 'Berhasil Menghapus Data');
        return redirect('/masteruser-web');
    }
}
