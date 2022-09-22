<?php

namespace Database\Seeders;

use App\Models\data;
use App\Models\jasaPijat;
use App\Models\pembatalan;
use App\Models\pemesanan;
use App\Models\pengguna;
use App\Models\review;
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
        $this->call(AdminSeeder::class);

        $this->call(VerifikasiSeeder::class);
        $this->call(jenisPijatSeeder::class);

        pengguna::factory(20)->create();
        //pemesanan::factory(20)->create();
        pembatalan::factory(20)->create();
        review::factory(20)->create();
        // verifikasi::factory(20)->create();
        // jasaPijat::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
