<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $hero = Hero::where('is_active', true)->first();
        $titles = explode('#', $hero->title);
        $mainTitle = $titles[0];
        $animationTitle = explode('|', $titles[1]);
        return view('welcome', compact('hero', 'mainTitle', 'animationTitle'));
    }
}
