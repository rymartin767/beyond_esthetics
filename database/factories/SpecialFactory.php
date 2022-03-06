<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Special>
 */
class SpecialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string => $this->faker->, mixed>
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(5, true),
            'sale_price' => $this->faker->randomFloat(2, 50, 1000),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'locations' => ['ontario'],
            'image_url' => null
        ];
    }
}
