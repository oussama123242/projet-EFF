<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class ServiceController extends Controller
{
    public function showByType($type, Request $request)
    {
        $ville = $request->ville;
        
        // Ensure type is lowercase to match our database
        $type = strtolower($type);
        
        // Query building with error handling
        try {
            $query = Salle::query();
            
            // Add type condition
            $query->where('type', $type);
            
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

        // Map the type to the corresponding view
        $viewMap = [
            'mariage' => 'services.mariage',
            'anniversaire' => 'services.anniversaire',
            'reunion' => 'services.reunion',
            'entreprise' => 'services.entreprise',
        ];

        // Get the view name from the map, fallback to 'services.salles' if type not found
        $viewName = $viewMap[$type] ?? 'services.salles';

        return view($viewName, compact('salles'));
    }
}

