<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JasaPijatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pemijat'=>$this->faker->userName(),
            'jasa_pijat'=>$this->faker->jobTitle(),
            'harga'=>$this->faker->randomDigitNotNull(),
        ];
    }
}
