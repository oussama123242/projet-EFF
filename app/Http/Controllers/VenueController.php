<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index(Request $request)
    {
        $query = Venue::query();

        if ($request->has('ville')) {
            $query->where('city', $request->ville);
        }

        if ($request->has('sort')) {
            switch ($request->sort) {
                case 'price-asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'capacity':
                    $query->orderBy('capacity', 'desc');
                    break;
                case 'popular':
                default:
                    $query->orderBy('rating', 'desc')
                          ->orderBy('rating_count', 'desc');
                    break;
            }
        }

        $venues = $query->get();

        return view('services.salles', compact('venues'));
    }

    public function show($id)
    {
        $venue = Venue::findOrFail($id);
        return response()->json($venue);
    }

    public function getAvailability($id)
    {
        $venue = Venue::findOrFail($id);
        // Here you would typically check a bookings table
        // For now, return dummy data
        return response()->json([
            'available_dates' => [
                ['date' => '2024-04-01', 'slots' => ['morning', 'evening']],
                ['date' => '2024-04-02', 'slots' => ['evening']],
                ['date' => '2024-04-03', 'slots' => ['morning', 'afternoon', 'evening']],
            ]
        ]);
    }
} 