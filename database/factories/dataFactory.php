<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\data>
 */
class dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'verifikasi_id'=>'2',
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'password' =>Hash::make('11111'),
            'email' => $this->faker->unique()->email(),
            'number' => $this->faker->phoneNumber(),
            //
        ];
    }
}
