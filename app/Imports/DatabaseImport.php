<?php

namespace App\Imports;

use App\Models\databaseexcel;
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
    protected $ul3;
    protected $namapengirim;
    protected $catatan;


    public function __construct($beritaacara, $tanggal, $unitinduk, $up3, $ul3, $namapengirim, $catatan){
        $this->beritaacara=$beritaacara;
        $this->tanggal=$tanggal;
        $this->unitinduk=$unitinduk;
        $this->up3=$up3;
        $this->ul3=$ul3;
        $this->namapengirim=$namapengirim;
        $this->catatan=$catatan;
    }
    public function model(array $row)
    {

        return new databaseexcel([
           'no_berita-acara'        => $this->beritaacara,
           'tanggal'                => $this->tanggal,
           'unit_induk'             => $this->unitinduk,
           'up3'                    => $this->up3,
           'ul3'                    => $this->ul3,
           'nama_pengirim'          => $this->namapengirim,
           'catatan'                => $this->catatan,
           'no_meter'               => $row['nomer_meter'],
           'kriteria_garansi'       => $row['kriteria_garansi'],
           'gangguan'               => $row['gangguan'],
           'tahun_buat'             => $row['tahun_buat'],
           'tahun_ganti'            => $row['tahun_ganti_meter'],
        ]);
    }
}
