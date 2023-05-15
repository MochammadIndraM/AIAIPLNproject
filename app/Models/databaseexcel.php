<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databaseexcel extends Model
{
    use HasFactory;
    protected $table = 'surat';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = array('no_berita-acara', 'tanggal', 'unit_induk', 'up3', 'ul3', 'nama_pengirim', 'catatan', 'no_meter', 'kriteria_garansi', 'gangguan', 'tahun_buat', 'tahun_ganti');
}
