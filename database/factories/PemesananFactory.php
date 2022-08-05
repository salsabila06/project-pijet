<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pemesanan>
 */
class PemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username'=> $this->faker->userName(),
            'jasa_pijat'=> $this->faker->randomElement(['Pijat Prenatal','Pijat Tradisional','Pijat Refleksi','Pijat Thai','Pijat Olahraga']),
            'status'=> $this->faker->randomElement(['Berhasil','Menunggu','Ditolak'])
        ];
    }
}
