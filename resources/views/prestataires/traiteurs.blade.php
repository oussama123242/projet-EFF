@extends('layouts.client')

@section('title', 'Nos Traiteurs')

@section('content')
<div class="traiteurs-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436;text-align: center;">Nos Traiteurs</h1>
        <p class="lead" style="color: #2d3436;text-align: center;">Découvrez nos traiteurs professionnels pour vos événements</p>
    </div>

    <!-- Filtres -->
    <div class="filters-section mb-5" style="text-align: center;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="GET" class="row g-3">
                            <div class="col-md-4">
                                <select name="style" class="form-select">
                                    <option value="">Style de cuisine</option>
                                    <option value="marocaine" {{ request('style') == 'marocaine' ? 'selected' : '' }}>Marocaine</option>
                                    <option value="internationale" {{ request('style') == 'internationale' ? 'selected' : '' }}>Internationale</option>
                                    <option value="fusion" {{ request('style') == 'fusion' ? 'selected' : '' }}>Fusion</option>
                                    <option value="traditionnelle" {{ request('style') == 'traditionnelle' ? 'selected' : '' }}>Traditionnelle</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="budget" class="form-select">
                                    <option value="">Budget par personne</option>
                                    <option value="economique" {{ request('budget') == 'economique' ? 'selected' : '' }}>100-150 MAD</option>
                                    <option value="standard" {{ request('budget') == 'standard' ? 'selected' : '' }}>150-200 MAD</option>
                                    <option value="premium" {{ request('budget') == 'premium' ? 'selected' : '' }}>200-250 MAD</option>
                                    <option value="luxe" {{ request('budget') == 'luxe' ? 'selected' : '' }}>250+ MAD</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-search me-2"></i>Rechercher
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des Traiteurs -->
    <div class="traiteurs-grid">
        @forelse($traiteurs as $traiteur)
        <div class="traiteur-card">
            <div class="traiteur-image">
                <img src="{{ asset('images/traiteurs/' . ($traiteur['images_gallery'][0] ?? 'default-traiteur.jpg')) }}" 
                     alt="{{ $traiteur['nom'] }}"
                     onerror="this.src='{{ asset('images/default-traiteur.jpg') }}'">
                <div class="traiteur-badge">{{ $traiteur['badge'] }}</div>
            </div>
            <div class="traiteur-details">
                <h3>{{ $traiteur['nom'] }}</h3>
                <p class="specialite">{{ $traiteur['description'] }}</p>
                <div class="rating mb-3">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= floor($traiteur['rating']))
                            <i class="fas fa-star"></i>
                        @elseif($i - 0.5 <= $traiteur['rating'])
                            <i class="fas fa-star-half-alt"></i>
                        @else
                            <i class="far fa-star"></i>
                        @endif
                    @endfor
                    <span class="rating-count">({{ $traiteur['nombre_avis'] }} avis)</span>
                </div>
                <div class="gallery-preview mb-3">
                    @if(isset($traiteur['images_gallery']) && count($traiteur['images_gallery']) > 0)
                        @foreach(array_slice($traiteur['images_gallery'], 0, 4) as $image)
                            <div class="gallery-item">
                                <img src="{{ asset('images/traiteurs/' . $image) }}" 
                                     alt="Photo {{ $loop->iteration }}"
                                     onerror="this.src='{{ asset('images/default-traiteur.jpg') }}'">
                            </div>
                        @endforeach
                    @else
                        @for($i = 0; $i < 4; $i++)
                            <div class="gallery-item">
                                <img src="{{ asset('images/default-traiteur.jpg') }}" alt="Image par défaut">
                            </div>
                        @endfor
                    @endif
                </div>
                <ul class="services-list">
                    @foreach($traiteur['services'] as $service)
                    <li><i class="fas fa-check me-2"></i>{{ $service }}</li>
                    @endforeach
                </ul>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de {{ number_format($traiteur['prix_base'], 0, ',', ' ') }} MAD par personne</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#galleryModal{{ $loop->index }}">
                        <i class="fas fa-images me-2"></i>Voir la galerie
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#devisModal{{ $loop->index }}">
                        <i class="fas fa-file-invoice me-2"></i>Demander un devis
                    </button>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="lead">Aucun traiteur ne correspond à vos critères de recherche.</p>
        </div>
        @endforelse
    </div>
</div>

<style>
.traiteurs-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/traiteurs/hero-bg.jpg") }}') center/cover;
    padding: 4rem 0;
    border-radius: 1rem;
    margin-bottom: 3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.traiteurs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 2.5rem;
    margin-top: 2rem;
    justify-content: center;
}

.traiteur-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.traiteur-card:hover {
    transform: translateY(-5px);
}

.traiteur-image {
    position: relative;
    height: 250px;
    background-color: #f8f9fa;
}

.traiteur-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color: #f8f9fa;
}

.traiteur-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(200, 181, 62, 0.9);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-weight: 600;
    z-index: 1;
}

.traiteur-details {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.traiteur-details h3 {
    margin-bottom: 0.5rem;
    color: #2d3436;
    font-size: 1.4rem;
}

.specialite {
    color: #636e72;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

.gallery-preview {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0.5rem;
    margin: 1rem 0;
}

.gallery-item {
    aspect-ratio: 1;
    border-radius: 0.5rem;
    overflow: hidden;
    background-color: #f8f9fa;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    background-color: #f8f9fa;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.services-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
    flex-grow: 1;
}

.services-list li {
    margin-bottom: 0.5rem;
    color: #2d3436;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
}

.services-list li i {
    color: #c8b53e;
    margin-right: 0.5rem;
}

.rating {
    color: #c8b53e;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.rating-count {
    color: #636e72;
    font-size: 0.9rem;
    margin-left: 0.5rem;
}

.price-range {
    color: #2d3436;
    font-weight: 500;
    margin-top: auto;
}

.btn-primary {
    background-color: #c8b53e;
    border: none;
    padding: 0.75rem;
}

.btn-primary:hover {
    background-color: #b3a136;
}

.btn-outline-primary {
    border-color: #c8b53e;
    color: #c8b53e;
    padding: 0.75rem;
}

.btn-outline-primary:hover {
    background-color: #c8b53e;
    color: white;
}

.d-grid {
    margin-top: auto;
}

@media (max-width: 1200px) {
    .traiteurs-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .traiteurs-container {
        padding: 1rem;
    }

    .hero-section {
        padding: 2rem 1rem;
    }

    .traiteurs-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .gallery-preview {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
@endsection 