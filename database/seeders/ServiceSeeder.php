<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'type' => 'locale',
            'prix_min' => 500,
            'prix_max' => 1500,
            'localisation_maps' => 'https://maps.example.com/locale',
            'etat' => 'disponible',
            'photos' => json_encode(['photo1.jpg', 'photo2.jpg']),
        ]);

        Service::create([
            'type' => 'tréteur',
            'prix_min' => 200,
            'prix_max' => 1000,
            'localisation_maps' => 'https://maps.example.com/treteur',
            'etat' => 'disponible',
            'photos' => json_encode(['photo3.jpg', 'photo4.jpg']),
        ]);
    }
}
