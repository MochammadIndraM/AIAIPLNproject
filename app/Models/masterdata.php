<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterdata extends Model
{
    use HasFactory;
    protected $table = 'master_data'; // Ubah nama tabel sesuai dengan migrasi ('budayas')
    protected $primaryKey = 'no_meter';
    public $timestamps = false; // Ubah primary key jika perlu
    public $incrementing = false; // auto pada primaryKey incremment false


    protected $guarded = [];

}
