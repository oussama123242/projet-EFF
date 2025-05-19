<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Salle de Fête')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ajout de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

/* Styles pour les modals */
.auth-modal {
    background-color: rgba(0, 0, 0, 0.8);
}

.auth-modal .modal-content {
    background: white;
    border-radius: 15px;
    padding: 20px;
}

.auth-modal .modal-header {
    border-bottom: none;
    padding-bottom: 0;
}

.auth-modal .modal-title {
    color: #2c3e50;
    font-weight: 600;
}

.auth-form-group {
    margin-bottom: 20px;
}

.auth-form-group label {
    color: #2c3e50;
    font-weight: 500;
    margin-bottom: 8px;
}

.auth-form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.auth-form-group input:focus {
    border-color: #c8b53e;
    outline: none;
}

.auth-submit-btn {
    background-color: #c8b53e;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 8px;
    font-weight: 500;
    width: 100%;
    transition: background-color 0.3s ease;
}

.auth-submit-btn:hover {
    background-color: #b3a136;
}

.auth-switch-text {
    text-align: center;
    margin-top: 15px;
    color: #666;
}

.auth-switch-link {
    color: #c8b53e;
    text-decoration: none;
    font-weight: 500;
}

.auth-switch-link:hover {
    text-decoration: underline;
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
        <li><a href="{{ route('contact.form') }}">Contact</a></li>
    </ul>
</nav>

        <div class="auth-buttons">
            @auth
                <span class="user-info">{{ Auth::user()->nom }}</span>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Connexion</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Créer un compte</a>
            @endauth
        </div>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <!-- Modal de Connexion -->
    <div class="modal fade auth-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="auth-form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required autofocus>
                        </div>
                        <div class="auth-form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <div class="auth-form-group">
                            <label>
                                <input type="checkbox" name="remember"> Se souvenir de moi
                            </label>
                        </div>
                        <button type="submit" class="auth-submit-btn">Se connecter</button>
                    </form>
                    <p class="auth-switch-text">
                        Pas encore de compte ? 
                        <a href="#" class="auth-switch-link" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
                            Créer un compte
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'Inscription -->
    <div class="modal fade auth-modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Créer un compte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="auth-form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" name="name" id="name" required autofocus>
                        </div>
                        <div class="auth-form-group">
                            <label for="register_email">Email</label>
                            <input type="email" name="email" id="register_email" required>
                        </div>
                        <div class="auth-form-group">
                            <label for="register_password">Mot de passe</label>
                            <input type="password" name="password" id="register_password" required>
                        </div>
                        <div class="auth-form-group">
                            <label for="password_confirmation">Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>
                        <button type="submit" class="auth-submit-btn">S'inscrire</button>
                    </form>
                    <p class="auth-switch-text">
                        Déjà un compte ? 
                        <a href="#" class="auth-switch-link" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                            Se connecter
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

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
                    <li><a href="{{ route('contact.form') }}">Contact</a></li>
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
                        <span>+212 530620368</span>
                    </li>
                    <li>
                        <i class="fas fa-mobile-alt"></i>
                        <span>+212 6 97 93 85 95</span>
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

    <!-- Ajout de Bootstrap JS et ses dépendances -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <!-- Script pour afficher les erreurs dans les modals -->
    <script>
        // Si il y a des erreurs de validation, réouvrir le modal approprié
        @if($errors->has('email') || $errors->has('password'))
            document.addEventListener('DOMContentLoaded', function() {
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
                loginModal.show();
            });
        @endif

        @if($errors->has('name') || $errors->has('password_confirmation'))
            document.addEventListener('DOMContentLoaded', function() {
                var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
                registerModal.show();
            });
        @endif
    </script>
</body>
</html>