<?php

namespace Database\Seeders;

use App\Models\data;
use App\Models\jasaPijat;
use App\Models\pemesanan;
use App\Models\pengguna;
use App\Models\verifikasi;
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

       $verifikasi=[
         'status'=>'berhasil'
       ];

       verifikasi::created($verifikasi);

        $verifikasi2=[
            'status'=>'menunggu'
        ];

        verifikasi::created($verifikasi2);

        $verifikasi3=[
            'status'=>'ditolak'
        ];

        verifikasi::created($verifikasi3);

       pengguna::factory(20)->create();
       pemesanan::factory(20)->create();
       data::factory(20)->create();
       // verifikasi::factory(20)->create();
       // jasaPijat::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
