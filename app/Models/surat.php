<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';

    protected $primaryKey = 'no_berita_acara';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];

    public function surat_detail()
    {
        return $this->hasMany(surat_detail::class, 'no_berita_acara', 'no_berita_acara');
    }
}
