<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'email', 'password', 'telephone', 'id_service'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function reviews()
    {
        return $this->hasMany(ReviewService::class);
    }
}
