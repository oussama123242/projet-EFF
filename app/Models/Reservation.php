<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'salle_id',
        'user_id',
        'nom',
        'email',
        'telephone',
        'date_evenement',
        'heure_debut',
        'heure_fin',
        'nombre_invites',
        'type_evenement',
        'services',
        'commentaires',
        'status'
    ];

    protected $casts = [
        'date_evenement' => 'datetime',
        'services' => 'array',
    ];

    protected $attributes = [
        'status' => 'pending'
    ];

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
