<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'https://placehold.co/640x480/' . $this->faker->randomElement(['ff0000', '00ff00', '0000ff']) .
            '/ffffff?text=Image ' . rand(1, 100),
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'link1' => $this->faker->url(),
            'link2' => $this->faker->url(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
