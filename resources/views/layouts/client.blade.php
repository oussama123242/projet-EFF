<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Salle de Fête')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Style général */
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Navbar */
.navbar {
    background-color:rgb(255, 255, 255);
    padding: 1rem 2rem;
    color: white;
    position: sticky;
    top: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 1.5rem;
    margin: 0;
    padding: 0;
}

.navbar ul li {
    position: relative;
}

.navbar a {
    color: rgba(200, 181, 62, 0.61);
    text-decoration: none;
    padding: 0.5rem 1rem;
    display: block;
    transition: background-color 0.3s ease, transform 0.2s;
    font-size: 1.2rem;
}

.navbar a:hover {
     
    transform: scale(1.05);
}

/* Dropdown menu */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #34495e;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    min-width: 200px;
    border-radius: 5px;
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.dropdown-content a {
    color: white;
    padding: 0.5rem 1rem;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #555;
}

/* Affichage du menu déroulant au survol */
.navbar ul li:hover .dropdown-content {
    display: block;
    opacity: 1;
}

/* Boutons de connexion et inscription */
.auth-buttons {
    margin-left: auto;
    display: flex;
    gap: 0.5rem;
}

.auth-buttons a {
    background-color:rgb(42, 31, 21);
    color: rgba(200, 181, 62, 0.61);
    padding: 0.5rem 1rem;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.auth-buttons a:hover {
    background-color: #d35400;
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    padding: 1.5rem;
    text-align: center;
    margin-top: 2rem;
}

footer .footer-links {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin: 1rem 0;
}

footer a {
    color: #ecf0f1;
    text-decoration: none;
    padding: 0.5rem;
    transition: color 0.3s ease;
}

footer a:hover {
    color: #f39c12;
}

.user-info {
    margin-left: auto;
    padding: 0.5rem 1rem;
    font-weight: bold;
    color: #ecf0f1;
}
/* Container for logo and navigation */
.navbar-left {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ecf0f1;
    margin-right: 10rem;
}

.navbar-left nav {
    display: flex;
}

.navbar-left nav ul {
    display: flex;
    gap: 1.5rem;
    margin: 0;
    padding: 0;
    list-style: none;
}

    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
        <a href="{{ route('home') }}">
    <img src="{{ asset('images/logo.jpg') }}" alt="Salle de Fête" style="height: 80px;">
</a>

        </div>
      <nav>
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li>
            <a href="#">Service</a>
            <div class="dropdown-content">
               <a href="{{ route('services.type', ['type' => 'mariage']) }}">Mariage</a>
               <a href="{{ route('services.type', ['type' => 'anniversaire']) }}">Anniversaire</a>
               <a href="{{ route('services.type', ['type' => 'entreprise']) }}">Entreprise</a>
               <a href="{{ route('services.type', ['type' => 'reunion']) }}">Réunion</a>
               <a href="{{ route('services.type', ['type' => 'autre']) }}">Autre</a>
            </div>
        </li>
        <li>
            <a href="#">Prestataire</a>
            <div class="dropdown-content">
                <a href="{{ route('prestataires.traiteurs') }}">Traiteur</a>
<a href="{{ route('prestataires.decorateurs') }}">Décorateur</a>
<a href="{{ route('prestataires.photographes') }}">Photographe</a>
<a href="{{ route('prestataires.animateurs') }}">Animateur</a>
            </div>
        </li>
        <li><a href="{{ route('reservations.index') }}">Vos Réservations</a></li>

        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

        <div class="auth-buttons">
            @auth
                <span class="user-info">{{ Auth::user()->nom }}</span>
                <a href="{{ route('logout') }}">Déconnexion</a>
            @else
                <a href="{{ route('login') }}">Connexion</a>
                <a href="{{ route('register') }}">Créer un compte</a>
            @endauth
        </div>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="new-footer">
        <div class="footer-container">
            <!-- À propos -->
            <div class="footer-section">
                <h3>À propos d'Eventify</h3>
                <p class="footer-description">
                    Eventify est votre partenaire de confiance pour l'organisation d'événements inoubliables. 
                    Nous vous proposons les meilleures salles au Maroc pour vos mariages, anniversaires, 
                    réunions d'entreprise et autres célébrations.
                </p>
                <div class="social-links">
                    <a href="https://instagram.com/eventify" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://facebook.com/eventify" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://linkedin.com/company/eventify" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>

            <!-- Liens rapides -->
            <div class="footer-section">
                <h3>Liens rapides</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li><a href="{{ route('services.type', ['type' => 'mariage']) }}">Mariage</a></li>
                    <li><a href="{{ route('services.type', ['type' => 'anniversaire']) }}">Anniversaire</a></li>
                    <li><a href="{{ route('services.type', ['type' => 'entreprise']) }}">Entreprise</a></li>
                    <li><a href="{{ route('services.type', ['type' => 'reunion']) }}">Réunion</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h3>Nos Services</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('prestataires.traiteurs') }}">Traiteur</a></li>
<li><a href="{{ route('prestataires.decorateurs') }}">Décoration</a></li>
<li><a href="{{ route('prestataires.photographes') }}">Photographie</a></li>
<li><a href="{{ route('prestataires.animateurs') }}">Animation</a></li>
                    <li><a href="{{ route('reservations.index') }}">Réservations</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-section">
                <h3>Contact</h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+212 5XX-XXXXXX</span>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span>+212 6XX-XXXXXX</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>contact@eventify.ma</span>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>123 Avenue Mohammed V, Rabat, Maroc</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Barre de copyright -->
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <p>&copy; 2025 Eventify. Tous droits réservés.</p>
                <div class="legal-links">
                    <a href="{{ route('terms') }}">Conditions d'utilisation</a>
                    <span class="separator">|</span>
                    <a href="{{ route('privacy') }}">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ajout de Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
    /* Style général */
    body, html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    /* Navbar */
    .navbar {
        background-color:rgb(255, 255, 255);
        padding: 1rem 2rem;
        color: white;
        position: sticky;
        top: 0;
        z-index: 1000;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .navbar ul {
        list-style: none;
        display: flex;
        gap: 1.5rem;
        margin: 0;
        padding: 0;
    }

    .navbar ul li {
        position: relative;
    }

    .navbar a {
        color: rgba(200, 181, 62, 0.61);
        text-decoration: none;
        padding: 0.5rem 1rem;
        display: block;
        transition: background-color 0.3s ease, transform 0.2s;
        font-size: 1.2rem;
    }

    .navbar a:hover {
         
        transform: scale(1.05);
    }

    /* Dropdown menu */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #34495e;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        min-width: 200px;
        border-radius: 5px;
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .dropdown-content a {
        color: white;
        padding: 0.5rem 1rem;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #555;
    }

    /* Affichage du menu déroulant au survol */
    .navbar ul li:hover .dropdown-content {
        display: block;
        opacity: 1;
    }

    /* Boutons de connexion et inscription */
    .auth-buttons {
        margin-left: auto;
        display: flex;
        gap: 0.5rem;
    }

    .auth-buttons a {
        background-color:rgb(42, 31, 21);
        color: rgba(200, 181, 62, 0.61);
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .auth-buttons a:hover {
        background-color: #d35400;
    }

    /* Footer */
    footer {
        background-color: #2c3e50;
        color: white;
        padding: 1.5rem;
        text-align: center;
        margin-top: 2rem;
    }

    footer .footer-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin: 1rem 0;
    }

    footer a {
        color: #ecf0f1;
        text-decoration: none;
        padding: 0.5rem;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #f39c12;
    }

    .user-info {
        margin-left: auto;
        padding: 0.5rem 1rem;
        font-weight: bold;
        color: #ecf0f1;
    }
    /* Container for logo and navigation */
    .navbar-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: #ecf0f1;
        margin-right: 10rem;
    }

    .navbar-left nav {
        display: flex;
    }

    .navbar-left nav ul {
        display: flex;
        gap: 1.5rem;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* Nouveau style pour le footer avec nouvelle palette de couleurs */
    .new-footer {
        background: linear-gradient(135deg, #1a1a1a, #2d3436);
        color: #ffffff;
        padding: 4rem 0 0 0;
        margin-top: 3rem;
        font-family: 'Poppins', sans-serif;
    }

    .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 2rem;
    padding: 0 2rem;
}

.footer-section {
    flex: 1 1 220px;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* ✅ contenu vertical */
    margin-bottom: 2rem;
}


   .footer-section h3 {
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 1rem;
    position: relative;
}


    .footer-section h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #c8b53e, #8e7c1c);
        border-radius: 2px;
    }

    .footer-description {
        line-height: 1.8;
        margin-bottom: 1.5rem;
        color: #a0a0a0;
        font-size: 0.95rem;
    }

    .footer-links {
    display: flex;
    flex-direction: column; /* ✅ chaque lien sous l’autre */
    gap: 0.6rem;
    padding: 0;
    margin: 0;
}


    .social-links a {
        background: linear-gradient(135deg, #2d3436, #3d4548);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #c8b53e;
        transition: all 0.3s ease;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .social-links a:hover {
        transform: translateY(-3px) scale(1.05);
        background: linear-gradient(135deg, #c8b53e, #8e7c1c);
        color: #ffffff;
        box-shadow: 0 5px 15px rgba(200, 181, 62, 0.3);
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 1rem;
    }

    .footer-links a {
        color: #a0a0a0;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        padding-left: 1.2rem;
    }

    .footer-links a::before {
        content: '→';
        position: absolute;
        left: 0;
        color: #c8b53e;
        transition: transform 0.3s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .footer-links a:hover::before {
        transform: translateX(3px);
    }

    .contact-info {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info li {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1.2rem;
        color: #a0a0a0;
        transition: all 0.3s ease;
    }

    .contact-info li:hover {
        color: #ffffff;
        transform: translateX(5px);
    }

    .contact-info i {
        color: #c8b53e;
        font-size: 1.2rem;
        width: 20px;
        transition: all 0.3s ease;
    }

    .contact-info li:hover i {
        transform: scale(1.1);
    }

    .footer-bottom {
        background-color: rgba(0, 0, 0, 0.3);
        padding: 1.5rem 0;
        margin-top: 3rem;
        backdrop-filter: blur(10px);
    }

    .footer-bottom-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .footer-bottom p {
        margin: 0;
        color: #a0a0a0;
        font-size: 0.9rem;
    }

    .legal-links {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .legal-links a {
        color: #a0a0a0;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.9rem;
        position: relative;
    }

    .legal-links a:hover {
        color: #c8b53e;
    }

    .legal-links a::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 1px;
        background-color: #c8b53e;
        transition: width 0.3s ease;
    }

    .legal-links a:hover::after {
        width: 100%;
    }

    .separator {
        color: #4a4a4a;
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .footer-section {
            text-align: center;
        }

        .footer-section h3::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .social-links {
            justify-content: center;
        }

        .footer-links a::before {
            display: none;
        }

        .contact-info li {
            justify-content: center;
        }

        .footer-bottom-content {
            flex-direction: column;
            text-align: center;
        }

        .legal-links {
            justify-content: center;
        }
    }

    /* Ajout de la police Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    </style>
</body>
</html>