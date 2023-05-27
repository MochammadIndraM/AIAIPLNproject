<?php

namespace App\Http\Controllers;

use App\Models\masterdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class CrudMasterDataController extends Controller
{
    public function index()
    {
        $crudmasterdata = masterdata::all();
        return view('layout.masterdata', compact('crudmasterdata'));
    }


    public function store(Request $request)
{
    $id = $request->no_meter;
    // dd($request);
    $request->validate([
        'no_meter' => 'required',
        'kriteria_garansi' => 'required',
        'gangguan' => 'required',
        'tahun_buat' => 'required',
        'tahun_ganti' => 'required',

    ]);

    masterdata::create([
        'no_meter' => $request->no_meter,
        'kriteria_garansi' => $request->kriteria_garansi,
        'gangguan' => $request->gangguan,
        'tahun_buat' => $request->tahun_buat,
        'tahun_ganti' => $request->tahun_ganti,
        'tanggal_pendataan' => carbon::now(),
    ]);

    Alert::success('Berhasil', 'Berhasil Menambahkan Data');
    return redirect('/masterdata');
}



    public function update(Request $request)
    {
        $update=masterdata::find($request->no_meter);

        $update->no_meter = $request -> no_meter;
        $update->kriteria_garansi = $request -> kriteria_garansi;
        $update->gangguan = $request -> gangguan;
        $update->tahun_buat = $request -> tahun_buat;
        $update->tahun_ganti = $request -> tahun_ganti;
        $update->save();
        Alert::success('Berhasil', 'Berhasil Mengedit Data');
        return redirect('/masterdata');
    }

    public function destroy($id)
    {
        $crudmasterdata = masterdata::find($id);
        $crudmasterdata->delete();

        Alert::success('Berhasil', 'Berhasil Menghapus Data');
        return redirect('/masterdata');
    }
}
