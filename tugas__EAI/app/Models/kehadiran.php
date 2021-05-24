<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kehadiran extends Model
{
    use HasFactory;

    public $table = 'kehadirans';


    protected $fillable = [
        'id_kehadiran',
        'NIP',
        'tanggal',
        'jam_datang',
        'jam_pulang',
        'keterangan',
        'total_jam_kerja',
        
        
    ];
}
