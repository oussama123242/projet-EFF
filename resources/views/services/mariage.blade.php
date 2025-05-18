@extends('layouts.client')

@section('title', 'Salles de Mariage')

@section('content')
<div class="wedding-halls-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
<h1 class="display-4 fw-bold" style="text-align: center;">Salles de Mariage Disponibles</h1>

<p class="lead fw-normal" style="color: black; text-align: center;">
    Trouvez la salle parfaite pour votre jour spécial
</p>


    </div>

    <!-- Search Form -->
    <div class="search-section mb-5">
        <form method="GET" class="search-form">
            <div class="form-group">
                <select name="ville" class="form-select custom-select" required>
                    <option value="">Sélectionnez votre ville</option>
                    <option value="Casablanca" {{ request('ville') == 'Casablanca' ? 'selected' : '' }}>Casablanca</option>
                    <option value="Rabat" {{ request('ville') == 'Rabat' ? 'selected' : '' }}>Rabat</option>
                    <option value="Marrakech" {{ request('ville') == 'Marrakech' ? 'selected' : '' }}>Marrakech</option>
                    <option value="Tanger" {{ request('ville') == 'Tanger' ? 'selected' : '' }}>Tanger</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary search-btn" style="background-color: #c8b53e;">
                <i class="fas fa-search me-2"></i>Rechercher
            </button>
        </form>
    </div>

    <!-- Results Section -->
    @if(request('ville'))
        <div class="results-section">
            <h2 class="section-title text-center mb-4 text-align: center;">Salles disponibles à {{ request('ville') }}</h2>

            <div class="venues-grid">
                @if(request('ville') == 'Casablanca')
                    <!-- Salles à Casablanca -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/casa-palace.jpg') }}"
                                 alt="Le Palace Royal"
                                 class="main-image">
                            <div class="venue-badge">Premium</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Le Palace Royal - Ain Diab</h3>
                            <p class="venue-description">Salle de luxe avec vue sur l'océan, parfaite pour les mariages prestigieux.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>600 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>45 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>24h/24</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>200 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-utensils"></i> Traiteur</li>
                                    <li><i class="fas fa-music"></i> Sonorisation</li>
                                    <li><i class="fas fa-broom"></i> Nettoyage</li>
                                    <li><i class="fas fa-shield-alt"></i> Sécurité 24/7</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                            <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                                   <i class="fas fa-calendar-plus me-2" ></i>Réserver

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/casa-jardins.jpg') }}"
                                 alt="Villa Les Jardins"
                                 class="main-image">
                            <div class="venue-badge">Extérieur</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Villa Les Jardins - Californie</h3>
                            <p class="venue-description">Magnifique villa avec jardins pour des mariages en plein air.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>400 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>35 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 4h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>100 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-umbrella-beach"></i> Espace piscine</li>
                                    <li><i class="fas fa-music"></i> DJ inclus</li>
                                    <li><i class="fas fa-broom"></i> Nettoyage</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                               <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                               <i class="fas fa-calendar-plus me-2" ></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/casa-elegance.jpg') }}"
                                 alt="L'Élégance"
                                 class="main-image">
                            <div class="venue-badge">Moderne</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">L'Élégance - Anfa</h3>
                            <p class="venue-description">Espace moderne et raffiné au cœur de Casablanca.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>300 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>28 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>19h - 3h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>80 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-lightbulb"></i> Éclairage LED</li>
                                    <li><i class="fas fa-music"></i> Système son Bose</li>
                                    <li><i class="fas fa-wind"></i> Climatisation</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                        <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                                    <i class="fas fa-calendar-plus me-2" ></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                @elseif(request('ville') == 'Marrakech')
                    <!-- Salles à Marrakech -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/marrakech-palais.jpg') }}"
                                 alt="Palais Oriental"
                                 class="main-image">
                            <div class="venue-badge">Luxe</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Palais Oriental - Route de l'Ourika</h3>
                            <p class="venue-description">Authentique palais marocain avec une architecture traditionnelle.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>800 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>55 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>24h/24</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>300 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-star"></i> Service 5 étoiles</li>
                                    <li><i class="fas fa-utensils"></i> Traiteur royal</li>
                                    <li><i class="fas fa-horse"></i> Animation traditionnelle</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                             <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                                <i class="fas fa-calendar-plus me-2" ></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/marrakech-atlas.jpg') }}"
                                 alt="Les Jardins de l'Atlas"
                                 class="main-image">
                            <div class="venue-badge">Vue Montagne</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Les Jardins de l'Atlas - Palmeraie</h3>
                            <p class="venue-description">Domaine avec vue panoramique sur l'Atlas et grands jardins.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>500 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>40 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>16h - 5h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>150 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-swimming-pool"></i> Piscine</li>
                                    <li><i class="fas fa-camera"></i> Espace photos</li>
                                    <li><i class="fas fa-music"></i> Sonorisation</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                             <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                                  <i class="fas fa-calendar-plus me-2"></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/mariage/marrakech-medina.jpg') }}"
                                 alt="Riad Al Medina"
                                 class="main-image">
                            <div class="venue-badge">Traditionnel</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Riad Al Medina - Médina</h3>
                            <p class="venue-description">Authentique riad rénové au cœur de la médina.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>200 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>25 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 2h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>Parking à proximité</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-drum"></i> Musique traditionnelle</li>
                                    <li><i class="fas fa-coffee"></i> Service thé traditionnel</li>
                                    <li><i class="fas fa-concierge-bell"></i> Service personnalisé</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                               <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                                  <i class="fas fa-calendar-plus me-2"></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                @elseif(request('ville') == 'Rabat')
                    <!-- Salles à Rabat -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="https://images.unsplash.com/photo-1513278974582-3e1b4a4fa21e?ixlib=rb-4.0.3"
                                 alt="Le Château Royal"
                                 class="main-image">
                            <div class="venue-badge">Historique</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Le Château Royal - Hay Riad</h3>
                            <p class="venue-description">Salle prestigieuse dans un cadre historique unique.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>450 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>38 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 3h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>120 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-crown"></i> Décoration royale</li>
                                    <li><i class="fas fa-utensils"></i> Service traiteur</li>
                                    <li><i class="fas fa-music"></i> Orchestre</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                         <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>
                           <i class="fas fa-calendar-plus me-2" "></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>

                @elseif(request('ville') == 'Tanger')
                    <!-- Salles à Tanger -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3"
                                 alt="Villa Méditerranée"
                                 class="main-image">
                            <div class="venue-badge">Vue Mer</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Villa Méditerranée - Cap Spartel</h3>
                            <p class="venue-description">Magnifique villa avec vue panoramique sur le détroit.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>300 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>32 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>17h - 2h</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>80 places</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-water"></i> Terrasse vue mer</li>
                                    <li><i class="fas fa-camera"></i> Photographe</li>
                                    <li><i class="fas fa-music"></i> DJ professionnel</li>
                                </ul>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <button class="btn btn-outline-primary flex-grow-1">Voir les détails</button>
                        <a href="{{ route('reservations.create') }}"
   class="btn btn-primary flex-grow-1"
   style="color: black;">
   Réserver
</a>

                                   <i class="fas fa-calendar-plus me-2"></i>Réserver
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>

<style>
    .wedding-halls-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
   
    .hero-section {
        background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                    url('{{ asset("images/mariage/hero-bg.jpg") }}') center/cover;
        padding: 4rem 0;
        border-radius: 1rem;
        margin-bottom: 3rem;
    }

    .hero-section h1 {
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .search-section {
        background-color: #fff;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
    }

    .search-form {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .custom-select {
        min-width: 250px;
        padding: 0.8rem;
        border: 1px solid #e0e0e0;
        border-radius: 0.5rem;
        font-size: 1rem;
    }

    .search-btn {
        padding: 0.8rem 2rem;
        font-weight: 600;
        border-radius: 0.5rem;
        background: #3498db;
        border: none;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }

    .venues-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .venue-card {
        background: #fff;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .venue-card:hover {
        transform: translateY(-5px);
    }

    .venue-image {
        position: relative;
        height: 250px;
    }

    .main-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .venue-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: rgba(52, 152, 219, 0.9);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-weight: 600;
    }

    .venue-details {
        padding: 1.5rem;
    }

    .venue-title {
        font-size: 1.5rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .venue-description {
        color: #7f8c8d;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .venue-features {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #34495e;
    }

    .feature-item i {
        color: #3498db;
    }

    .venue-services {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }

    .venue-services h4 {
        font-size: 1rem;
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }

    .venue-services ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .venue-services li {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #7f8c8d;
        margin-bottom: 0.5rem;
    }

    .btn-details {
        width: 100%;
        padding: 0.8rem;
        border: 2px solid #3498db;
        color: #3498db;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-details:hover {
        background: #3498db;
        color: white;
    }

    @media (max-width: 768px) {
        .wedding-halls-container {
            padding: 1rem;
        }

        .hero-section {
            padding: 2rem 1rem;
        }

        .venues-grid {
            grid-template-columns: 1fr;
        }

        .venue-features {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection