<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userweb extends Model
{
    use HasFactory;
    protected $table = 'master_user'; // Ubah nama tabel sesuai dengan migrasi ('budayas')
    protected $primaryKey = 'kode_user';
    public $timestamps = false; // Ubah primary key jika perlu
    public $incrementing = false; // auto pada primaryKey incremment false


    protected $guarded = [];

}
