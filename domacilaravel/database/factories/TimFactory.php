<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tim>
 */
class TimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime_tima' => $this->faker->company(),
            'region' => $this->faker->city(),
            'drzava' => $this->faker->country(),
            'vlasnik' => $this->faker->name()
        ];
    }
}
