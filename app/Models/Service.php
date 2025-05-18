<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'prix_min', 'prix_max', 'localisation_maps', 'etat', 'photos'];

    protected $casts = [
        'photos' => 'array',
    ];

    public function prestataires()
    {
        return $this->hasMany(Prestataire::class, 'id_service');
    }

    public function reviews()
    {
        return $this->hasMany(ReviewService::class);
    }
}
