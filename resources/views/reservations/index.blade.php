@extends('layouts.client')

@section('title', 'Mes Réservations')

@section('content')
<div class="container">
    <div class="reservation-header">
        <h1>Mes Réservations</h1>
        <a href="{{ route('reservations.create') }}" class="btn-new">
            <i class="fas fa-plus"></i> Nouvelle Réservation
        </a>
    </div>

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
        <div class="empty-message">
            <p>Vous n'avez pas encore de réservations.</p>
            <a href="{{ route('reservations.create') }}" class="btn-new">Réserver une salle</a>
        </div>
    @else
        <div class="reservations-list">
            @foreach($reservations as $reservation)
                <div class="reservation-item">
                    <div class="reservation-main">
                        <div class="reservation-info">
                            <h3>{{ $reservation->salle->nom }}</h3>
                            <div class="details">
                                <p><i class="fas fa-calendar"></i> {{ $reservation->date->format('d/m/Y') }}</p>
                                <p><i class="fas fa-clock"></i> {{ $reservation->heure_debut->format('H:i') }} - {{ $reservation->heure_fin->format('H:i') }}</p>
                                <p><i class="fas fa-map-marker-alt"></i> {{ $reservation->salle->ville }}</p>
                                <p><i class="fas fa-money-bill"></i> {{ number_format($reservation->prix_total, 2, ',', ' ') }} MAD</p>
                            </div>
                        </div>
                        <div class="reservation-status">
                            <span class="status {{ $reservation->statut }}">{{ ucfirst($reservation->statut) }}</span>
                        </div>
                    </div>
                    <div class="reservation-actions">
                        <a href="{{ route('reservations.show', $reservation) }}" class="btn-view">
                            <i class="fas fa-eye"></i> Voir détails
                        </a>
                        @if($reservation->isModifiable())
                            <a href="{{ route('reservations.edit', $reservation) }}" class="btn-edit">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                        @endif
                        @if($reservation->isCancellable())
                            <button onclick="confirmCancel('{{ route('reservations.cancel', $reservation) }}')" class="btn-cancel">
                                <i class="fas fa-times"></i> Annuler
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
.container {
    max-width: 1000px;
    margin: 20px auto;
    padding: 0 15px;
}

.reservation-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.reservation-header h1 {
    font-size: 24px;
    color: #333;
}

.btn-new {
    background: #c8b53e;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-new:hover {
    background: #b3a136;
}

.empty-message {
    text-align: center;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 5px;
}

.reservations-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.reservation-item {
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
}

.reservation-main {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
}

.reservation-info h3 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

.details {
    display: grid;
    gap: 8px;
}

.details p {
    color: #666;
    display: flex;
    align-items: center;
    gap: 8px;
}

.details i {
    color: #c8b53e;
    width: 20px;
}

.status {
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 14px;
}

.status.confirmee {
    background: #d4edda;
    color: #155724;
}

.status.en_attente {
    background: #fff3cd;
    color: #856404;
}

.status.annulee {
    background: #f8d7da;
    color: #721c24;
}

.reservation-actions {
    display: flex;
    gap: 10px;
    border-top: 1px solid #eee;
    padding-top: 15px;
}

.btn-view, .btn-edit, .btn-cancel {
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    border: none;
    cursor: pointer;
}

.btn-view {
    background: #007bff;
    color: white;
}

.btn-edit {
    background: #ffc107;
    color: #000;
}

.btn-cancel {
    background: #dc3545;
    color: white;
}

.btn-view:hover, .btn-edit:hover, .btn-cancel:hover {
    opacity: 0.9;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

@media (max-width: 768px) {
    .reservation-main {
        flex-direction: column;
        gap: 15px;
    }

    .reservation-actions {
        flex-wrap: wrap;
    }

    .btn-view, .btn-edit, .btn-cancel {
        flex: 1;
        justify-content: center;
    }
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
