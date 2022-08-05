<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory(10)->create();
    }
}
