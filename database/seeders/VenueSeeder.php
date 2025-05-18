<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    public function run()
    {
        // Rabat Venues
        Venue::create([
            'name' => 'Le Jardin Royal',
            'city' => 'Rabat',
            'address' => 'Avenue Mohammed VI, Souissi',
            'description' => 'Un espace luxueux avec des jardins magnifiques et une vue panoramique sur la ville. Parfait pour les mariages en plein air et les cérémonies élégantes.',
            'capacity' => 600,
            'price' => 48000.00,
            'rating' => 4.8,
            'rating_count' => 65,
            'features' => [
                'Espace intérieur et extérieur',
                'Vue panoramique',
                'Jardins paysagers',
                'Fontaines décoratives'
            ],
            'amenities' => [
                'Parking privé',
                'Cuisine équipée',
                'Système son professionnel',
                'Éclairage architectural',
                'Salles de préparation'
            ],
            'images' => [
                'jardin-royal-1.jpg',
                'jardin-royal-2.jpg',
                'jardin-royal-3.jpg'
            ],
            'is_premium' => true,
            'availability_hours' => '10:00-02:00',
            'parking_capacity' => 200,
            'square_meters' => 2000
        ]);

        Venue::create([
            'name' => 'Palais des Roses',
            'city' => 'Rabat',
            'address' => 'Hay Riad',
            'description' => 'Une salle de mariage somptueuse inspirée de l\'architecture traditionnelle marocaine avec des touches modernes.',
            'capacity' => 450,
            'price' => 35000.00,
            'rating' => 4.6,
            'rating_count' => 42,
            'features' => [
                'Architecture traditionnelle',
                'Plafonds sculptés',
                'Patio central',
                'Espace lounge'
            ],
            'amenities' => [
                'Climatisation',
                'Wifi haut débit',
                'Vestiaires',
                'Service traiteur',
                'Équipe technique'
            ],
            'images' => [
                'palais-roses-1.jpg',
                'palais-roses-2.jpg',
                'palais-roses-3.jpg'
            ],
            'is_premium' => false,
            'availability_hours' => '12:00-02:00',
            'parking_capacity' => 150,
            'square_meters' => 1500
        ]);

        Venue::create([
            'name' => 'L\'Orangerie',
            'city' => 'Rabat',
            'address' => 'Route des Zaers',
            'description' => 'Un lieu unique combinant élégance moderne et charme naturel, avec une orangerie vitrée et des jardins luxuriants.',
            'capacity' => 300,
            'price' => 28000.00,
            'rating' => 4.7,
            'rating_count' => 38,
            'features' => [
                'Verrière moderne',
                'Jardins exotiques',
                'Terrasse panoramique',
                'Espace cocktail'
            ],
            'amenities' => [
                'Son et lumière',
                'Mobilier design',
                'Bar équipé',
                'Cuisine professionnelle'
            ],
            'images' => [
                'orangerie-1.jpg',
                'orangerie-2.jpg',
                'orangerie-3.jpg'
            ],
            'is_premium' => false,
            'availability_hours' => '14:00-02:00',
            'parking_capacity' => 100,
            'square_meters' => 1200
        ]);

        // Marrakech Additional Venues
        Venue::create([
            'name' => 'Palmeraie Luxury Events',
            'city' => 'Marrakech',
            'address' => 'Circuit de la Palmeraie',
            'description' => 'Un domaine exclusif au cœur de la Palmeraie, offrant un cadre idyllique pour des mariages de luxe.',
            'capacity' => 1000,
            'price' => 75000.00,
            'rating' => 4.9,
            'rating_count' => 85,
            'features' => [
                'Domaine privé',
                'Piscine à débordement',
                'Jardins palmiers',
                'Tentes berbères'
            ],
            'amenities' => [
                'Hébergement VIP',
                'Spa',
                'Service conciergerie',
                'Équipe événementielle'
            ],
            'images' => [
                'palmeraie-luxury-1.jpg',
                'palmeraie-luxury-2.jpg',
                'palmeraie-luxury-3.jpg'
            ],
            'is_premium' => true,
            'availability_hours' => '24h/24',
            'parking_capacity' => 400,
            'square_meters' => 5000
        ]);

        // Casablanca Additional Venues
        Venue::create([
            'name' => 'Ocean Pearl Events',
            'city' => 'Casablanca',
            'address' => 'Corniche Ain Diab',
            'description' => 'Une salle moderne avec vue sur l\'océan, parfaite pour des mariages contemporains et élégants.',
            'capacity' => 500,
            'price' => 45000.00,
            'rating' => 4.7,
            'rating_count' => 56,
            'features' => [
                'Vue mer',
                'Terrasse panoramique',
                'Design contemporain',
                'Espace modulable'
            ],
            'amenities' => [
                'Restaurant gastronomique',
                'Bar lounge',
                'Piste de danse LED',
                'Suite nuptiale'
            ],
            'images' => [
                'ocean-pearl-1.jpg',
                'ocean-pearl-2.jpg',
                'ocean-pearl-3.jpg'
            ],
            'is_premium' => true,
            'availability_hours' => '10:00-04:00',
            'parking_capacity' => 250,
            'square_meters' => 1800
        ]);
    }
} 