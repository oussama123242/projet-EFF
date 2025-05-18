@extends('layouts.client')

@section('title', 'Nos Décorateurs')

@section('content')
<div class="decorateurs-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436;text-align: center;">Nos Décorateurs</h1>
        <p class="lead" style="color: #2d3436;text-align: center;">Des professionnels de la décoration pour sublimer votre événement</p>
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
                                    <option value="">Style de décoration</option>
                                    <option value="moderne">Moderne</option>
                                    <option value="traditionnel">Traditionnel</option>
                                    <option value="boheme">Bohème</option>
                                    <option value="luxe">Luxe</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="budget" class="form-select">
                                    <option value="">Budget</option>
                                    <option value="economique">5000-10000 MAD</option>
                                    <option value="standard">10000-20000 MAD</option>
                                    <option value="premium">20000-35000 MAD</option>
                                    <option value="luxe">35000+ MAD</option>
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

    <!-- Liste des Décorateurs -->
    <div class="decorateurs-grid">
        <!-- Décorateur 1 -->
        <div class="decorateur-card">
            <div class="decorateur-image">
                <img src="{{ asset('images/decorateurs/elegance-events.jpg') }}" alt="Élégance Events">
                <div class="decorateur-badge">Premium</div>
            </div>
            <div class="decorateur-details">
                <h3>Élégance Events</h3>
                <p class="specialite">Décoration Moderne & Luxueuse</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(85 avis)</span>
                </div>
                <ul class="services-list">
                    <li><i class="fas fa-check me-2"></i>Décoration complète</li>
                    <li><i class="fas fa-check me-2"></i>Éclairage ambiant</li>
                    <li><i class="fas fa-check me-2"></i>Arrangements floraux</li>
                    <li><i class="fas fa-check me-2"></i>Mobilier design</li>
                </ul>
                <div class="portfolio-preview">
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/elegance1.jpg') }}" alt="Réalisation 1">
                    </div>
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/elegance2.jpg') }}" alt="Réalisation 2">
                    </div>
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/elegance3.jpg') }}" alt="Réalisation 3">
                    </div>
                </div>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 25000 MAD</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <i class="fas fa-images me-2"></i>Voir le portfolio
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#devisModal1">
                        <i class="fas fa-file-invoice me-2"></i>Demander un devis
                    </button>
                </div>
            </div>
        </div>

        <!-- Décorateur 2 -->
        <div class="decorateur-card">
            <div class="decorateur-image">
                <img src="{{ asset('images/decorateurs/artisan-deco.jpg') }}" alt="Artisan Déco">
                <div class="decorateur-badge">Traditionnel</div>
            </div>
            <div class="decorateur-details">
                <h3>Artisan Déco</h3>
                <p class="specialite">Décoration Traditionnelle Marocaine</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="rating-count">(73 avis)</span>
                </div>
                <ul class="services-list">
                    <li><i class="fas fa-check me-2"></i>Artisanat marocain</li>
                    <li><i class="fas fa-check me-2"></i>Tentes traditionnelles</li>
                    <li><i class="fas fa-check me-2"></i>Salons marocains</li>
                    <li><i class="fas fa-check me-2"></i>Lanternes artisanales</li>
                </ul>
                <div class="portfolio-preview">
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/artisan1.jpg') }}" alt="Réalisation 1">
                    </div>
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/artisan2.jpg') }}" alt="Réalisation 2">
                    </div>
                    <div class="small-image">
                        <img src="{{ asset('images/decorateurs/artisan3.jpg') }}" alt="Réalisation 3">
                    </div>
                </div>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 15000 MAD</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <i class="fas fa-images me-2"></i>Voir le portfolio
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
.decorateurs-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/decorateurs/hero-bg.jpg") }}') center/cover;
    padding: 4rem 0;
    border-radius: 1rem;
    margin-bottom: 3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.decorateurs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.decorateur-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.decorateur-card:hover {
    transform: translateY(-5px);
}

.decorateur-image {
    position: relative;
    height: 250px;
}

.decorateur-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.decorateur-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(200, 181, 62, 0.9);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-weight: 600;
}

.decorateur-details {
    padding: 1.5rem;
}

.portfolio-preview {
    display: flex;
    gap: 0.5rem;
    margin: 1rem 0;
}

.small-image {
    flex: 1;
    height: 80px;
    border-radius: 0.5rem;
    overflow: hidden;
}

.small-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.small-image:hover img {
    transform: scale(1.1);
}

.services-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.services-list li {
    margin-bottom: 0.5rem;
    color: #2d3436;
    font-size: 0.9rem;
}

.services-list li i {
    color: #c8b53e;
}

.rating {
    color: #c8b53e;
}

.rating-count {
    color: #636e72;
    font-size: 0.9rem;
    margin-left: 0.5rem;
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
    .decorateurs-container {
        padding: 1rem;
    }

    .hero-section {
        padding: 2rem 1rem;
    }

    .decorateurs-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection 