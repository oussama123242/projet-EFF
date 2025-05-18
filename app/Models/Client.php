<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'password'];

    public function reviews()
    {
        return $this->hasMany(ReviewService::class);
    }

    public function siteReviews()
    {
        return $this->hasMany(ReviewSite::class);
    }
}
