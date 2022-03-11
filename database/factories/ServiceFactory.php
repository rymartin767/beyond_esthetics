<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2, false),
            'type' => collect(['medical', 'spa', 'injectables'])->random(),
            'locations' => ['ashland','ontario'],
            'treatments' => ['one', 'two', 'three'],
            'description' => $this->faker->sentence(20, true),
            'bullets' => $this->faker->paragraph(8, true),
            'msrp' => $this->faker->randomFloat(2, 100, 2000),
            'video_url' => null
        ];
    }
}
