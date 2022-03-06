<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName('female') . ' ' . $this->faker->lastName(),
            'title' => 'License This-License That-Certified This-Certified That',
            'bio' => $this->faker->sentence(25, true),
            'image_url' => null
        ];
    }
}
