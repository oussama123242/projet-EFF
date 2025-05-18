@extends('layouts.client')

@section('title', 'Nos Traiteurs')

@section('content')
<div class="traiteurs-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436;text-align: center;">Nos Traiteurs</h1>
        <p class="lead" style="color: #2d3436;text-align: center;">Une sélection des meilleurs traiteurs pour votre événement</p>
    </div>

    <!-- Filtres -->
    <div class="filters-section mb-5" style="text-align: center;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="GET" class="row g-3">
                            <div class="col-md-4">
                                <select name="cuisine" class="form-select">
                                    <option value="">Type de cuisine</option>
                                    <option value="marocaine">Cuisine Marocaine</option>
                                    <option value="internationale">Cuisine Internationale</option>
                                    <option value="mediterraneenne">Cuisine Méditerranéenne</option>
                                    <option value="fusion">Cuisine Fusion</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="budget" class="form-select">
                                    <option value="">Budget par personne</option>
                                    <option value="economique">150-250 MAD</option>
                                    <option value="standard">250-400 MAD</option>
                                    <option value="premium">400-600 MAD</option>
                                    <option value="luxe">600+ MAD</option>
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
        <!-- Traiteur 1 -->
        <div class="traiteur-card">
            <div class="traiteur-image">
                <img src="{{ asset('images/traiteurs/royal-service.jpg') }}" alt="Royal Service Traiteur">
                <div class="traiteur-badge">Premium</div>
            </div>
            <div class="traiteur-details">
                <h3>Royal Service Traiteur</h3>
                <p class="specialite">Cuisine Marocaine & Internationale</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(128 avis)</span>
                </div>
                <ul class="specialites-list">
                    <li><i class="fas fa-check me-2"></i>Spécialités marocaines</li>
                    <li><i class="fas fa-check me-2"></i>Cuisine internationale</li>
                    <li><i class="fas fa-check me-2"></i>Service personnalisé</li>
                    <li><i class="fas fa-check me-2"></i>Équipement professionnel</li>
                </ul>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 350 MAD/personne</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#menuModal1">
                        <i class="fas fa-book-open me-2"></i>Voir le menu
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#devisModal1">
                        <i class="fas fa-file-invoice me-2"></i>Demander un devis
                    </button>
                </div>
            </div>
        </div>

        <!-- Traiteur 2 -->
        <div class="traiteur-card">
            <div class="traiteur-image">
                <img src="{{ asset('images/traiteurs/tradition-moderne.jpg') }}" alt="Tradition Moderne">
                <div class="traiteur-badge">Populaire</div>
            </div>
            <div class="traiteur-details">
                <h3>Tradition Moderne</h3>
                <p class="specialite">Fusion Maroco-Méditerranéenne</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span class="rating-count">(96 avis)</span>
                </div>
                <ul class="specialites-list">
                    <li><i class="fas fa-check me-2"></i>Cuisine fusion innovante</li>
                    <li><i class="fas fa-check me-2"></i>Show cooking</li>
                    <li><i class="fas fa-check me-2"></i>Buffets à thème</li>
                    <li><i class="fas fa-check me-2"></i>Pâtisserie fine</li>
                </ul>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 280 MAD/personne</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#menuModal2">
                        <i class="fas fa-book-open me-2"></i>Voir le menu
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#devisModal2">
                        <i class="fas fa-file-invoice me-2"></i>Demander un devis
                    </button>
                </div>
            </div>
        </div>
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
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.traiteur-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.traiteur-card:hover {
    transform: translateY(-5px);
}

.traiteur-image {
    position: relative;
    height: 250px;
}

.traiteur-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
}

.traiteur-details {
    padding: 1.5rem;
}

.traiteur-details h3 {
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
    color: #2d3436;
}

.specialite {
    color: #636e72;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.rating {
    color: #c8b53e;
}

.rating-count {
    color: #636e72;
    font-size: 0.9rem;
    margin-left: 0.5rem;
}

.specialites-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.specialites-list li {
    margin-bottom: 0.5rem;
    color: #2d3436;
    font-size: 0.9rem;
}

.specialites-list li i {
    color: #c8b53e;
}

.price-range {
    color: #2d3436;
    font-weight: 500;
}

.btn-primary {
    background-color: #c8b53e;
    border: none;
}

.btn-primary:hover {
    background-color: #b3a136;
}

.btn-outline-primary {
    border-color: #c8b53e;
    color: #c8b53e;
}

.btn-outline-primary:hover {
    background-color: #c8b53e;
    color: white;
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
    }
}
</style>
@endsection 