<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    public $table = 'karyawans';
    protected $primaryKey = 'NIP';
    protected $fillable = [
        'NIP',
        'nama_depan',
        'nama_belakang',
        'id_divisi',
        'no_telepon',
        'alamat',
        'jabatan',
        
    ];
}
