<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //create array of image from /storage/app/public/dummy/imgX.jpg
        $images = [
            '/dummy/img1.jpg',
            '/dummy/img2.jpg',
            '/dummy/img3.jpg',
            '/dummy/img4.jpg',
            '/dummy/img5.jpg',
            '/dummy/img6.jpg',
            '/dummy/img7.jpg',
            '/dummy/img8.jpg',
            '/dummy/img9.jpg',
            '/dummy/img10.jpg',
        ];

        return [
            //add faker for title
            'title' => $this->faker->sentence(2),
            //add faker for description
            'description' => $this->faker->paragraph(3),
            //add faker for image choose unique image from $images
            'image' => $this->faker->unique()->randomElement($images),
            //add faker for category_id
            'category_id' => \App\Models\PortofolioCategory::factory()->create()->id,
        ];
    }
}
