<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nama_guru',
        'nip',
        'mapel',
        'foto'
    ];
}
