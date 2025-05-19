@extends('layouts.client')

@section('title', 'Services - ' . ucfirst($categorie))

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">
                @switch($categorie)
                    @case('traiteur')
                        <i class="fas fa-utensils"></i> Services de traiteur
                        @break
                    @case('decoration')
                        <i class="fas fa-paint-brush"></i> Services de décoration
                        @break
                    @case('photographe')
                        <i class="fas fa-camera"></i> Services de photographie
                        @break
                    @case('animation')
                        <i class="fas fa-music"></i> Services d'animation
                        @break
                    @default
                        <i class="fas fa-concierge-bell"></i> Services
                @endswitch
            </h1>
            
            @if($salles->isEmpty())
                <div class="alert alert-info">
                    <p>Aucune salle proposant ce service n'est disponible actuellement.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3">
                        <i class="fas fa-home"></i> Retour à l'accueil
                    </a>
                </div>
            @else
                <div class="row g-4">
                    @foreach($salles as $salle)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                @if($salle->image)
                                    <img src="{{ asset('storage/' . $salle->image) }}" class="card-img-top" alt="{{ $salle->nom }}">
                                @else
                                    <img src="{{ asset('images/default-salle.jpg') }}" class="card-img-top" alt="Image par défaut">
                                @endif
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $salle->nom }}</h5>
                                    <p class="card-text text-muted">
                                        <i class="fas fa-map-marker-alt"></i> {{ $salle->ville }}
                                    </p>
                                    <p class="card-text">
                                        <i class="fas fa-users"></i> Capacité: {{ $salle->capacite }} personnes
                                    </p>
                                    
                                    <div class="services-inclus mb-3">
                                        <h6 class="text-muted mb-2">Services inclus :</h6>
                                        @if($salle->has_traiteur)
                                            <span class="badge bg-success"><i class="fas fa-utensils"></i> Traiteur</span>
                                        @endif
                                        @if($salle->has_decoration)
                                            <span class="badge bg-info"><i class="fas fa-paint-brush"></i> Décoration</span>
                                        @endif
                                        @if($salle->has_photographe)
                                            <span class="badge bg-warning"><i class="fas fa-camera"></i> Photographe</span>
                                        @endif
                                        @if($salle->has_animation)
                                            <span class="badge bg-danger"><i class="fas fa-music"></i> Animation</span>
                                        @endif
                                    </div>
                                    
                                    <p class="card-text">
                                        <i class="fas fa-money-bill"></i> À partir de {{ number_format($salle->prix, 0, ',', ' ') }} MAD
                                    </p>
                                </div>
                                
                                <div class="card-footer bg-white border-top-0">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('reservations.create', ['salle_id' => $salle->id]) }}" class="btn btn-primary">
                                            <i class="fas fa-calendar-plus"></i> Réserver
                                        </a>
                                        <a href="{{ route('venues.show', $salle->id) }}" class="btn btn-outline-primary">
                                            <i class="fas fa-info-circle"></i> Plus de détails
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.services-inclus .badge {
    margin-right: 5px;
    margin-bottom: 5px;
}

.btn-primary {
    background-color: #c8b53e;
    border-color: #c8b53e;
}

.btn-primary:hover {
    background-color: #b3a136;
    border-color: #b3a136;
}

.btn-outline-primary {
    color: #c8b53e;
    border-color: #c8b53e;
}

.btn-outline-primary:hover {
    background-color: #c8b53e;
    border-color: #c8b53e;
    color: white;
}

h1 {
    color: #2c3e50;
}

h1 i {
    color: #c8b53e;
}
</style>
@endsection 