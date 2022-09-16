<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tim;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Igrac>
 */
class IgracFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstname(),
            'prezime' => $this->faker->lastName(),
            'summoner_name' => $this->faker->username(),
            'pozicija' => $this->faker->randomElement($array = array('Top','Jungle','Mid','ADC','Support')),
            'tim_id' => Tim::factory()

        ];
    }
}
