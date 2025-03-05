<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 6 services
        Service::factory(6)->create();



    }
}
