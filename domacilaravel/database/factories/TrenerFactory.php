<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Igrac;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trener>
 */
class TrenerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'nickname' => $this->faker->username(),
            'igrac_id' => Igrac::factory()
        ];
    }
}
