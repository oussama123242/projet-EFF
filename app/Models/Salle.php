<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'type',
        'ville',
        'adresse',
        'description',
        'capacite',
        'prix',
        'image',
        'amenities',
        'features',
        'is_premium',
        'availability_hours',
        'parking_capacity',
        'square_meters'
    ];

    protected $casts = [
        'amenities' => 'array',
        'features' => 'array',
        'is_premium' => 'boolean',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // Vérifie si la salle est disponible pour une date donnée
    public function isAvailable($date, $heure_debut, $heure_fin)
    {
        return !$this->reservations()
            ->where('date_evenement', $date)
            ->where(function ($query) use ($heure_debut, $heure_fin) {
                $query->whereBetween('heure_debut', [$heure_debut, $heure_fin])
                    ->orWhereBetween('heure_fin', [$heure_debut, $heure_fin]);
            })
            ->where('status', '!=', 'cancelled')
            ->exists();
    }

    // Retourne les créneaux disponibles pour une date donnée
    public function getAvailableSlots($date)
    {
        $reservations = $this->reservations()
            ->where('date_evenement', $date)
            ->where('status', '!=', 'cancelled')
            ->orderBy('heure_debut')
            ->get();

        // Définir les créneaux horaires possibles (par exemple, de 8h à 23h)
        $slots = [];
        $start = 8;
        $end = 23;

        for ($i = $start; $i < $end; $i++) {
            $time = sprintf("%02d:00", $i);
            $endTime = sprintf("%02d:00", $i + 4); // Créneau de 4 heures

            $isAvailable = true;
            foreach ($reservations as $reservation) {
                if (
                    ($time >= $reservation->heure_debut && $time < $reservation->heure_fin) ||
                    ($endTime > $reservation->heure_debut && $endTime <= $reservation->heure_fin)
                ) {
                    $isAvailable = false;
                    break;
                }
            }

            if ($isAvailable) {
                $slots[] = [
                    'debut' => $time,
                    'fin' => $endTime
                ];
            }
        }

        return $slots;
    }
}
