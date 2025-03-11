<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Hero;
use App\Models\Portofolio;
use App\Models\PortofolioCategory;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $hero = Hero::where('is_active', 1)->first();
        //split hero title into title and animation
        [$title, $animation] = explode('|', $hero->title);
        $animation = explode('#', $animation);

        // get all services order by sort column
        $services = Service::orderBy('sort')->get();
        // get all portofolio with categories
        $portofolios = Portofolio::with('category')->inRandomOrder()->limit(10)->get();
        //get all client in random order
        $clients = Client::inRandomOrder()->get();
        $teams = Team::all();

        return view('welcome', compact('hero', 'title', 'animation', 'services', 'portofolios', 'clients', 'teams'));
    }
}
