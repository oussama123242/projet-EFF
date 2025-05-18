<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class AnniversaireController extends Controller
{
    public function index(Request $request)
    {
        $ville = $request->ville;
        
        // Query building with error handling
        try {
            $query = Salle::query();
            
            // Filter by type
            $query->where('type', 'anniversaire');
            
            // Add ville condition if provided
            if ($ville) {
                $query->where('ville', $ville);
            }
            
            // Execute query and get results
            $salles = $query->get();
            
            // If no results, provide empty collection instead of null
            if ($salles === null) {
                $salles = collect([]);
            }
            
        } catch (\Exception $e) {
            // Log the error and return empty collection
            \Log::error('Error fetching salles: ' . $e->getMessage());
            $salles = collect([]);
        }

        return view('services.anniversaire', compact('salles'));
    }
} 