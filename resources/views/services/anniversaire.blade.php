@extends('layouts.client')

@section('title', 'Salles pour Anniversaire')

@section('content')
<div class="birthday-container">
    <!-- Hero Section -->
    <div class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #2d3436;  text-align: center;">Salles pour Anniversaire</h1>
        <p class="lead text-muted" style="color: #2d3436;  text-align: center;">Trouvez la salle parfaite pour célébrer votre anniversaire inoubliable</p>
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
            <h2 class="section-title text-center mb-4" style="color:rgb(156, 85, 85);  text-align: center;" >Salles disponibles à {{ request('ville') }}</h2>
            <div class="venues-grid">
                @if(request('ville') == 'Casablanca')
                    <!-- Salles à Casablanca -->
                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/anniversaire/casa-fun.jpg') }}" alt="Fun Zone" class="main-image">
                            <div class="venue-badge">Enfants</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Fun Zone - Ain Diab</h3>
                            <p class="venue-description">Espace de jeux et de fête idéal pour les anniversaires d'enfants avec animations et activités ludiques.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>50 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>3 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>14h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-birthday-cake"></i> Gâteau personnalisé</li>
                                    <li><i class="fas fa-gamepad"></i> Jeux et animations</li>
                                    <li><i class="fas fa-music"></i> DJ pour enfants</li>
                                    <li><i class="fas fa-pizza-slice"></i> Menu enfant</li>
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
                            <img src="{{ asset('images/anniversaire/casa-teens.jpg') }}" alt="Teen Party" class="main-image">
                            <div class="venue-badge">Ados</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Teen Party - Maarif</h3>
                            <p class="venue-description">Espace moderne et branché pour les anniversaires d'adolescents avec ambiance festive.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>80 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>5 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>16h - 22h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-music"></i> DJ professionnel</li>
                                    <li><i class="fas fa-camera"></i> Photobooth</li>
                                    <li><i class="fas fa-utensils"></i> Snacks et boissons</li>
                                    <li><i class="fas fa-wifi"></i> WiFi haut débit</li>
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
                            <img src="{{ asset('images/anniversaire/casa-luxury.jpg') }}" alt="Luxury Hall" class="main-image">
                            <div class="venue-badge">Luxe</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Le Palace Casa</h3>
                            <p class="venue-description">Salle de réception luxueuse avec vue panoramique sur la ville.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>180 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>12 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 02h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-glass-cheers"></i> Bar premium</li>
                                    <li><i class="fas fa-star"></i> Décoration VIP</li>
                                    <li><i class="fas fa-car"></i> Service voiturier</li>
                                    <li><i class="fas fa-utensils"></i> Chef étoilé</li>
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
                            <img src="{{ asset('images/anniversaire/casa-rooftop.jpg') }}" alt="Rooftop Lounge" class="main-image">
                            <div class="venue-badge">Rooftop</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Sky Lounge Casa</h3>
                            <p class="venue-description">Terrasse panoramique avec vue imprenable sur l'océan et la ville.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>120 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>9 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>19h - 01h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-cocktail"></i> Bar à cocktails</li>
                                    <li><i class="fas fa-music"></i> DJ résident</li>
                                    <li><i class="fas fa-umbrella"></i> Espace lounge</li>
                                    <li><i class="fas fa-camera"></i> Photobooth</li>
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
                            <img src="{{ asset('images/anniversaire/marrakech-pool.jpg') }}" alt="Pool Party" class="main-image">
                            <div class="venue-badge">Piscine</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Pool Party Paradise</h3>
                            <p class="venue-description">Fêtez votre anniversaire dans un cadre paradisiaque au bord de la piscine avec vue sur l'Atlas.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>100 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>8 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>12h - 20h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-swimming-pool"></i> Accès piscine</li>
                                    <li><i class="fas fa-umbrella-beach"></i> Transats</li>
                                    <li><i class="fas fa-cocktail"></i> Bar à jus</li>
                                    <li><i class="fas fa-user-shield"></i> Maître-nageur</li>
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
                            <img src="{{ asset('images/anniversaire/marrakech-garden.jpg') }}" alt="Garden Venue" class="main-image">
                            <div class="venue-badge">Jardin</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Riad Garden Party</h3>
                            <p class="venue-description">Magnifique riad avec jardin luxuriant pour des célébrations inoubliables.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>80 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>6 500 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>16h - 23h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-tree"></i> Jardin privé</li>
                                    <li><i class="fas fa-music"></i> Système son</li>
                                    <li><i class="fas fa-utensils"></i> Traiteur oriental</li>
                                    <li><i class="fas fa-star"></i> Décoration traditionnelle</li>
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
                            <img src="{{ asset('images/anniversaire/marrakech-palace.jpg') }}" alt="Palace Venue" class="main-image">
                            <div class="venue-badge">Luxe</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Palais des Mille et Une Nuits</h3>
                            <p class="venue-description">Salle de réception luxueuse dans un authentique palais marocain.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>200 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>15 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 02h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-crown"></i> Service VIP</li>
                                    <li><i class="fas fa-drum"></i> Animation traditionnelle</li>
                                    <li><i class="fas fa-utensils"></i> Chef privé</li>
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

                    <div class="venue-card">
                        <div class="venue-image">
                            <img src="{{ asset('images/anniversaire/marrakech-desert.jpg') }}" alt="Desert Camp" class="main-image">
                            <div class="venue-badge">Désert</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Desert Luxury Camp</h3>
                            <p class="venue-description">Une expérience unique sous les étoiles dans un camp de luxe au désert d'Agafay.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>60 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>20 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>17h - 02h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-campground"></i> Tentes de luxe</li>
                                    <li><i class="fas fa-drum"></i> Soirée berbère</li>
                                    <li><i class="fas fa-horse"></i> Balade à cheval</li>
                                    <li><i class="fas fa-moon"></i> Observation des étoiles</li>
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
                            <img src="{{ asset('images/anniversaire/marrakech-rooftop.jpg') }}" alt="Rooftop Venue" class="main-image">
                            <div class="venue-badge">Rooftop</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Atlas View Terrace</h3>
                            <p class="venue-description">Terrasse panoramique avec vue imprenable sur la médina et l'Atlas.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>90 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>10 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>18h - 00h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-cocktail"></i> Bar à cocktails</li>
                                    <li><i class="fas fa-fire"></i> BBQ marocain</li>
                                    <li><i class="fas fa-music"></i> Musique live</li>
                                    <li><i class="fas fa-couch"></i> Salon lounge</li>
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
                            <img src="{{ asset('images/anniversaire/rabat-garden.jpg') }}" alt="Garden Party" class="main-image">
                            <div class="venue-badge">Jardin</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Garden Party Venue</h3>
                            <p class="venue-description">Magnifique espace en plein air avec jardin aménagé pour des célébrations mémorables.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>120 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>6 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>15h - 23h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-tree"></i> Espace jardin privé</li>
                                    <li><i class="fas fa-lightbulb"></i> Éclairage décoratif</li>
                                    <li><i class="fas fa-parking"></i> Parking gratuit</li>
                                    <li><i class="fas fa-umbrella"></i> Espace couvert</li>
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
                            <img src="{{ asset('images/anniversaire/rabat-marina.jpg') }}" alt="Marina View" class="main-image">
                            <div class="venue-badge">Marina</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Marina Lounge Rabat</h3>
                            <p class="venue-description">Espace élégant avec vue sur les yachts de la marina de Bouregreg.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>100 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>8 500 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>17h - 00h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-ship"></i> Vue marina</li>
                                    <li><i class="fas fa-fish"></i> Fruits de mer</li>
                                    <li><i class="fas fa-music"></i> Piano live</li>
                                    <li><i class="fas fa-star"></i> Service premium</li>
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
                            <img src="{{ asset('images/anniversaire/rabat-kids.jpg') }}" alt="Kids Club" class="main-image">
                            <div class="venue-badge">Enfants</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Kids Paradise Rabat</h3>
                            <p class="venue-description">Espace de jeux sécurisé pour des anniversaires d'enfants inoubliables.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>40 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>3 500 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>14h - 18h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-gamepad"></i> Jeux éducatifs</li>
                                    <li><i class="fas fa-birthday-cake"></i> Gâteau thématique</li>
                                    <li><i class="fas fa-paint-brush"></i> Face painting</li>
                                    <li><i class="fas fa-gift"></i> Cadeaux surprises</li>
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
                            <img src="{{ asset('images/anniversaire/tanger-beach.jpg') }}" alt="Beach Club" class="main-image">
                            <div class="venue-badge">Plage</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Beach Club Tanger</h3>
                            <p class="venue-description">Célébrez votre anniversaire les pieds dans le sable avec vue sur la Méditerranée.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>150 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>12 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>16h - 00h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-umbrella-beach"></i> Espace plage privé</li>
                                    <li><i class="fas fa-music"></i> DJ professionnel</li>
                                    <li><i class="fas fa-fish"></i> Fruits de mer frais</li>
                                    <li><i class="fas fa-cocktail"></i> Bar premium</li>
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
                            <img src="{{ asset('images/anniversaire/tanger-modern.jpg') }}" alt="Modern Venue" class="main-image">
                            <div class="venue-badge">Moderne</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Skyline Lounge</h3>
                            <p class="venue-description">Espace moderne avec vue panoramique sur le détroit de Gibraltar.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>100 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>9 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>19h - 02h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-glass-cheers"></i> Bar à cocktails</li>
                                    <li><i class="fas fa-star"></i> Décoration moderne</li>
                                    <li><i class="fas fa-microphone"></i> Karaoké</li>
                                    <li><i class="fas fa-camera"></i> Photobooth</li>
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
                            <img src="{{ asset('images/anniversaire/tanger-kids.jpg') }}" alt="Kids Paradise" class="main-image">
                            <div class="venue-badge">Enfants</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Fun Factory Tanger</h3>
                            <p class="venue-description">Le paradis des enfants avec jeux, animations et activités ludiques.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>50 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>4 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>14h - 19h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-gamepad"></i> Aires de jeux</li>
                                    <li><i class="fas fa-birthday-cake"></i> Gâteau personnalisé</li>
                                    <li><i class="fas fa-mask"></i> Animations enfants</li>
                                    <li><i class="fas fa-gift"></i> Cadeaux surprises</li>
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
                            <img src="{{ asset('images/anniversaire/tanger-yacht.jpg') }}" alt="Yacht Party" class="main-image">
                            <div class="venue-badge">Yacht</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Luxury Yacht Experience</h3>
                            <p class="venue-description">Célébrez votre anniversaire sur un yacht de luxe dans le détroit de Gibraltar.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>30 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>25 000 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>14h - 22h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-ship"></i> Yacht privé</li>
                                    <li><i class="fas fa-glass-martini"></i> Open bar</li>
                                    <li><i class="fas fa-fish"></i> Fruits de mer</li>
                                    <li><i class="fas fa-user-tie"></i> Équipage dédié</li>
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
                            <img src="{{ asset('images/anniversaire/tanger-kasbah.jpg') }}" alt="Kasbah Venue" class="main-image">
                            <div class="venue-badge">Traditionnel</div>
                        </div>
                        <div class="venue-details">
                            <h3 class="venue-title">Kasbah Royal</h3>
                            <p class="venue-description">Maison traditionnelle rénovée dans la Kasbah avec vue sur la médina.</p>
                            <div class="venue-features">
                                <div class="feature-item">
                                    <i class="fas fa-users"></i>
                                    <span>70 personnes</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>7 500 MAD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>17h - 23h</span>
                                </div>
                            </div>
                            <div class="venue-services">
                                <h4>Services inclus</h4>
                                <ul>
                                    <li><i class="fas fa-drum"></i> Musique andalouse</li>
                                    <li><i class="fas fa-utensils"></i> Cuisine locale</li>
                                    <li><i class="fas fa-star"></i> Décor authentique</li>
                                    <li><i class="fas fa-coffee"></i> Thé à la menthe</li>
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
                <img src="{{ asset('images/anniversaire/celebration.jpg') }}" alt="Célébration" class="celebration-img">
            </div>
            <h2 class="mb-3">Prêt à organiser votre fête ?</h2>
            <p class="text-muted" style="color: #1e272e;">Sélectionnez votre ville pour découvrir nos salles d'anniversaire</p>
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
                url('{{ asset("images/anniversaire/hero-bg.jpg") }}') center/cover;
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
