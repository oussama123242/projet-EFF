<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReviewService;

class ReviewServiceSeeder extends Seeder
{
    public function run()
    {
        ReviewService::create([
            'client_id' => 1,
            'prestataire_id' => 1,
            'service_id' => 1,
            'description' => 'Excellent service, très professionnel!',
            'etoile' => 5,
        ]);

        ReviewService::create([
            'client_id' => 2,
            'prestataire_id' => 2,
            'service_id' => 2,
            'description' => 'Bonne prestation, je recommande!',
            'etoile' => 4,
        ]);
    }
}
