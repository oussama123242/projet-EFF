@extends('layouts.client')

@section('title', 'Vos Réservations')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Vos Réservations</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($reservations->isEmpty())
        <div class="alert alert-info">
            Vous n'avez pas encore de réservations.
        </div>
    @else
        <div class="row">
            @foreach($reservations as $reservation)
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ $reservation->salle->nom }}</h5>
                            <span class="badge {{ $reservation->statut === 'confirmee' ? 'bg-success' : ($reservation->statut === 'en_attente' ? 'bg-warning' : ($reservation->statut === 'annulee' ? 'bg-danger' : 'bg-secondary')) }}">
                                {{ ucfirst($reservation->statut) }}
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                {{ $reservation->date->format('d/m/Y') }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-clock me-2"></i>
                                {{ $reservation->heure_debut->format('H:i') }} - {{ $reservation->heure_fin->format('H:i') }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-map-marker-alt me-2"></i>
                                {{ $reservation->salle->ville }} - {{ $reservation->salle->adresse }}
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-money-bill-wave me-2"></i>
                                {{ number_format($reservation->prix_total, 2, ',', ' ') }} MAD
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ route('reservations.show', $reservation) }}" class="btn btn-primary">
                                    <i class="fas fa-eye me-2"></i>Voir détails
                                </a>

                                @if($reservation->isModifiable())
                                    <a href="{{ route('reservations.edit', $reservation) }}" class="btn btn-warning">
                                        <i class="fas fa-edit me-2"></i>Modifier
                                    </a>
                                @endif

                                @if($reservation->isCancellable())
                                    <button type="button" class="btn btn-danger" 
                                            onclick="confirmCancel('{{ route('reservations.cancel', $reservation) }}')">
                                        <i class="fas fa-times me-2"></i>Annuler
                                    </button>
                                @endif

                                @if($reservation->canLeaveReview())
                                    <button type="button" class="btn btn-success" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#reviewModal{{ $reservation->id }}">
                                        <i class="fas fa-star me-2"></i>Avis
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @if($reservation->canLeaveReview())
                    <div class="modal fade" id="reviewModal{{ $reservation->id }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Donner votre avis</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('reservations.review', $reservation) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Note</label>
                                            <div class="rating">
                                                @for($i = 5; $i >= 1; $i--)
                                                    <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}{{ $reservation->id }}">
                                                    <label for="star{{ $i }}{{ $reservation->id }}">☆</label>
                                                @endfor
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Commentaire</label>
                                            <textarea class="form-control" name="comment" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>

<style>
.rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}

.rating input {
    display: none;
}

.rating label {
    font-size: 30px;
    color: #ddd;
    cursor: pointer;
    padding: 5px;
}

.rating label:hover,
.rating label:hover ~ label,
.rating input:checked ~ label {
    color: #c8b53e;
}

.card {
    transition: transform 0.2s;
    border: none;
    border-radius: 15px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.card:hover {
    transform: translateY(-5px);
}

.card-header {
    background-color: #f8f9fa;
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    padding: 1rem;
}

.badge {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
    border-radius: 30px;
}
</style>

@push('scripts')
<script>
function confirmCancel(url) {
    if (confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')) {
        window.location.href = url;
    }
}
</script>
@endpush

@endsection
