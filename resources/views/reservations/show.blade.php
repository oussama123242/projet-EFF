@extends('layouts.client')

@section('title', 'Détails de la réservation')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Détails de la réservation</h2>
                    <span class="badge {{ $reservation->statut === 'confirmee' ? 'bg-success' : ($reservation->statut === 'en_attente' ? 'bg-warning' : ($reservation->statut === 'annulee' ? 'bg-danger' : 'bg-secondary')) }}">
                        {{ ucfirst($reservation->statut) }}
                    </span>
                </div>
                <div class="card-body">
                    <!-- Informations de la salle -->
                    <section class="mb-4">
                        <h3 class="section-title">Informations de la salle</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong><i class="fas fa-building me-2"></i>Salle:</strong> {{ $reservation->salle->nom }}</p>
                                <p><strong><i class="fas fa-map-marker-alt me-2"></i>Adresse:</strong> {{ $reservation->salle->adresse }}</p>
                                <p><strong><i class="fas fa-city me-2"></i>Ville:</strong> {{ $reservation->salle->ville }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong><i class="fas fa-users me-2"></i>Capacité:</strong> {{ $reservation->salle->capacite }} personnes</p>
                            </div>
                        </div>
                    </section>

                    <!-- Détails de la réservation -->
                    <section class="mb-4">
                        <h3 class="section-title">Détails de la réservation</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong><i class="fas fa-calendar me-2"></i>Date:</strong> {{ $reservation->date->format('d/m/Y') }}</p>
                                <p><strong><i class="fas fa-clock me-2"></i>Horaires:</strong> {{ $reservation->heure_debut->format('H:i') }} - {{ $reservation->heure_fin->format('H:i') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong><i class="fas fa-money-bill-wave me-2"></i>Prix total:</strong> {{ number_format($reservation->prix_total, 2, ',', ' ') }} MAD</p>
                            </div>
                        </div>
                    </section>

                    <!-- Services supplémentaires -->
                    @if($reservation->services_supplementaires)
                    <section class="mb-4">
                        <h3 class="section-title">Services supplémentaires</h3>
                        <ul class="list-group">
                            @foreach($reservation->services_supplementaires as $service)
                            <li class="list-group-item">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                {{ $service }}
                            </li>
                            @endforeach
                        </ul>
                    </section>
                    @endif

                    <!-- Notes -->
                    @if($reservation->notes)
                    <section class="mb-4">
                        <h3 class="section-title">Notes</h3>
                        <div class="card bg-light">
                            <div class="card-body">
                                {{ $reservation->notes }}
                            </div>
                        </div>
                    </section>
                    @endif

                    <!-- Actions -->
                    <section class="mt-4">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i>Retour
                            </a>
                            
                            <div>
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
                                            data-bs-target="#reviewModal">
                                        <i class="fas fa-star me-2"></i>Avis
                                    </button>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Avis -->
@if($reservation->canLeaveReview())
<div class="modal fade" id="reviewModal" tabindex="-1">
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
                                <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}">
                                <label for="star{{ $i }}">☆</label>
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

<style>
.section-title {
    color: #2d3436;
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #c8b53e;
}

.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #f8f9fa !important;
    padding: 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.badge {
    font-size: 1rem;
    padding: 0.5rem 1rem;
    border-radius: 30px;
}

.list-group-item {
    border-left: none;
    border-right: none;
    padding: 1rem;
}

.list-group-item:first-child {
    border-top: none;
}

.list-group-item:last-child {
    border-bottom: none;
}

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
