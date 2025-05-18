<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ReviewSite;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $reviews = ReviewSite::with('client')->get();

        return view('welcome', compact('services', 'reviews'));
    }
}
