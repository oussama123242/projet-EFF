<!-- Main Navigation -->
<nav x-data="{ open: false }" class="wedding-nav">
    <div class="nav-container">
        <div class="nav-wrapper">
            <!-- Logo and Brand -->
            <div class="nav-brand">
                <a href="{{ route('dashboard') }}" class="brand-link">
                    <x-application-logo class="brand-logo" />
                    <span class="brand-name">Fêtes</span>
                </a>
            </div>

            <!-- Main Navigation Links -->
            <div class="nav-links">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Accueil</span>
                </a>
                <a href="#services" class="nav-link">
                    <i class="fas fa-glass-cheers"></i>
                    <span>Nos Services</span>
                </a>
                <a href="#contact" class="nav-link">
                    <i class="fas fa-envelope"></i>
                    <span>Contact</span>
                </a>
            </div>

            <!-- User Menu -->
            @auth
            <div class="user-menu">
                <x-dropdown align="right" width="200">
                    <x-slot name="trigger">
                        <button class="user-menu-button">
                            <img src="{{ Auth::user()->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                                 alt="{{ Auth::user()->name }}" 
                                 class="user-avatar">
                            <span class="user-name">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="dropdown-menu">
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fas fa-user"></i>
                                <span>{{ __('Mon Profil') }}</span>
                            </a>
                            <a href="{{ route('reservations.index') }}" class="dropdown-item">
                                <i class="fas fa-calendar-check"></i>
                                <span>Mes Réservations</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>{{ __('Déconnexion') }}</span>
                                </button>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
            @else
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Connexion</span>
                </a>
                <a href="{{ route('register') }}" class="btn-register">
                    <span>Inscription</span>
                </a>
            </div>
            @endauth

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="mobile-menu-button">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" 
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div :class="{'block': open, 'hidden': !open}" class="mobile-nav">
        <a href="{{ route('dashboard') }}" class="mobile-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="fas fa-home"></i>
            <span>Accueil</span>
        </a>
        <a href="#services" class="mobile-nav-link">
            <i class="fas fa-glass-cheers"></i>
            <span>Nos Services</span>
        </a>
        <a href="#contact" class="mobile-nav-link">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
        
        @auth
        <div class="mobile-user-menu">
            <div class="mobile-user-info">
                <img src="{{ Auth::user()->profile_photo_url ?? asset('images/default-avatar.png') }}" 
                     alt="{{ Auth::user()->name }}" 
                     class="mobile-user-avatar">
                <div class="mobile-user-details">
                    <span class="mobile-user-name">{{ Auth::user()->name }}</span>
                    <span class="mobile-user-email">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <a href="{{ route('profile.edit') }}" class="mobile-nav-link">
                <i class="fas fa-user"></i>
                <span>{{ __('Mon Profil') }}</span>
            </a>
            <a href="{{ route('reservations.index') }}" class="mobile-nav-link">
                <i class="fas fa-calendar-check"></i>
                <span>Mes Réservations</span>
            </a>
            <form method="POST" action="{{ route('logout') }}" class="mobile-logout">
                @csrf
                <button type="submit" class="mobile-nav-link text-danger">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>{{ __('Déconnexion') }}</span>
                </button>
            </form>
        </div>
        @else
        <div class="mobile-auth-buttons">
            <a href="{{ route('login') }}" class="mobile-nav-link">
                <i class="fas fa-sign-in-alt"></i>
                <span>Connexion</span>
            </a>
            <a href="{{ route('register') }}" class="mobile-nav-link">
                <i class="fas fa-user-plus"></i>
                <span>Inscription</span>
            </a>
        </div>
        @endauth
    </div>
</nav>

<style>
    .wedding-nav {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .nav-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 70px;
    }

    .nav-brand {
        display: flex;
        align-items: center;
    }

    .brand-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        gap: 0.5rem;
    }

    .brand-logo {
        height: 40px;
        width: auto;
    }

    .brand-name {
        font-size: 1.5rem;
        font-weight: 600;
        color: #3498db;
    }

    .nav-links {
        display: none;
        gap: 2rem;
        margin-left: 2rem;
    }

    @media (min-width: 768px) {
        .nav-links {
            display: flex;
        }
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #2c3e50;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #3498db;
    }

    .nav-link.active {
        color: #3498db;
    }

    .user-menu {
        position: relative;
    }

    .user-menu-button {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border: none;
        background: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .user-menu-button:hover {
        background: #f8f9fa;
        border-radius: 0.5rem;
    }

    .user-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        object-fit: cover;
    }

    .user-name {
        font-weight: 500;
        color: #2c3e50;
    }

    .dropdown-menu {
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1rem;
        color: #2c3e50;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .dropdown-item:hover {
        background: #f8f9fa;
    }

    .dropdown-divider {
        height: 1px;
        background: #e9ecef;
        margin: 0.5rem 0;
    }

    .auth-buttons {
        display: none;
        gap: 1rem;
        align-items: center;
    }

    @media (min-width: 768px) {
        .auth-buttons {
            display: flex;
        }
    }

    .btn-login {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #3498db;
        text-decoration: none;
        font-weight: 500;
    }

    .btn-register {
        padding: 0.5rem 1.5rem;
        background: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 0.5rem;
        font-weight: 500;
        transition: background 0.3s ease;
    }

    .btn-register:hover {
        background: #2980b9;
    }

    .mobile-menu-button {
        display: block;
        padding: 0.5rem;
        color: #2c3e50;
        background: none;
        border: none;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        .mobile-menu-button {
            display: none;
        }
    }

    .mobile-nav {
        background: white;
        padding: 1rem;
        border-top: 1px solid #e9ecef;
    }

    .mobile-nav-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1rem;
        color: #2c3e50;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .mobile-nav-link:hover {
        background: #f8f9fa;
    }

    .mobile-user-menu {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e9ecef;
    }

    .mobile-user-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.75rem 1rem;
    }

    .mobile-user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
    }

    .mobile-user-details {
        display: flex;
        flex-direction: column;
    }

    .mobile-user-name {
        font-weight: 500;
        color: #2c3e50;
    }

    .mobile-user-email {
        font-size: 0.875rem;
        color: #6c757d;
    }

    .mobile-auth-buttons {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e9ecef;
    }

    .text-danger {
        color: #dc3545;
    }

    .mobile-logout {
        margin-top: 1rem;
    }

    .mobile-logout button {
        width: 100%;
        text-align: left;
        border: none;
        background: none;
        cursor: pointer;
    }
</style>
