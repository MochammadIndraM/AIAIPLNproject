<?php

namespace App\Exports;

use App\Models\masterdata;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use RealRashid\SweetAlert\Facades\Alert;


class DatabaseExport implements FromCollection, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return new Collection([
            ["NOMER METER","KRITERIA GARANSI", "GANGGUAN", "TAHUN BUAT", "TAHUN GANTI", "TGL PENDATAAN" ],
            masterdata::all()

        ]);

    }

}
