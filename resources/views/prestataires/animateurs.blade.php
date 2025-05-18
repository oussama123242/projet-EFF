@extends('layouts.client')

@section('title', 'Nos Animateurs')

@section('content')
<div class="animateurs-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436 ;text-align: center;">Nos Animateurs</h1>
        <p class="lead" style="color: #2d3436;text-align: center;">Donnez vie à votre événement avec nos animateurs professionnels</p>
    </div>

    <!-- Filtres -->
    <div class="filters-section mb-5" style="text-align: center; ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form method="GET" class="row g-3">
                            <div class="col-md-4">
                                <select name="type" class="form-select">
                                    <option value="">Type d'animation</option>
                                    <option value="dj">DJ & Musique</option>
                                    <option value="spectacle">Spectacle</option>
                                    <option value="enfants">Animation enfants</option>
                                    <option value="traditionnel">Animation traditionnelle</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select name="budget" class="form-select">
                                    <option value="">Budget</option>
                                    <option value="economique">2000-4000 MAD</option>
                                    <option value="standard">4000-7000 MAD</option>
                                    <option value="premium">7000-10000 MAD</option>
                                    <option value="luxe">10000+ MAD</option>
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

    <!-- Liste des Animateurs -->
    <div class="animateurs-grid">
        <!-- Animateur 1 -->
        <div class="animateur-card">
            <div class="animateur-image">
                <img src="{{ asset('images/animateurs/dj-pro.jpg') }}" alt="DJ Pro Events">
                <div class="animateur-badge">Premium</div>
            </div>
            <div class="animateur-details">
                <h3>DJ Pro Events</h3>
                <p class="specialite">DJ & Animation Professionnelle</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(105 avis)</span>
                </div>
                <div class="equipment-list mb-3">
                    <span class="equipment-tag">Sonorisation pro</span>
                    <span class="equipment-tag">Éclairage LED</span>
                    <span class="equipment-tag">Machine à fumée</span>
                    <span class="equipment-tag">Karaoké</span>
                </div>
                <ul class="services-list">
                    <li><i class="fas fa-check me-2"></i>Tous styles de musique</li>
                    <li><i class="fas fa-check me-2"></i>Animation micro</li>
                    <li><i class="fas fa-check me-2"></i>Jeux et concours</li>
                    <li><i class="fas fa-check me-2"></i>Équipement haut de gamme</li>
                </ul>
                <div class="video-preview">
                    <video poster="{{ asset('images/animateurs/dj-preview.jpg') }}" class="w-100 rounded">
                        <source src="{{ asset('videos/dj-demo.mp4') }}" type="video/mp4">
                    </video>
                    <button class="play-btn">
                        <i class="fas fa-play"></i>
                    </button>
                </div>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 7000 MAD</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#demoModal1">
                        <i class="fas fa-play-circle me-2"></i>Voir la démo
                    </button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#devisModal1">
                        <i class="fas fa-file-invoice me-2"></i>Demander un devis
                    </button>
                </div>
            </div>
        </div>

        <!-- Animateur 2 -->
        <div class="animateur-card">
            <div class="animateur-image">
                <img src="{{ asset('images/animateurs/fun-kids.jpg') }}" alt="Fun Kids">
                <div class="animateur-badge">Spécial Enfants</div>
            </div>
            <div class="animateur-details">
                <h3>Fun Kids</h3>
                <p class="specialite">Animation Enfants & Spectacles</p>
                <div class="rating mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="rating-count">(87 avis)</span>
                </div>
                <div class="equipment-list mb-3">
                    <span class="equipment-tag">Maquillage</span>
                    <span class="equipment-tag">Jeux gonflables</span>
                    <span class="equipment-tag">Mascottes</span>
                    <span class="equipment-tag">Magie</span>
                </div>
                <ul class="services-list">
                    <li><i class="fas fa-check me-2"></i>Animations ludiques</li>
                    <li><i class="fas fa-check me-2"></i>Spectacles interactifs</li>
                    <li><i class="fas fa-check me-2"></i>Ateliers créatifs</li>
                    <li><i class="fas fa-check me-2"></i>Encadrement professionnel</li>
                </ul>
                <div class="video-preview">
                    <video poster="{{ asset('images/animateurs/kids-preview.jpg') }}" class="w-100 rounded">
                        <source src="{{ asset('videos/kids-demo.mp4') }}" type="video/mp4">
                    </video>
                    <button class="play-btn">
                        <i class="fas fa-play"></i>
                    </button>
                </div>
                <div class="price-range mb-3">
                    <i class="fas fa-tag me-2"></i>
                    <span>À partir de 4000 MAD</span>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#demoModal2">
                        <i class="fas fa-play-circle me-2"></i>Voir la démo
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
    
.animateurs-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/animateurs/hero-bg.jpg") }}') center/cover;
    padding: 4rem 0;
    border-radius: 1rem;
    margin-bottom: 3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.animateurs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.animateur-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.animateur-card:hover {
    transform: translateY(-5px);
}

.animateur-image {
    position: relative;
    height: 250px;
}

.animateur-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.animateur-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(200, 181, 62, 0.9);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-weight: 600;
}

.animateur-details {
    padding: 1.5rem;
}

.equipment-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.equipment-tag {
    background: #f5f6fa;
    color: #2d3436;
    padding: 0.25rem 0.75rem;
    border-radius: 1rem;
    font-size: 0.85rem;
}

.video-preview {
    position: relative;
    margin: 1rem 0;
    border-radius: 0.5rem;
    overflow: hidden;
}

.play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(200, 181, 62, 0.9);
    border: none;
    border-radius: 50%;
    color: white;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.play-btn:hover {
    background: rgba(200, 181, 62, 1);
    transform: translate(-50%, -50%) scale(1.1);
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
    .animateurs-container {
        padding: 1rem;
    }

    .hero-section {
        padding: 2rem 1rem;
    }

    .animateurs-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection 