<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'style',
        'description',
        'prix_base',
        'rating',
        'nombre_avis',
        'badge',
        'services',
        'images_gallery'
    ];

    protected $casts = [
        'services' => 'array',
        'images_gallery' => 'array'
    ];
} 