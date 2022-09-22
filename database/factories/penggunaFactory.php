<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pengguna>
 */
class penggunaFactory extends Factory
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
            'password' => $this->faker->password(),
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => $this->faker->dateTime(),
            'email' => $this->faker->unique()->email(),
            'no_telp' => $this->faker->phoneNumber(),
            'no_ktp' => $this->faker->nik(),
            'alamat' => $this->faker->address(),
            'domisili' => $this->faker->city(),
        ];
    }
}
