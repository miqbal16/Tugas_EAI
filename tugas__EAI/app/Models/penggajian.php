<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    use HasFactory;
    public $table = 'penggajians';
    protected $primaryKey = 'id_penggajian';
    protected $fillable = [
        'id_penggajian',
        'NIP',
        'id_kehadiran',
        'total_gaji',
    ];
    
}
