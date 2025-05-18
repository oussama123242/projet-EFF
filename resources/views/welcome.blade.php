@extends('layouts.client')

@section('title', 'Accueil')

@section('content')
    <style>
        #slider {
            width: 100%;
            height: 85vh;
            overflow: hidden;
            position: relative;
        }

        .slide {
            width: 100%;
            height: 100%;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .slide.active {
            opacity: 1;
        }

        .overlay-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 1200px;
            text-align: center;
            z-index: 10;
        }

        .main-title {
            font-size: 4rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            line-height: 1.2;
            text-shadow: 2px 4px 8px rgba(0, 0, 0, 0.3);
            font-family: 'Poppins', sans-serif;
        }

        .sub-title {
            font-size: 2.2rem;
            color: #c8b53e;
            margin-bottom: 3rem;
            font-weight: 500;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Poppins', sans-serif;
        }

        .search-form {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            max-width: 900px;
            margin: 0 auto;
        }

        .search-form select {
            padding: 15px 25px;
            border: 2px solid #eee;
            border-radius: 12px;
            background: white;
            color: #333;
            font-size: 1.1rem;
            font-weight: 500;
            min-width: 250px;
            cursor: pointer;
            transition: all 0.3s ease;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        .search-form select:hover {
            border-color: #c8b53e;
            box-shadow: 0 4px 15px rgba(200, 181, 62, 0.1);
        }

        .search-form select:focus {
            border-color: #c8b53e;
            box-shadow: 0 0 0 3px rgba(200, 181, 62, 0.2);
        }

        .search-form button {
            padding: 15px 40px;
            background: #c8b53e;
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .search-form button:hover {
            background: #b3a136;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(200, 181, 62, 0.3);
        }

        .search-form button i {
            font-size: 1.2rem;
            color: white;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        @media (max-width: 768px) {
            #slider {
                height: 100vh;
            }

            .main-title {
                font-size: 2.5rem;
                padding: 0 1rem;
            }

            .sub-title {
                font-size: 1.5rem;
                padding: 0 1rem;
            }

            .search-form {
                flex-direction: column;
                padding: 1.5rem;
                width: 90%;
            }

            .search-form select,
            .search-form button {
                width: 100%;
                min-width: unset;
            }
        }

        /* Import Google Font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        .featured-section {
            padding: 50px 20px;
            background: #f9f9f9;
        }

        .featured-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .featured-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .featured-card:hover {
            transform: translateY(-5px);
        }

        .featured-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .featured-info {
            padding: 20px;
        }

        .featured-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .featured-details {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .featured-price {
            color: #c8b53e;
            font-weight: bold;
            font-size: 1.1rem;
            margin-top: 10px;
        }
    </style>

    <div id="slider">
        <div class="overlay-container">
            <div class="main-title fade-in-up">
                1<sup>er</sup> GUIDE DE LOCATION<br>
                DE SALLES AU MAROC
            </div>
            <div class="sub-title fade-in-up" style="animation-delay: 0.3s">
                TROUVEZ VOTRE SALLE EN 1 CLIC
            </div>

            <form class="search-form fade-in-up" id="searchForm" style="animation-delay: 0.6s">
                <select name="type" required>
                    <option value="">Type d'événement</option>
                    <option value="mariage">Mariage</option>
                    <option value="anniversaire">Anniversaire</option>
                    <option value="entreprise">Entreprise</option>
                    <option value="reunion">Réunion</option>
                </select>

                <select name="ville" required>
                    <option value="">Ville</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Tanger">Tanger</option>
                </select>

                <button type="button" onclick="submitSearch()">
                    <i class="fas fa-search"></i>
                    Rechercher une salle
                </button>
            </form>
        </div>

        @php
            use Illuminate\Support\Facades\File;
            $images = File::files(public_path('images/mariage'));
        @endphp

        @foreach ($images as $index => $image)
            <img src="{{ asset('images/mariage/' . $image->getFilename()) }}"
                class="slide {{ $index === 0 ? 'active' : '' }}"
                alt="Salle de mariage">
        @endforeach
    </div>

    <!-- Section Salles à la une -->
    <section class="featured-section">
        <h2 class="featured-title">Salles à la une</h2>
        <div class="featured-grid">
            <!-- Salle 1 -->
            <div class="featured-card">
                <img src="{{ asset('images/mariage/salle1.jpg') }}" alt="Salle de luxe" class="featured-image">
                <div class="featured-info">
                    <h3 class="featured-name">Palais Royal Events</h3>
                    <p class="featured-details">📍 Casablanca, Ain Diab</p>
                    <p class="featured-details">👥 Capacité: 300-500 personnes</p>
                    <p class="featured-price">À partir de 15000 DH</p>
                </div>
            </div>

            <!-- Salle 2 -->
            <div class="featured-card">
                <img src="{{ asset('images/mariage/salle2.jpg') }}" alt="Salle moderne" class="featured-image">
                <div class="featured-info">
                    <h3 class="featured-name">Le Grand Plaza</h3>
                    <p class="featured-details">📍 Marrakech, Guéliz</p>
                    <p class="featured-details">👥 Capacité: 200-400 personnes</p>
                    <p class="featured-price">À partir de 12000 DH</p>
                </div>
            </div>

            <!-- Salle 3 -->
            <div class="featured-card">
                <img src="{{ asset('images/mariage/salle3.jpg') }}" alt="Salle élégante" class="featured-image">
                <div class="featured-info">
                    <h3 class="featured-name">L'Espace Prestige</h3>
                    <p class="featured-details">📍 Rabat, Hay Riad</p>
                    <p class="featured-details">👥 Capacité: 150-300 personnes</p>
                    <p class="featured-price">À partir de 10000 DH</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        setInterval(() => {
            slides[index].classList.remove('active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('active');
        }, 3000);

        function submitSearch() {
            const form = document.getElementById('searchForm');
            const type = form.querySelector('select[name="type"]').value;
            const ville = form.querySelector('select[name="ville"]').value;

            if (type && ville) {
                window.location.href = `/services/${type}?ville=${ville}`;
            }
        }
    </script>
@endsection