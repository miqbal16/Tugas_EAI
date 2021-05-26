<?php

use App\Models\Item;
use App\Models\divisi;
use App\Models\karyawan;
use App\Models\kehadiran;
use App\Models\penggajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//DIVISI
Route::get('divisi', function() {
    return divisi::all();
});
Route::get('divisi/{id_divisi}', function(divisi $id_divisi) {
    return $id_divisi;
});
Route::post('divisi', function() {
    divisi::create(request()->all());
    return 'Data Divisi Berhasil Ditambahkan';
});
Route::delete('divisi/{id_divisi}', function(divisi $id_divisi) {
    $id_divisi->delete();
    return 'Data Divisi Berhasil Dihapus';
});
Route::put('divisi/{id_divisi}', function(Request $request, $id_divisi) {
    $divisi = divisi::findOrFail($id_divisi);
    $divisi->update($request->all());

    return $divisi;
});

//KARYAWAN
Route::get('karyawan', function() {
    return karyawan::all();
});
Route::get('karyawan/{NIP}', function(karyawan $NIP) {
    return $NIP;
});
Route::post('karyawan', function() {
    karyawan::create(request()->all());
    return 'Data Karyawan Berhasil Ditambahkan';
});
Route::delete('karyawan/{NIP}', function(karyawan $NIP) {
    $NIP->delete();
    return 'Data Karyawan Berhasil Dihapus';
});
Route::put('karyawan/{NIP}', function(Request $request, $NIP) {
    $karyawan = karyawan::findOrFail($NIP);
    $karyawan->update($request->all());

    return $karyawan;
});

//PENGGAJIAN
Route::get('penggajian', function() {
    return penggajian::all();
});
Route::get('penggajian/{id_penggajian}', function(penggajian $id_penggajian) {
    return $id_penggajian;
});
Route::post('penggajian', function() {
    penggajian::create(request()->all());
    return 'Data Penggajian Berhasil Ditambahkan';
});
Route::delete('penggajian/{id_penggajian}', function(penggajian $id_penggajian) {
    $id_penggajian->delete();
    return 'Data Penggajian Berhasil Dihapus';
});
Route::put('penggajian/{id_penggajian}', function(Request $request, $id_penggajian) {
    $penggajian = penggajian::findOrFail($id_penggajian);
    $penggajian->update($request->all());

    return $penggajian;
});

//KEHADIRAN
Route::get('kehadiran', function() {
    return kehadiran::all();
});
Route::get('kehadiran/{id_kehadiran}', function(kehadiran $id_kehadiran) {
    return $id_kehadiran;
});
Route::post('kehadiran', function() {
    kehadiran::create(request()->all());
    return 'Data Kehadiran Berhasil Ditambahkan';
});
Route::delete('kehadiran/{id_kehadiran}', function(kehadiran $id_kehadiran) {
    $id_kehadiran->delete();
    return 'Data Kehadiran Berhasil Dihapus';
});
