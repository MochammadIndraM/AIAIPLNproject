<?php

namespace App\Http\Controllers;

use App\Exports\DatabaseExport;
use App\Exports\TesExport;
use App\Models\cetakexcel;
use App\Models\masterdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class Cetakexceldb extends Controller
{
    public function index()
    {
        $crudmasterdata = masterdata::all();
        return view('layout.lap_data', compact('crudmasterdata'));
    }
    public function export()
    {
    return Excel::download(new DatabaseExport(), 'laporan_data.xlsx');
    }

}
