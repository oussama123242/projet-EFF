<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Auth::user()->reservations()->with('salle')->latest()->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create(Request $request)
    {
        $salle = null;
        if ($request->has('salle_id')) {
            $salle = Salle::findOrFail($request->salle_id);
        }
        $salles = Salle::all();
        return view('reservations.create', compact('salle', 'salles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'salle_id' => 'required|exists:salles,id',
            'date' => 'required|date|after:today',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
            'services_supplementaires' => 'nullable|array',
            'notes' => 'nullable|string|max:1000',
        ]);

        $reservation = new Reservation();
        $reservation->user_id = Auth::id();
        $reservation->salle_id = $validated['salle_id'];
        $reservation->date = $validated['date'];
        $reservation->heure_debut = $validated['heure_debut'];
        $reservation->heure_fin = $validated['heure_fin'];
        $reservation->services_supplementaires = $request->services_supplementaires ?? [];
        $reservation->notes = $validated['notes'];
        $reservation->statut = 'en_attente';
        $reservation->save();

        return redirect()->route('reservations.show', $reservation)
            ->with('success', 'Votre demande de réservation a été envoyée avec succès !');
    }

    public function show(Reservation $reservation)
    {
        // Vérifier que l'utilisateur est bien le propriétaire de la réservation
        if ($reservation->user_id !== Auth::id()) {
            abort(403, 'Non autorisé');
        }

        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        $this->authorize('update', $reservation);
        
        if (!$reservation->isModifiable()) {
            return back()->with('error', 'Cette réservation ne peut plus être modifiée.');
        }

        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $this->authorize('update', $reservation);

        if (!$reservation->isModifiable()) {
            return back()->with('error', 'Cette réservation ne peut plus être modifiée.');
        }

        $validated = $request->validate([
            'date' => 'required|date|after:today',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
        ]);

        $reservation->update($validated);

        return redirect()->route('reservations.show', $reservation)
            ->with('success', 'Réservation modifiée avec succès.');
    }

    public function cancel(Reservation $reservation)
    {
        // Vérifier que l'utilisateur est bien le propriétaire de la réservation
        if ($reservation->user_id !== Auth::id()) {
            abort(403, 'Non autorisé');
        }

        // Vérifier que la réservation peut être annulée
        if (!$reservation->isCancellable()) {
            return back()->with('error', 'Cette réservation ne peut plus être annulée.');
        }

        $reservation->statut = 'annulee';
        $reservation->save();

        return back()->with('success', 'La réservation a été annulée avec succès.');
    }

    public function review(Request $request, Reservation $reservation)
    {
        $this->authorize('review', $reservation);

        if (!$reservation->canLeaveReview()) {
            return back()->with('error', 'Vous ne pouvez pas encore laisser un avis pour cette réservation.');
        }

        $validated = $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:500',
        ]);

        // Créer l'avis (à implémenter avec un modèle Review)
        // $reservation->reviews()->create($validated);

        return redirect()->route('reservations.show', $reservation)
            ->with('success', 'Merci pour votre avis !');
    }
}

