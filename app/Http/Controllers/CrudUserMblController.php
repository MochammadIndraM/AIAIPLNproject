<?php

namespace App\Http\Controllers;

use App\Models\usermbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class CrudUserMblController extends Controller
{
    public function index()
    {
        $crudmbl = usermbl::where('role', 'user')->get();

        // dd($crudmbl);
        // dd($crudweb);
        return view('layout.masteruser_mbl', compact('crudmbl'));
    }


    public function store(Request $request)
    {
        $id = 'USRMBL' . str_shuffle(date('YmdHis'));
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

        $existingUser = usermbl::where('username', $request->username)->first();
        if ($existingUser) {
            Alert::error('Gagal', 'Username sudah digunakan!')->autoClose(3000)->timerProgressBar();
            return redirect('/masteruser-mbl');
        }

        usermbl::create([
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
        return redirect('/masteruser-mbl');
    }


    public function update(Request $request)
    {
        $update=usermbl::find($request->kodeuser);

        $password=Hash::make($request->input('password'));

        $update->nama = $request -> nama;
        $update->username = $request -> username;
        $update->password = $password;
        $update->save();
        Alert::success('Berhasil', 'Berhasil Mengedit Data');
        return redirect('/masteruser-mbl');
    }

    public function destroy($id)
    {
        $crudmbl = usermbl::find($id);
        // dd($id);
        $crudmbl->delete();

        Alert::success('Berhasil', 'Berhasil Menghapus Data');
        return redirect('/masteruser-mbl');
    }
}
