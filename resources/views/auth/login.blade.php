@extends('layouts.client')

@section('title', 'Connexion')

@section('content')
<div class="login-container">
    <div class="quick-search">
        <div class="search-categories">
            <div class="category-section">
                <h3><i class="fas fa-glass-cheers"></i> Types d'événements</h3>
                <div class="category-grid">
                    <a href="{{ route('services.type', 'mariage') }}" class="category-item">
                        <i class="fas fa-ring"></i>
                        <span>Mariage</span>
                    </a>
                    <a href="{{ route('services.type', 'anniversaire') }}" class="category-item">
                        <i class="fas fa-birthday-cake"></i>
                        <span>Anniversaire</span>
                    </a>
                    <a href="{{ route('services.type', 'conference') }}" class="category-item">
                        <i class="fas fa-microphone"></i>
                        <span>Conférence</span>
                    </a>
                    <a href="{{ route('services.type', 'seminaire') }}" class="category-item">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Séminaire</span>
                    </a>
                </div>
            </div>

            <div class="category-section">
                <h3><i class="fas fa-map-marker-alt"></i> Villes populaires</h3>
                <div class="category-grid">
                    <a href="{{ route('services.ville', 'casablanca') }}" class="category-item">
                        <i class="fas fa-city"></i>
                        <span>Casablanca</span>
                    </a>
                    <a href="{{ route('services.ville', 'rabat') }}" class="category-item">
                        <i class="fas fa-monument"></i>
                        <span>Rabat</span>
                    </a>
                    <a href="{{ route('services.ville', 'marrakech') }}" class="category-item">
                        <i class="fas fa-mosque"></i>
                        <span>Marrakech</span>
                    </a>
                    <a href="{{ route('services.ville', 'tanger') }}" class="category-item">
                        <i class="fas fa-anchor"></i>
                        <span>Tanger</span>
                    </a>
                </div>
            </div>

            <div class="category-section">
                <h3><i class="fas fa-star"></i> Services populaires</h3>
                <div class="category-grid">
                    <a href="{{ route('services.categorie', 'traiteur') }}" class="category-item">
                        <i class="fas fa-utensils"></i>
                        <span>Traiteurs</span>
                    </a>
                    <a href="{{ route('services.categorie', 'decoration') }}" class="category-item">
                        <i class="fas fa-paint-brush"></i>
                        <span>Décoration</span>
                    </a>
                    <a href="{{ route('services.categorie', 'photographe') }}" class="category-item">
                        <i class="fas fa-camera"></i>
                        <span>Photographes</span>
                    </a>
                    <a href="{{ route('services.categorie', 'animation') }}" class="category-item">
                        <i class="fas fa-music"></i>
                        <span>Animation</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="login-box">
        <div class="login-header">
            <h2><i class="fas fa-user-circle"></i> Connexion</h2>
            <p>Connectez-vous pour accéder à vos réservations</p>
        </div>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">
                    <i class="fas fa-envelope"></i>
                    Adresse email
                </label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">
                    <i class="fas fa-lock"></i>
                    Mot de passe
                </label>
                <div class="password-input">
                    <input type="password" id="password" name="password" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    <span>Se souvenir de moi</span>
                </label>

                @if(Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-password">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div>

            <button type="submit" class="login-btn">
                <i class="fas fa-sign-in-alt"></i>
                Se connecter
            </button>

            <div class="register-link">
                Vous n'avez pas de compte ? 
                <a href="{{ route('register') }}">Créer un compte</a>
            </div>
        </form>

        <div class="contact-info">
            <h3><i class="fas fa-phone-alt"></i> Besoin d'aide ?</h3>
            <p>Notre équipe est disponible pour vous aider</p>
            <div class="contact-methods">
                <a href="tel:+212600000000" class="contact-method">
                    <i class="fas fa-phone"></i>
                    <span>+212 6 47 18 06 97</span>
                </a>
                <a href="mailto:oussamabendoudi29@gmail.com" class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <span>oussamabendoudi29@gmail.com</span>
                </a>
                <a href="https://wa.me/212647180697" class="contact-method whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
.login-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 20px;
}

.login-box {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    padding: 40px;
    width: 100%;
    max-width: 500px;
}

.login-header {
    text-align: center;
    margin-bottom: 30px;
}

.login-header h2 {
    color: #333;
    font-size: 2rem;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.login-header h2 i {
    color: #c8b53e;
}

.login-header p {
    color: #666;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #555;
    margin-bottom: 8px;
    font-weight: 500;
}

.form-group label i {
    color: #c8b53e;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 2px solid #eee;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus {
    border-color: #c8b53e;
    outline: none;
    box-shadow: 0 0 0 3px rgba(200, 181, 62, 0.1);
}

.password-input {
    position: relative;
}

.toggle-password {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #666;
    cursor: pointer;
    padding: 0;
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.remember-me {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    cursor: pointer;
}

.forgot-password {
    color: #c8b53e;
    text-decoration: none;
    font-size: 0.9rem;
}

.forgot-password:hover {
    text-decoration: underline;
}

.login-btn {
    width: 100%;
    padding: 14px;
    background: #c8b53e;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
}

.login-btn:hover {
    background: #b3a136;
    transform: translateY(-2px);
}

.register-link {
    text-align: center;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
    color: #666;
}

.register-link a {
    color: #c8b53e;
    text-decoration: none;
    font-weight: 500;
}

.register-link a:hover {
    text-decoration: underline;
}

.benefits {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
}

.benefits h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 15px;
    text-align: center;
}

.benefits ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.benefits li {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #666;
    margin-bottom: 12px;
}

.benefits li i {
    color: #c8b53e;
    font-size: 1.2rem;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 8px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert-danger ul {
    margin: 0;
    padding-left: 20px;
}

.quick-search {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    padding: 30px;
    margin-bottom: 30px;
    max-width: 800px;
    width: 100%;
}

.search-categories {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.category-section h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.category-section h3 i {
    color: #c8b53e;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
}

.category-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.category-item:hover {
    border-color: #c8b53e;
    transform: translateY(-2px);
    background: white;
}

.category-item i {
    font-size: 24px;
    color: #c8b53e;
    margin-bottom: 8px;
}

.contact-info {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 1px solid #eee;
    text-align: center;
}

.contact-info h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.contact-info h3 i {
    color: #c8b53e;
}

.contact-info p {
    color: #666;
    margin-bottom: 20px;
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.contact-method {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 12px;
    background: #f8f9fa;
    border-radius: 8px;
    text-decoration: none;
    color: #333;
    transition: all 0.3s ease;
}

.contact-method:hover {
    background: #eee;
}

.contact-method.whatsapp {
    background: #25d366;
    color: white;
}

.contact-method.whatsapp:hover {
    background: #128c7e;
}

@media (max-width: 768px) {
    .login-box {
        padding: 30px 20px;
    }

    .form-options {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }

    .category-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .contact-methods {
        flex-direction: column;
    }
}
</style>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleButton = document.querySelector('.toggle-password i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.classList.remove('fa-eye');
        toggleButton.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleButton.classList.remove('fa-eye-slash');
        toggleButton.classList.add('fa-eye');
    }
}
</script>
@endsection
