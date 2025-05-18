<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'salle_id',
        'date',
        'heure_debut',
        'heure_fin',
        'statut',
        'prix_total',
        'services_supplementaires',
        'notes'
    ];

    protected $casts = [
        'date' => 'date',
        'heure_debut' => 'datetime',
        'heure_fin' => 'datetime',
        'services_supplementaires' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function isModifiable()
    {
        return $this->statut === 'en_attente';
    }

    public function isCancellable()
    {
        return in_array($this->statut, ['en_attente', 'confirmee']);
    }

    public function canLeaveReview()
    {
        return $this->statut === 'terminee';
    }
}
