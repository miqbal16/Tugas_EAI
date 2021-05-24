<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penggajian extends Model
{
    use HasFactory;
    public $table = 'penggajians';

    protected $fillable = [
        'NIP',
        'id_kehadiran',
        'total_gaji',
    ];
    
}
