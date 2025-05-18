<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewService extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'prestataire_id', 'service_id', 'description', 'etoile'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function prestataire()
    {
        return $this->belongsTo(Prestataire::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
