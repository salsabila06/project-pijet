<?php

namespace Database\Seeders;

use App\Models\jasaPijat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JasaPijatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jasa=[
            'jasa_Pijat'=>'pijat Thai',
            'harga'=>'10000'
        ];
        jasaPijat::create($jasa);

        $jasa2=[
            'jasa_Pijat'=>'pijat Prenatal',
            'harga'=>'20000'
        ];
        jasaPijat::create($jasa2);

        $jasa3=[
            'jasa_Pijat'=>'pijat Refleksi',
            'harga'=>'30000'
        ];
        jasaPijat::create($jasa3);

        $jasa4=[
            'jasa_Pijat'=>'pijat Olahraga',
            'harga'=>'40000'
        ];
        jasaPijat::create($jasa4);
    }
}
