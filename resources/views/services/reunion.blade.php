@extends('layouts.client')

@section('title', 'Salles de Réunion')

@section('content')
<div class="birthday-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436; text-align: center;">Salles de Réunion</h1>
        <p class="lead text-muted" style="color: #2d3436; text-align: center;">Trouvez l'espace professionnel idéal pour vos réunions et événements d'entreprise</p>
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
                <i class="fas fa-search me-2"></i>Rechercher
            </button>
        </form>
    </div>

    <!-- Results Section -->
    @if(request('ville'))
        <div class="results-section">
            <h2 class="section-title text-center mb-4" style="color:rgb(156, 85, 85); text-align: center;">Salles disponibles à {{ request('ville') }}</h2>
            <div class="venues-grid">
                @if(request('ville') == 'Casablanca')
                    <!-- Salles à Casablanca -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/reunion/casa-business.jpg') }}" alt="Business Center" class="main-image">
                            <div class="venue-badge">Premium</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Twin Center Business Hub</h3>
                            <p class="venue-description">Centre d'affaires moderne avec vue panoramique sur la ville.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>30 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>2500 DH/jour</span>
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
                                    <li><i class="fas fa-tv"></i> Écran 4K</li>
                                    <li><i class="fas fa-coffee"></i> Pause café</li>
                                    <li><i class="fas fa-print"></i> Imprimante</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/reunion/casa-marina.jpg') }}" alt="Marina Meeting" class="main-image">
                            <div class="venue-badge">Vue mer</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Marina Business Center</h3>
                            <p class="venue-description">Espace de réunion moderne avec vue sur la marina.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>20 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>2000 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9h - 17h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi</li>
                                    <li><i class="fas fa-video"></i> Visioconférence</li>
                                    <li><i class="fas fa-coffee"></i> Machine à café</li>
                                    <li><i class="fas fa-parking"></i> Parking</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>
                @endif

                @if(request('ville') == 'Rabat')
                    <!-- Salles à Rabat -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/reunion/rabat-center.jpg') }}" alt="Centre d'Affaires" class="main-image">
                            <div class="venue-badge">Business</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Centre d'Affaires Hay Riad</h3>
                            <p class="venue-description">Espace professionnel au cœur du quartier des affaires.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>25 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>1800 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi fibre</li>
                                    <li><i class="fas fa-print"></i> Photocopieur</li>
                                    <li><i class="fas fa-coffee"></i> Pause café</li>
                                    <li><i class="fas fa-phone"></i> Téléphone fixe</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/reunion/rabat-agdal.jpg') }}" alt="Agdal Meeting" class="main-image">
                            <div class="venue-badge">Modern</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Agdal Business Hub</h3>
                            <p class="venue-description">Espace moderne et convivial dans le quartier d'Agdal.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>15 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>1500 DH/jour</span>
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
                                    <li><i class="fas fa-tv"></i> Smart TV</li>
                                    <li><i class="fas fa-coffee"></i> Espace café</li>
                                    <li><i class="fas fa-parking"></i> Parking gratuit</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>
                @endif

                @if(request('ville') == 'Marrakech')
                    <!-- Salles à Marrakech -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <div id="carouselMarrakech1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/reunion/marrakech-1.jpg') }}" alt="Salle Marrakech 1" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/marrakech-2.jpg') }}" alt="Salle Marrakech 2" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/marrakech-3.jpg') }}" alt="Salle Marrakech 3" class="main-image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMarrakech1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselMarrakech1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            <div class="venue-badge">Luxe</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Palmeraie Business Center</h3>
                            <p class="venue-description">Centre d'affaires luxueux avec vue sur la Palmeraie et l'Atlas.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>40 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>3000 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 20h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
                                    <li><i class="fas fa-utensils"></i> Service traiteur</li>
                                    <li><i class="fas fa-car"></i> Voiturier</li>
                                    <li><i class="fas fa-snowflake"></i> Climatisation</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <div id="carouselMarrakech2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/reunion/marrakech-4.jpg') }}" alt="Salle Marrakech 4" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/marrakech-5.jpg') }}" alt="Salle Marrakech 5" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/marrakech-6.jpg') }}" alt="Salle Marrakech 6" class="main-image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMarrakech2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselMarrakech2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            <div class="venue-badge">Moderne</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Guéliz Meeting Center</h3>
                            <p class="venue-description">Espace de réunion moderne au cœur du quartier Guéliz.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>25 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>2200 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>9h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi fibre</li>
                                    <li><i class="fas fa-tv"></i> Écran tactile</li>
                                    <li><i class="fas fa-coffee"></i> Pause café</li>
                                    <li><i class="fas fa-print"></i> Imprimante</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>
                @endif

                @if(request('ville') == 'Tanger')
                    <!-- Salles à Tanger -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <div id="carouselTanger1" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/reunion/tanger-1.jpg') }}" alt="Salle Tanger 1" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/tanger-2.jpg') }}" alt="Salle Tanger 2" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/tanger-3.jpg') }}" alt="Salle Tanger 3" class="main-image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTanger1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTanger1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            <div class="venue-badge">Vue mer</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Tanger City Center</h3>
                            <p class="venue-description">Salle de réunion avec vue panoramique sur le détroit de Gibraltar.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>35 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>2800 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
                                    <li><i class="fas fa-video"></i> Visioconférence</li>
                                    <li><i class="fas fa-coffee"></i> Service café</li>
                                    <li><i class="fas fa-parking"></i> Parking sécurisé</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>

                    <div class="venue-card">
                        <div class="venue-image">
                            <div id="carouselTanger2" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/reunion/tanger-4.jpg') }}" alt="Salle Tanger 4" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/tanger-5.jpg') }}" alt="Salle Tanger 5" class="main-image">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('images/reunion/tanger-6.jpg') }}" alt="Salle Tanger 6" class="main-image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTanger2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselTanger2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                            <div class="venue-badge">Business</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Tanger Free Zone Hub</h3>
                            <p class="venue-description">Centre d'affaires moderne dans la zone franche de Tanger.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>30 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>2500 DH/jour</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>8h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-wifi"></i> WiFi sécurisé</li>
                                    <li><i class="fas fa-print"></i> Centre d'impression</li>
                                    <li><i class="fas fa-coffee"></i> Cafétéria</li>
                                    <li><i class="fas fa-shield-alt"></i> Sécurité 24/7</li>
                                </ul>
                            </div>
                            <button class="btn btn-primary btn-details w-100 mt-3" style="color: #e0e0e0;">Voir détails</button>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="welcome-section text-center">
            <div class="illustration-container mb-4">
                <img src="{{ asset('images/reunion/meeting.jpg') }}" alt="Réunion" class="celebration-img">
            </div>
            <h2 class="mb-3">Prêt à organiser votre réunion ?</h2>
            <p class="text-muted" style="color: #1e272e;">Sélectionnez votre ville pour découvrir nos salles de réunion</p>
        </div>
    @endif
</div>

<style>
.birthday-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #f8f9fa;
}

.hero-section {
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)),
                url('{{ asset("images/reunion/hero-bg.jpg") }}') center/cover;
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
    color: white;
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

.celebration-img {
    max-width: 350px;
    margin-bottom: 2.5rem;
    filter: drop-shadow(0 1rem 2rem rgba(0,0,0,0.1));
}

@media (max-width: 768px) {
    .birthday-container {
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
