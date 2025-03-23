<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stars' => $this->faker->randomFloat(2, 0, 5),
            'content' => $this->faker->realText(100),
            'user_id' => $this->faker->numberBetween(2, 6),
        ];
    }
}
