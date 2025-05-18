<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salle;

class SalleVilleSeeder extends Seeder
{
    public function run(): void
    {
        Salle::where('nom', 'Salle Royale')->update(['ville' => 'Rabat']);
        Salle::where('nom', 'Salle Atlas')->update(['ville' => 'Casablanca']);
        Salle::where('nom', 'Salle Marina')->update(['ville' => 'Tanger']);
        Salle::where('nom', 'Salle Marina')->update(['ville' => 'Marrakech']);
    }
}
