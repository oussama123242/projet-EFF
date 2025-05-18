@extends('layouts.client')

@section('title', 'Détails de la réservation')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Détails de la réservation</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-3">Informations personnelles</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Nom:</strong> {{ $reservation->nom }}</li>
                        <li class="mb-2"><strong>Email:</strong> {{ $reservation->email }}</li>
                        <li class="mb-2"><strong>Téléphone:</strong> {{ $reservation->telephone }}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Détails de l'événement</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Salle:</strong> {{ $reservation->salle->nom }}</li>
                        <li class="mb-2"><strong>Type d'événement:</strong> {{ ucfirst($reservation->type_evenement) }}</li>
                        <li class="mb-2"><strong>Date:</strong> {{ $reservation->date_evenement->format('d/m/Y') }}</li>
                        <li class="mb-2"><strong>Horaires:</strong> {{ $reservation->heure_debut }} - {{ $reservation->heure_fin }}</li>
                        <li class="mb-2"><strong>Nombre d'invités:</strong> {{ $reservation->nombre_invites }}</li>
                    </ul>
                </div>
            </div>

            @if($reservation->services && count($reservation->services) > 0)
            <div class="mt-4">
                <h4 class="mb-3">Services additionnels</h4>
                <ul class="list-unstyled">
                    @foreach($reservation->services as $service)
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            {{ ucfirst($service) }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if($reservation->commentaires)
            <div class="mt-4">
                <h4 class="mb-3">Commentaires</h4>
                <p class="mb-0">{{ $reservation->commentaires }}</p>
            </div>
            @endif

            <div class="mt-4">
                <h4 class="mb-3">Statut de la réservation</h4>
                <span class="badge bg-{{ $reservation->status === 'pending' ? 'warning' : ($reservation->status === 'confirmed' ? 'success' : 'danger') }} p-2">
                    {{ $reservation->status === 'pending' ? 'En attente' : ($reservation->status === 'confirmed' ? 'Confirmée' : 'Annulée') }}
                </span>
            </div>

            <div class="mt-4 d-flex gap-2">
                <a href="{{ route('reservations.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-2"></i>Retour à la liste
                </a>
                @if($reservation->status === 'pending')
                    <form method="POST" action="{{ route('reservations.cancel', $reservation->id) }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">
                            <i class="fas fa-times me-2"></i>Annuler la réservation
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
}

.list-unstyled li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #eee;
}

.list-unstyled li:last-child {
    border-bottom: none;
}

.badge {
    font-size: 1rem;
}
</style>
@endsection
