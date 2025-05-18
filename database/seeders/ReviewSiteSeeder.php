<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReviewSite;

class ReviewSiteSeeder extends Seeder
{
    public function run()
    {
        ReviewSite::create([
            'client_id' => 1,
            'description' => 'Site très convivial et facile à utiliser!',
            'etoile' => 5,
        ]);

        ReviewSite::create([
            'client_id' => 2,
            'description' => 'Interface claire et intuitive.',
            'etoile' => 4,
        ]);
    }
}
