<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databaseexcel extends Model
{
    use HasFactory;
    protected $table = 'surat_detail';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = array('no_berita_acara', 'no_meter', 'kriteria_garansi', 'gangguan', 'tahun_buat', 'tahun_ganti');
}
