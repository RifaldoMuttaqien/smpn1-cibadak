<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_hp',
        'isi_pesan',
    ];
}
