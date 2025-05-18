@extends('layouts.client')

@section('title', 'Salles pour Événements d\'Entreprise')

@section('content')
<div class="enterprise-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436; text-align: center;">Salles pour Événements d'Entreprise</h1>
        <p class="lead text-muted" style="color: #2d3436; text-align: center;">Découvrez nos espaces professionnels pour vos séminaires, conférences et événements corporate</p>
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
            <button type="submit" class="btn btn-primary search-btn">
                <i class="fas fa-search me-2" style="color: #e0e0e0;"></i>Rechercher
            </button>
        </form>
    </div>

    <!-- Results Section -->
    @if(request('ville'))
        <div class="results-section">
            <h2 class="section-title text-center mb-4" style="color:rgb(156, 85, 85); text-align: center;">Espaces professionnels à {{ request('ville') }}</h2>
            <div class="venues-grid">
                @if(request('ville') == 'Casablanca')
                    <!-- Salles à Casablanca -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/entreprise/casa-conference1.jpg') }}" alt="Centre de Conférence" class="main-image">
                            <div class="venue-badge">Conférence</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Twin Center Conference</h3>
                            <p class="venue-description">Centre de conférence moderne au cœur du quartier d'affaires.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>300 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>25 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
                                    <li><i class="fas fa-video"></i> Système visioconférence</li>
                                    <li><i class="fas fa-coffee"></i> Service traiteur</li>
                                    <li><i class="fas fa-parking"></i> Parking VIP</li>
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
                            <img src="{{ asset('images/entreprise/casa-marina.jpg') }}" alt="Marina Business" class="main-image">
                            <div class="venue-badge">Marina</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Marina Business Center</h3>
                            <p class="venue-description">Espace moderne avec vue sur la marina pour vos événements prestigieux.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>150 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>18 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-tv"></i> Écrans 4K</li>
                                    <li><i class="fas fa-microphone"></i> Sonorisation pro</li>
                                    <li><i class="fas fa-utensils"></i> Restaurant sur place</li>
                                    <li><i class="fas fa-concierge-bell"></i> Conciergerie</li>
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

                @if(request('ville') == 'Marrakech')
                    <!-- Salles à Marrakech -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/entreprise/marrakech-palmeraie.jpg') }}" alt="Palmeraie Business" class="main-image">
                            <div class="venue-badge">Luxe</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Palmeraie Business Resort</h3>
                            <p class="venue-description">Centre de conférences luxueux dans la Palmeraie de Marrakech.</p>
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
                                    <span>24h/24</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-hotel"></i> Hébergement 5★</li>
                                    <li><i class="fas fa-golf-ball"></i> Accès golf</li>
                                    <li><i class="fas fa-spa"></i> Spa & détente</li>
                                    <li><i class="fas fa-shuttle-van"></i> Navette aéroport</li>
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
                            <img src="{{ asset('images/entreprise/marrakech-medina.jpg') }}" alt="Medina Meeting" class="main-image">
                            <div class="venue-badge">Traditionnel</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Riad Business Medina</h3>
                            <p class="venue-description">Riad authentique aménagé pour vos réunions dans un cadre traditionnel.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>50 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>12 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
                                    <li><i class="fas fa-coffee"></i> Pause café marocaine</li>
                                    <li><i class="fas fa-utensils"></i> Déjeuner traditionnel</li>
                                    <li><i class="fas fa-car"></i> Voiturier</li>
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

                @if(request('ville') == 'Tanger')
                    <!-- Salles à Tanger -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/entreprise/tanger-detroit.jpg') }}" alt="Detroit Business" class="main-image">
                            <div class="venue-badge">Vue Mer</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Detroit Business Center</h3>
                            <p class="venue-description">Centre d'affaires moderne avec vue sur le détroit de Gibraltar.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>200 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>20 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 20h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-video"></i> Visioconférence HD</li>
                                    <li><i class="fas fa-print"></i> Business center</li>
                                    <li><i class="fas fa-coffee"></i> Service traiteur</li>
                                    <li><i class="fas fa-parking"></i> Parking sécurisé</li>
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
                            <img src="{{ asset('images/entreprise/tanger-port.jpg') }}" alt="Port Business" class="main-image">
                            <div class="venue-badge">Port</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Tanger Port Executive</h3>
                            <p class="venue-description">Salles de réunion premium dans la zone franche du port.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>100 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>15 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>7h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> Internet sécurisé</li>
                                    <li><i class="fas fa-shield-alt"></i> Accès contrôlé</li>
                                    <li><i class="fas fa-language"></i> Traduction simultanée</li>
                                    <li><i class="fas fa-handshake"></i> Salon VIP</li>
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

                @if(request('ville') == 'Rabat')
                    <!-- Salles à Rabat -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/entreprise/rabat-administrative.jpg') }}" alt="Administrative Center" class="main-image">
                            <div class="venue-badge">Administratif</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Centre Administratif Hay Riad</h3>
                            <p class="venue-description">Centre de conférences moderne au cœur du quartier administratif.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>250 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>22 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-microphone"></i> Système audio pro</li>
                                    <li><i class="fas fa-video"></i> Projection 4K</li>
                                    <li><i class="fas fa-coffee"></i> Restauration</li>
                                    <li><i class="fas fa-car"></i> Parking réservé</li>
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
                            <img src="{{ asset('images/entreprise/rabat-marina.jpg') }}" alt="Marina Business" class="main-image">
                            <div class="venue-badge">Marina</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Marina Business Lounge</h3>
                            <p class="venue-description">Espace de réunion élégant avec vue sur la marina de Bouregreg.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>80 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>15 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
                                    <li><i class="fas fa-utensils"></i> Restaurant vue mer</li>
                                    <li><i class="fas fa-tv"></i> Écrans interactifs</li>
                                    <li><i class="fas fa-concierge-bell"></i> Service conciergerie</li>
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
    @else
        <div class="welcome-section text-center">
            <div class="illustration-container mb-4">
                <img src="{{ asset('images/entreprise/business-meeting.jpg') }}" alt="Business Meeting" class="welcome-img">
            </div>
            <h2 class="mb-3">Organisez votre événement professionnel</h2>
            <p class="text-muted" style="color: #1e272e;">Sélectionnez votre ville pour découvrir nos espaces business</p>
        </div>
    @endif
</div>

<style>
.enterprise-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/entreprise/hero-bg.jpg") }}') center/cover;
    padding: 4rem 0;
    border-radius: 1rem;
    margin-bottom: 3rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
}

.search-section {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1);
}

.search-form {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.custom-select {
    min-width: 280px;
    padding: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 0.75rem;
    font-size: 1rem;
    transition: all 0.3s ease;
    background-color: white;
}

.custom-select:focus {
    border-color: #2d3436;
    box-shadow: 0 0 0 0.2rem rgba(45, 52, 54, 0.25);
}

.search-btn {
    padding: 1rem 2.5rem;
    font-weight: 600;
    border-radius: 0.75rem;
    background: #2d3436;
    border: none;
    transition: all 0.3s ease;
    color: #ffffff;
}

.search-btn:hover {
    background: #1e272e;
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
}

.venues-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2.5rem;
    margin-top: 2.5rem;
}

.venue-card {
    background: white;
    border-radius: 1.25rem;
    overflow: hidden;
    box-shadow: 0 0.5rem 2rem rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.venue-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,0.15);
}

.venue-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.main-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.venue-card:hover .main-image {
    transform: scale(1.1);
}

.venue-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(45, 52, 54, 0.9);
    color: white;
    padding: 0.5rem 1.25rem;
    border-radius: 2rem;
    font-weight: 600;
    backdrop-filter: blur(4px);
}

.venue-details {
    padding: 1.75rem;
}

.venue-title {
    font-size: 1.35rem;
    font-weight: bold;
    color: #2d3436;
    margin-bottom: 0.75rem;
}

.venue-description {
    color: #636e72;
    font-size: 0.95rem;
    margin-bottom: 1.25rem;
    line-height: 1.6;
}

.venue-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.25rem;
    margin-bottom: 1.75rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 0.75rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
    color: #2d3436;
}

.feature-item i {
    color: #2d3436;
    font-size: 1.1rem;
}

.venue-services {
    background: #f8f9fa;
    padding: 1.25rem;
    border-radius: 0.75rem;
    margin-bottom: 1.25rem;
}

.venue-services h4 {
    font-size: 1.1rem;
    color: #2d3436;
    margin-bottom: 1rem;
    font-weight: 600;
}

.venue-services ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
}

.venue-services li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: #636e72;
    font-size: 0.9rem;
}

.venue-services li i {
    color: #2d3436;
    font-size: 1.1rem;
}

.btn-details {
    background: #2d3436;
    border: none;
    font-weight: 600;
    padding: 1rem;
    border-radius: 0.75rem;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-details:hover {
    background: #1e272e;
    transform: translateY(-2px);
    box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.15);
}

.welcome-section {
    padding: 5rem 0;
    text-align: center;
}

.welcome-img {
    max-width: 350px;
    margin-bottom: 2.5rem;
    filter: drop-shadow(0 1rem 2rem rgba(0,0,0,0.1));
}

@media (max-width: 768px) {
    .enterprise-container {
        padding: 1rem;
    }

    .hero-section {
        padding: 2rem 1rem;
    }

    .venues-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .venue-features {
        grid-template-columns: repeat(2, 1fr);
    }

    .venue-services ul {
        grid-template-columns: 1fr;
    }

    .custom-select {
        width: 100%;
    }

    .search-btn {
        width: 100%;
    }
}
</style>
@endsection
