<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::factory(10)->create();

        //call hero factory set is_active to true
        Hero::factory()->create([
            'is_active' => true,
        ]);
    }
}
