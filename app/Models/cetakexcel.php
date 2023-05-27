<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cetakexcel extends Model
{
    use HasFactory;
    protected $table = 'master_data';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [];
}
