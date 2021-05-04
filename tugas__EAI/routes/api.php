<?php

use App\Models\Item;
use App\Models\divisi;
use App\Models\karyawan;
use App\Models\kehadiran;
use App\Models\penggajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Divisi

Route::get('divisi', function() {
    return divisi::all();
});

Route::get('database_hr/{id_divisi}', function(divisi $id_divisi) {
    return $id_divisi;
});

Route::post('divisi', function() {
    return divisi::create(request()->all());
});

Route::get('item', function() {
    return Item::all();
});


// karyawan
Route::get('karyawan', function() {
    return karyawan::all();
});

Route::post('karyawan', function() {
    return karyawan::create(request()->all());
});


Route::get('penggajian', function() {
    return penggajian::all();
});


Route::get('kehadiran', function() {
    return kehadiran::all();
});

// 
