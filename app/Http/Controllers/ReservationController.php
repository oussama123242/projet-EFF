<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function create()
    {
        $salles = Salle::all();
        return view('reservations.create', compact('salles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'date_evenement' => 'required|date|after:today',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
            'nombre_invites' => 'required|integer|min:1',
            'type_evenement' => 'required|string',
            'services' => 'nullable|array',
            'commentaires' => 'nullable|string',
            'salle_id' => 'required|exists:salles,id'
        ]);

        if (Auth::check()) {
            $validated['user_id'] = Auth::id();
        }

        $reservation = Reservation::create($validated);

        return redirect()->route('reservations.show', $reservation->id)
            ->with('success', 'Votre demande de réservation a été envoyée avec succès !');
    }

    public function index()
    {
        $reservations = Reservation::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('reservations.index', compact('reservations'));
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    public function cancel($id)
    {
        $reservation = Reservation::findOrFail($id);
        
        if ($reservation->user_id !== auth()->id()) {
            abort(403);
        }

        $reservation->update(['status' => 'cancelled']);
        return redirect()->route('reservations.index')
            ->with('success', 'La réservation a été annulée.');
    }
}

