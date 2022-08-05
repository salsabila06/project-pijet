<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=[
            'username'=>'admin',
            'role'=>'2',
            'address'=>'jln pulang',
            'number'=>'089694413511',
            'email'=>'kennyariadi@gmail.com',
            'password'=>Hash::make('11111'),
        ];
        Admin::create($admin);
        //
    }
}
