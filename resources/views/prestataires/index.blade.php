@extends('layouts.client')

@section('title', 'Nos Prestataires')

@section('content')
<div class="prestataires-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436;">Nos Prestataires</h1>
        <p class="lead" style="color: #2d3436;">Découvrez nos prestataires professionnels pour votre événement</p>
    </div>

    <!-- Catégories de Prestataires -->
    <div class="categories-grid">
        <!-- Traiteurs -->
        <div class="category-card">
            <a href="{{ route('prestataires.traiteurs') }}" class="category-link">
                <div class="category-image">
                    <img src="{{ asset('images/categories/traiteurs.jpg') }}" alt="Traiteurs">
                    <div class="category-overlay">
                        <h3>Traiteurs</h3>
                        <p>Découvrez nos services de restauration</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Décorateurs -->
        <div class="category-card">
            <a href="{{ route('prestataires.decorateurs') }}" class="category-link">
                <div class="category-image">
                    <img src="{{ asset('images/categories/decorateurs.jpg') }}" alt="Décorateurs">
                    <div class="category-overlay">
                        <h3>Décorateurs</h3>
                        <p>Sublimez votre événement</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Photographes -->
        <div class="category-card">
            <a href="{{ route('prestataires.photographes') }}" class="category-link">
                <div class="category-image">
                    <img src="{{ asset('images/categories/photographes.jpg') }}" alt="Photographes">
                    <div class="category-overlay">
                        <h3>Photographes</h3>
                        <p>Immortalisez vos moments</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Animateurs -->
        <div class="category-card">
            <a href="{{ route('prestataires.animateurs') }}" class="category-link">
                <div class="category-image">
                    <img src="{{ asset('images/categories/animateurs.jpg') }}" alt="Animateurs">
                    <div class="category-overlay">
                        <h3>Animateurs</h3>
                        <p>Donnez vie à votre événement</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Section Avantages -->
    <div class="advantages-section mt-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="advantage-card">
                    <i class="fas fa-check-circle"></i>
                    <h4>Prestataires Vérifiés</h4>
                    <p>Tous nos prestataires sont soigneusement sélectionnés et vérifiés</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <i class="fas fa-star"></i>
                    <h4>Service Premium</h4>
                    <p>Une qualité de service garantie pour votre satisfaction</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h4>Prix Transparents</h4>
                    <p>Des tarifs clairs et adaptés à votre budget</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.prestataires-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/hero-bg.jpg") }}') center/cover;
    padding: 4rem 0;
    border-radius: 1rem;
    margin-bottom: 3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.category-card {
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.category-card:hover {
    transform: translateY(-5px);
}

.category-link {
    text-decoration: none;
    color: inherit;
}

.category-image {
    position: relative;
    height: 300px;
}

.category-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.category-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2rem;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    text-align: center;
}

.category-overlay h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.category-overlay p {
    font-size: 1rem;
    margin: 0;
    opacity: 0.9;
}

.advantages-section {
    text-align: center;
    padding: 3rem 0;
}

.advantage-card {
    padding: 2rem;
    background: white;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.advantage-card i {
    font-size: 2.5rem;
    color: #c8b53e;
    margin-bottom: 1rem;
}

.advantage-card h4 {
    color: #2d3436;
    margin-bottom: 1rem;
}

.advantage-card p {
    color: #636e72;
    margin: 0;
}

@media (max-width: 768px) {
    .prestataires-container {
        padding: 1rem;
    }

    .hero-section {
        padding: 2rem 1rem;
    }

    .categories-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
