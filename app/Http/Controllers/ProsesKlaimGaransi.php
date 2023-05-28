<?php

namespace App\Http\Controllers;
use App\Models\surat;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ProsesKlaimGaransi extends Controller
{
    public function index()
    {
        $surat = surat::all();
        // dd($surat);
        return view('layout.proses_klaimgaransi', compact('surat'));
    }
    public function packingproses(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->proses_packing = 'Diproses';

        $update->save();
        Alert::success('Berhasil', 'Packing Diproses');
        return redirect('/proses-klaim-garansi');
    }
    public function packingselesai(Request $request)
    {
        $update = surat::find($request->no_berita_acara);
        $update->proses_packing = 'Selesai';

        $update->save();
        Alert::success('Berhasil', 'Packing Diproses');
        return redirect('/proses-klaim-garansi');
    }
    public function kirimproses(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->proses_kirim = 'Diproses';

        $update->save();
        Alert::success('Berhasil', 'Sedang Diproses');
        return redirect('/proses-klaim-garansi');
    }
    public function kirimdikirim(Request $request)
    {
        $update = surat::find($request->no_berita_acara);

        $update->proses_kirim = 'Dikirim';

        $update->save();
        Alert::success('Berhasil', 'Berhasil Dikirim');
        return redirect('/proses-klaim-garansi');
    }
}
