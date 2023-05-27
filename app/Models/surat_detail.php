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

    protected $guarded = [];
    public function surat()
    {
        return $this->belongsTo(surat::class, 'no_berita_acara', 'no_berita_acara');
    }
}
