<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // create array of team members from dummy/avatarX.png
        $teamMembers = [
            'dummy/avatar1.png',
            'dummy/avatar2.png',
            'dummy/avatar3.png',
            'dummy/avatar4.png',
        ];
        return [
            //create faker for name
            'name' => $this->faker->name(),
            //create faker for job_title
            'job_title' => $this->faker->jobTitle(),
            //create faker for image unique from teamMembers array
            'image' => $this->faker->unique()->randomElement($teamMembers),
            //create faker for twitter
            'twitter' => $this->faker->url,
            //create faker for facebook
            'facebook' => $this->faker->url,
            //create faker for instagram
            'instagram' => $this->faker->url,
            //create faker for linkedin
            'linkedin' => $this->faker->url,



        ];
    }
}
