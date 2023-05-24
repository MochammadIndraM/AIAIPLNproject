<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_detail extends Model
{
    use HasFactory;
    protected $table = 'surat_detail';
    protected $primaryKey = 'no_berita_acara';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = array('no_meter', 'kriteria_garansi', 'gangguan', 'tahun_buat', 'tahun_ganti');
}
