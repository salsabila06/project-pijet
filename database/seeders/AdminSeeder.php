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
        $admin = [
            'name'=>'admin',
            'username' => 'admin',
            'role' => '1',
            'address' => 'jln pulang',
            'number' => '089694413511',
            'email' => 'kennyariadi@gmail.com',
            'password' => Hash::make('11111'),
            'TTL' => '11-10-2000',
            'language' => 'Indonesia',
        ];
        Admin::create($admin);
        //

        $finance = [
            'name'=>'finance',
            'username' => 'finance',
            'role' => '2',
            'address' => 'jln pulang',
            'number' => '089694413511',
            'email' => 'artemiz@gmail.com',
            'password' => Hash::make('11111'),
            'TTL' => '11-10-2000',
            'language' => 'Indonesia',];
        Admin::create($finance);
        //

        $SA=[
            'name'=>'SA',
            'username' => 'SA',
            'role' => '3',
            'address' => 'jln pulang',
            'number' => '089694413511',
            'email' => 'test@gmail.com',
            'password' => Hash::make('11111'),
            'TTL' => '11-10-2000',
            'language' => 'Indonesia',];
        Admin::create($SA);
    }
}
