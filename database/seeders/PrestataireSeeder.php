<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prestataire;

class PrestataireSeeder extends Seeder
{
    public function run()
    {
        Prestataire::create([
            'nom' => 'Legrand',
            'prenom' => 'Paul',
            'email' => 'paul.legrand@example.com',
            'password' => bcrypt('password789'),
            'telephone' => '0678901234',
            'id_service' => 1,
        ]);

        Prestataire::create([
            'nom' => 'Petit',
            'prenom' => 'Marie',
            'email' => 'marie.petit@example.com',
            'password' => bcrypt('password321'),
            'telephone' => '0645678901',
            'id_service' => 2,
        ]);
    }
}
