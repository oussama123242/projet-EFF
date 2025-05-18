<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'nom' => 'Admin',
            'prenom' => 'Super',
            'telephone' => '0600000000',
            'password' => bcrypt('admin123'),
        ]);
    }
}
