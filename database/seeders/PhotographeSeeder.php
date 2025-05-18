<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photographe;

class PhotographeSeeder extends Seeder
{
    public function run()
    {
        $photographes = [
            [
                'nom' => 'Studio Art',
                'style' => 'artistique',
                'description' => 'Photographie Artistique & Reportage',
                'prix_base' => 8000,
                'rating' => 5.0,
                'nombre_avis' => 92,
                'badge' => 'Premium',
                'services' => json_encode([
                    'Photos haute résolution',
                    'Album photo premium',
                    'Vidéo drone',
                    'Montage professionnel'
                ]),
                'images_gallery' => json_encode([
                    'studio-art1.jpg',
                    'studio-art2.jpg',
                    'studio-art3.jpg',
                    'studio-art4.jpg'
                ])
            ],
            [
                'nom' => 'Capture Moments',
                'style' => 'reportage',
                'description' => 'Photographie de Mariage & Événements',
                'prix_base' => 5000,
                'rating' => 4.5,
                'nombre_avis' => 78,
                'badge' => 'Populaire',
                'services' => json_encode([
                    'Reportage complet',
                    'Album photo digital',
                    'Séance couple',
                    'Retouches professionnelles'
                ]),
                'images_gallery' => json_encode([
                    'capture1.jpg',
                    'capture2.jpg',
                    'capture3.jpg',
                    'capture4.jpg'
                ])
            ],
            [
                'nom' => 'Tradition Photos',
                'style' => 'traditionnel',
                'description' => 'Photographie Traditionnelle & Classique',
                'prix_base' => 4000,
                'rating' => 4.8,
                'nombre_avis' => 156,
                'badge' => 'Expert',
                'services' => json_encode([
                    'Photos traditionnelles',
                    'Album familial',
                    'Tirages papier',
                    'Cadres classiques'
                ]),
                'images_gallery' => json_encode([
                    'tradition1.jpg',
                    'tradition2.jpg',
                    'tradition3.jpg',
                    'tradition4.jpg'
                ])
            ],
            [
                'nom' => 'Modern Vision',
                'style' => 'moderne',
                'description' => 'Photographie Contemporaine & Créative',
                'prix_base' => 9000,
                'rating' => 4.9,
                'nombre_avis' => 84,
                'badge' => 'Innovant',
                'services' => json_encode([
                    'Photos conceptuelles',
                    'Album design moderne',
                    'Effets spéciaux',
                    'Galerie en ligne'
                ]),
                'images_gallery' => json_encode([
                    'modern1.jpg',
                    'modern2.jpg',
                    'modern3.jpg',
                    'modern4.jpg'
                ])
            ]
        ];

        foreach ($photographes as $photographe) {
            Photographe::create($photographe);
        }
    }
} 