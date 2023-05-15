<?php

namespace App\Http\Controllers;

use App\Models\databaseexcel;
use App\Imports\DatabaseImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\DatabaseexcelController;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class DatabaseexcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function uploadexcel(Request $request){

        Excel::import(new DatabaseImport($request->beritaacara, $request->tanggal, $request->unitinduk,  $request->up3,  $request->ul3, $request->namapengirim, $request->catatan), request()->file('filepond'));
        Alert::success('Berhasil', 'Berhasil Menambah Data');
        return redirect('/pengiriman-surat');

    }
}
