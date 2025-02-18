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
    public function definition(): array
    {
        return [
            // add faker forn icon
            'icon' => 'https://picsum.photos/seed/' . $this->faker->uuid . '/640/480',
            // add faker for title
            'title' => $this->faker->sentence(2),
            // add faker for description
            'description' => $this->faker->paragraph,
        ];
    }
}
