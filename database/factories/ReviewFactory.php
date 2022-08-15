<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'jasa_pijat'=> $this->faker->randomElement(['Pijat Prenatal','Pijat Tradisional','Pijat Refleksi','Pijat Thai','Pijat Olahraga']),
            'rating' => $this->faker->numberBetween(1,5),
        ];
    }
}
