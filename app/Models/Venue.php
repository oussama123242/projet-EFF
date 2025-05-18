<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'description',
        'capacity',
        'price',
        'rating',
        'rating_count',
        'features',
        'amenities',
        'images',
        'is_premium',
        'availability_hours',
        'parking_capacity',
        'square_meters',
        'type'
    ];

    protected $casts = [
        'features' => 'array',
        'amenities' => 'array',
        'images' => 'array',
        'is_premium' => 'boolean',
    ];
} 