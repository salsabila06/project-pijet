<?php

namespace Database\Seeders;

use App\Models\JenisPijat;
use Illuminate\Database\Seeder;

class jenisPijatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jasa = [
            'jasa_Pijat' => 'pijat Thai',
            'harga' => '10000'
        ];
        jenispijat::create($jasa);

        $jasa2 = [
            'jasa_Pijat' => 'pijat Prenatal',
            'harga' => '20000'
        ];
        jenispijat::create($jasa2);

        $jasa3 = [
            'jasa_Pijat' => 'pijat Refleksi',
            'harga' => '30000'
        ];
        jenispijat::create($jasa3);

        $jasa4 = [
            'jasa_Pijat' => 'pijat Olahraga',
            'harga' => '40000'
        ];
        jenispijat::create($jasa4);
    }
}
