@extends('layouts.client')

@section('title', 'Mes réservations')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Mes réservations</h2>
            <a href="{{ route('reservations.create') }}" class="btn btn-light">
                <i class="fas fa-plus me-2"></i>Nouvelle réservation
            </a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
            @endif

            @if($reservations->isEmpty())
                <div class="text-center py-5">
                    <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                    <p class="lead mb-0">Aucune réservation trouvée.</p>
                    <p class="text-muted">Commencez par réserver une salle pour votre événement.</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Salle</th>
                                <th>Type d'événement</th>
                                <th>Date</th>
                                <th>Horaires</th>
                                <th>Invités</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->salle->nom }}</td>
                                    <td>{{ ucfirst($reservation->type_evenement) }}</td>
                                    <td>{{ $reservation->date_evenement->format('d/m/Y') }}</td>
                                    <td>{{ $reservation->heure_debut }} - {{ $reservation->heure_fin }}</td>
                                    <td>{{ $reservation->nombre_invites }}</td>
                                    <td>
                                        <span class="badge bg-{{ $reservation->status === 'pending' ? 'warning' : ($reservation->status === 'confirmed' ? 'success' : 'danger') }}">
                                            {{ $reservation->status === 'pending' ? 'En attente' : ($reservation->status === 'confirmed' ? 'Confirmée' : 'Annulée') }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye me-1"></i>Détails
                                            </a>
                                            @if($reservation->status === 'pending')
                                                <form method="POST" action="{{ route('reservations.cancel', $reservation->id) }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')">
                                                        <i class="fas fa-times me-1"></i>Annuler
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
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

.table {
    margin-bottom: 0;
}

.table th {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
}

.table td {
    vertical-align: middle;
}

.badge {
    padding: 0.5rem 0.8rem;
    font-weight: 500;
}

.btn-group .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}

.btn-group .btn + form {
    margin-left: 0.25rem;
}
</style>
@endsection
