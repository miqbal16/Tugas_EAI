<?php

namespace Database\Seeders;

use App\Models\divisi;
use App\Models\karyawan;
use App\Models\kehadiran;
use App\Models\penggajian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        karyawan::factory()->count(5)->create();
        kehadiran::factory()->count(5)->create();
        penggajian::factory()->count(5)->create();
        divisi::factory()->count(5)->create();
    }
}
