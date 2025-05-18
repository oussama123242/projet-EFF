<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salle;

class SalleSeeder extends Seeder
{
    public function run(): void
    {
        $salles = [
            // Rabat
            [
                'nom' => 'Salle Royale',
                'image' => 'royale.jpg',
                'type' => 'mariage',
                'ville' => 'Rabat',
                'capacite' => 300,
                'adresse' => 'Hay Ryad',
                'prix' => 12000,
                'description' => 'Salle élégante avec décor royal pour des mariages inoubliables.'
            ],
            [
                'nom' => 'Jardin Andalou',
                'image' => 'andalou.jpg',
                'type' => 'mariage',
                'ville' => 'Rabat',
                'capacite' => 250,
                'adresse' => 'Avenue Annakhil',
                'prix' => 10000,
                'description' => 'Jardin extérieur avec ambiance andalouse.'
            ],

            // Casablanca
            [
                'nom' => 'Salle Atlas',
                'image' => 'atlas.jpg',
                'type' => 'mariage',
                'ville' => 'Casablanca',
                'capacite' => 400,
                'adresse' => 'Maarif',
                'prix' => 15000,
                'description' => 'Salle spacieuse au cœur de Casablanca.'
            ],
            [
                'nom' => 'Le Diamant Casablanca',
                'image' => 'diamant.jpg',
                'type' => 'mariage',
                'ville' => 'Casablanca',
                'capacite' => 350,
                'adresse' => 'Bd Zerktouni',
                'prix' => 14000,
                'description' => 'Salle luxueuse avec un décor brillant.'
            ],

            // Tanger
            [
                'nom' => 'Salle Marina',
                'image' => 'marina.jpg',
                'type' => 'mariage',
                'ville' => 'Tanger',
                'capacite' => 280,
                'adresse' => 'Corniche',
                'prix' => 11000,
                'description' => 'Vue panoramique sur la mer, idéale pour les fêtes.'
            ],
            [
                'nom' => 'Le Phare',
                'image' => 'phare.jpg',
                'type' => 'mariage',
                'ville' => 'Tanger',
                'capacite' => 300,
                'adresse' => 'Cap Spartel',
                'prix' => 13000,
                'description' => 'Ambiance marine avec vue sur l'océan.'
            ],

            // Marrakech
            [
                'nom' => 'Palais Rouge',
                'image' => 'rouge.jpg',
                'type' => 'mariage',
                'ville' => 'Marrakech',
                'capacite' => 500,
                'adresse' => 'Palmeraie',
                'prix' => 16000,
                'description' => 'Palais traditionnel marocain avec jardin.'
            ],
            [
                'nom' => 'Mille et Une Nuits',
                'image' => '1001.jpg',
                'type' => 'mariage',
                'ville' => 'Marrakech',
                'capacite' => 450,
                'adresse' => 'Route de Fès',
                'prix' => 15500,
                'description' => 'Thème oriental inspiré des contes arabes.'
            ],
        ];

        foreach ($salles as $salle) {
            Salle::create($salle);
        }

        Salle::create([
            'nom' => 'Le Palace Royal',
            'type' => 'mariage',
            'ville' => 'Casablanca',
            'adresse' => 'Ain Diab',
            'description' => 'Salle de luxe avec vue sur l\'océan, parfaite pour les mariages prestigieux.',
            'capacite' => 600,
            'prix' => 45000.00,
            'image' => 'casa-palace.jpg',
            'amenities' => [
                'Traiteur',
                'Sonorisation',
                'Nettoyage',
                'Sécurité 24/7'
            ],
            'features' => [
                'Vue mer',
                'Terrasse',
                'Parking privé',
                'Espace photos'
            ],
            'is_premium' => true,
            'availability_hours' => '24h/24',
            'parking_capacity' => 200,
            'square_meters' => 1500
        ]);

        Salle::create([
            'nom' => 'Villa Les Jardins',
            'type' => 'mariage',
            'ville' => 'Casablanca',
            'adresse' => 'Californie',
            'description' => 'Magnifique villa avec jardins pour des mariages en plein air.',
            'capacite' => 400,
            'prix' => 35000.00,
            'image' => 'casa-jardins.jpg',
            'amenities' => [
                'Espace piscine',
                'DJ inclus',
                'Nettoyage'
            ],
            'features' => [
                'Jardin',
                'Piscine',
                'Espace cocktail'
            ],
            'is_premium' => false,
            'availability_hours' => '18h - 4h',
            'parking_capacity' => 100,
            'square_meters' => 1000
        ]);
    }
}
