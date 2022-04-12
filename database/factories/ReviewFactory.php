<?php

namespace Database\Factories;

use App\Models\Service;
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
        $media = collect(['google', 'facebook', 'vagaro', 'instagram'])->random();

        return [
            'service_id' => Service::factory(),
            'date' => now(),
            'name' => $this->faker->firstName(),
            'comments' => $this->faker->paragraph(3, true),
            'social_media' => $media,
            'social_media_username' => '@' . $this->faker->firstName() . '_' . $media
        ];
    }
}
