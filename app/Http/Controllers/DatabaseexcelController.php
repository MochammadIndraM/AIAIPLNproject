<?php

namespace App\Http\Controllers;

use App\Models\databaseexcel;
use App\Models\surat;
use App\Models\surat_detail;

use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;
// use App\Http\Controllers\DatabaseexcelController;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;



class DatabaseexcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function uploadexcel(Request $request)
{

    try {
        surat::create([
            'no_berita_acara' => $request->beritaacara,
            'tanggal' => carbon::now(),
            'unit_induk' => $request->unitinduk,
            'up3' => $request->up3,
            'ulp' => $request->ulp,
            'nama_pengirim' => $request->namapengirim,
            'catatan' => $request->catatan,
        ]);

        Excel::import(new DatabaseImport($request->beritaacara, $request->tanggal, $request->unitinduk, $request->up3, $request->ulp, $request->namapengirim, $request->catatan), request()->file('filepond'));

        Alert::success('Berhasil', 'Berhasil Menambah Data');
        return redirect('/pengiriman-surat');
    } catch (\Exception $e) {
        Alert::error('Gagal', 'Gagal Mengunggah File');
        return redirect('/pengiriman-surat');
    }
}


    public function penerimaansurat(Request $request){
        $surat = surat::all();
        return view('layout.penerimaan_surat', compact('surat'));


    }
    public function detail_surat(Request $request){

        $surat_detail = surat_detail::find($request->no_berita_acara);
        // $surat_detail = surat_detail::all();

        return view('layout.penerimaan_surat', compact('surat_detail'));


    }
}
