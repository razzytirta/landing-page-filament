<?php

namespace Database\Seeders;

use App\Models\PortofolioCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortofolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PortofolioCategory::factory(10)->create();
    }
}
