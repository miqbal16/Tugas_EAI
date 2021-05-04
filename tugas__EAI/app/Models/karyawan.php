<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = [
        'NIP',
        'id_divisi',
        'no_telepon',
        'alamat',
        'jabatan',
        
    ];
}
