<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
  use HasFactory;

  protected $table = 'master-user'; // mendevinisikan nama table
  protected $primaryKey = 'kode_user'; // mendevinisikan primary key
  public $incrementing = false; // auto pada primaryKey incremment false

  // fillable mendevinisikan field mana saja yang dapat kita isikan
  protected $guarded = [];
}
