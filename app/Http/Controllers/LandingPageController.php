<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Service;
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

        return view('welcome', compact('hero', 'title', 'animation', 'services'));
    }
}
