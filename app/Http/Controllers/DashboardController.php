<?php

namespace App\Http\Controllers;

use App\Models\surat_detail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datachart = $this->chartkriteriagaransi();;
        return view('layout.dashboard', compact('datachart'));
    }

    public function chartkriteriagaransi()
    {
        $garansi = surat_detail::where('kriteria_garansi', 'Garansi')->count();
        $tidakGaransi = surat_detail::where('kriteria_garansi', 'Tidak Garansi')->count();

        $result = [$garansi, $tidakGaransi];
        return json_encode($result);
    }
}
