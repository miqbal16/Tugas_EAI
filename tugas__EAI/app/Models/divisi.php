<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $fillable = [
        'id_divisi',
        'nama_divisi',
        'jumlah_anggota',
    ];
}
