<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = array('no_berita_acara', 'tanggal', 'unit_induk', 'up3', 'ulp', 'nama_pengirim', 'catatan');
}
