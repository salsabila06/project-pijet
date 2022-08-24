<?php

namespace Database\Seeders;

use App\Models\verifikasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VerifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verifikasi=[
            'status'=>'berhasil'
        ];

        verifikasi::create($verifikasi);

        $verifikasi2=[
            'status'=>'menunggu'
        ];

        verifikasi::create($verifikasi2);

        $verifikasi3=[
            'status'=>'ditolak'
        ];

        verifikasi::create($verifikasi3);
        //
    }
}
