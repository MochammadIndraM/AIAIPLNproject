<?php

namespace App\Imports;

use App\Models\databaseexcel;
use App\Models\surat;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class DatabaseImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    protected $beritaacara;
    protected $tanggal;
    protected $unitinduk;
    protected $up3;
    protected $ulp;
    protected $namapengirim;
    protected $catatan;

    public function __construct($beritaacara, $tanggal, $unitinduk, $up3, $ulp, $namapengirim, $catatan){
        $this->beritaacara=$beritaacara;
        $this->tanggal=$tanggal;
        $this->unitinduk=$unitinduk;
        $this->up3=$up3;
        $this->ulp=$ulp;
        $this->namapengirim=$namapengirim;
        $this->catatan=$catatan;
    }

    public function model(array $row)
    {
        return new databaseexcel([
           'no_berita_acara'        => $this->beritaacara,
           'no_meter'               => $row['nomer_meter'],
           'kriteria_garansi'       => $row['kriteria_garansi'],
           'gangguan'               => $row['gangguan'],
           'tahun_buat'             => $row['tahun_buat'],
           'tahun_ganti'            => $row['tahun_ganti_meter'],
        ]);

    }

}
