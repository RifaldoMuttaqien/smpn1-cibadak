<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'deskripsi',
        'foto_kegiatan',  
      ];
}
