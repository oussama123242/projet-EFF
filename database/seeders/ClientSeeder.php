<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client; // Ajout de cette ligne pour importer le modèle

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'nom' => 'Dupont',
            'prenom' => 'Jean',
            'telephone' => '0612345678',
            'email' => 'jean.dupont@example.com',
            'password' => bcrypt('password123'),
        ]);

        Client::create([
            'nom' => 'Martin',
            'prenom' => 'Claire',
            'telephone' => '0698765432',
            'email' => 'claire.martin@example.com',
            'password' => bcrypt('password456'),
        ]);
    }
}
