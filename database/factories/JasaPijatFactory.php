<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jasaPijat>
 */
class jasaPijatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jasa_pijat'=>$this->faker->jobTitle(),
            'harga'=>$this->faker->randomDigitNotNull(),
        ];
    }
}
