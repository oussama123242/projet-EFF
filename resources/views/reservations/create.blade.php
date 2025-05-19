@extends('layouts.client')

@section('title', 'Réserver une salle')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Filtres de recherche -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Filtres de recherche</h4>
                </div>
                <div class="card-body">
                    <form id="search-form">
                        <div class="mb-3">
                            <label class="form-label">Ville</label>
                            <select class="form-select" id="filter-ville">
                                <option value="">Toutes les villes</option>
                                @foreach($villes as $ville)
                                    <option value="{{ $ville }}">{{ $ville }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Capacité minimale</label>
                            <input type="number" class="form-control" id="filter-capacite" min="0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Budget maximum</label>
                            <input type="number" class="form-control" id="filter-budget" min="0" step="100">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Services disponibles</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="filter-parking">
                                <label class="form-check-label">Parking</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="filter-climatisation">
                                <label class="form-check-label">Climatisation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="filter-cuisine">
                                <label class="form-check-label">Cuisine équipée</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="fas fa-search"></i> Rechercher
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Formulaire de réservation -->
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Formulaire de Réservation</h3>
                    @if($salle)
                        <p class="mb-0 mt-2">Salle sélectionnée : {{ $salle->nom }}</p>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('reservations.store') }}" method="POST" class="reservation-form" id="reservation-form">
                        @csrf
                        
                        <!-- Indicateur d'étapes -->
                        <div class="steps-indicator mb-4">
                            <div class="step active" data-step="1">
                                <span class="step-number">1</span>
                                <span class="step-title">Informations</span>
                            </div>
                            <div class="step" data-step="2">
                                <span class="step-number">2</span>
                                <span class="step-title">Date & Heure</span>
                            </div>
                            <div class="step" data-step="3">
                                <span class="step-number">3</span>
                                <span class="step-title">Services</span>
                            </div>
                        </div>

                        <!-- Étape 1: Informations personnelles -->
                        <div class="form-step" id="step-1">
                            @if(!$salle)
                                <div class="mb-4">
                                    <label for="salle_id" class="form-label">Choisir une salle</label>
                                    <select name="salle_id" id="salle_id" class="form-select" required>
                                        <option value="">Sélectionnez une salle</option>
                                        @foreach($salles as $salle)
                                            <option value="{{ $salle->id }}">{{ $salle->nom }} - {{ $salle->ville }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @else
                                <input type="hidden" name="salle_id" value="{{ $salle->id }}">
                            @endif

                            <div class="mb-4">
                                <label for="nom" class="form-label">Nom complet</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-4">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" required>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>

                        <!-- Étape 2: Date et heure -->
                        <div class="form-step d-none" id="step-2">
                            <div class="mb-4">
                                <label for="date_evenement" class="form-label">Date de l'événement</label>
                                <input type="date" class="form-control" id="date_evenement" name="date_evenement" required>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="heure_debut" class="form-label">Heure de début</label>
                                    <input type="time" class="form-control" id="heure_debut" name="heure_debut" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="heure_fin" class="form-label">Heure de fin</label>
                                    <input type="time" class="form-control" id="heure_fin" name="heure_fin" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="nombre_invites" class="form-label">Nombre d'invités</label>
                                <input type="number" class="form-control" id="nombre_invites" name="nombre_invites" required>
                            </div>

                            <div class="mb-4">
                                <label for="type_evenement" class="form-label">Type d'événement</label>
                                <select class="form-select" id="type_evenement" name="type_evenement" required>
                                    <option value="">Sélectionnez le type d'événement</option>
                                    <option value="mariage">Mariage</option>
                                    <option value="fiancailles">Fiançailles</option>
                                    <option value="anniversaire">Anniversaire</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="button" class="btn btn-primary next-step">Suivant</button>
                            </div>
                        </div>

                        <!-- Étape 3: Services additionnels -->
                        <div class="form-step d-none" id="step-3">
                            <div class="mb-4">
                                <label class="form-label">Services additionnels souhaités</label>
                                <div class="services-grid">
                                    <div class="service-card">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="traiteur" id="service-traiteur">
                                        <label class="service-label" for="service-traiteur">
                                            <i class="fas fa-utensils"></i>
                                            <span>Service traiteur</span>
                                        </label>
                                    </div>
                                    <div class="service-card">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="decoration" id="service-decoration">
                                        <label class="service-label" for="service-decoration">
                                            <i class="fas fa-paint-brush"></i>
                                            <span>Décoration</span>
                                        </label>
                                    </div>
                                    <div class="service-card">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="musique" id="service-musique">
                                        <label class="service-label" for="service-musique">
                                            <i class="fas fa-music"></i>
                                            <span>Animation musicale</span>
                                        </label>
                                    </div>
                                    <div class="service-card">
                                        <input class="form-check-input" type="checkbox" name="services[]" value="photo" id="service-photo">
                                        <label class="service-label" for="service-photo">
                                            <i class="fas fa-camera"></i>
                                            <span>Photographe</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="commentaires" class="form-label">Commentaires ou demandes spéciales</label>
                                <textarea class="form-control" id="commentaires" name="commentaires" rows="4"></textarea>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary prev-step">Précédent</button>
                                <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
}

.form-label {
    font-weight: 600;
    color: #2c3e50;
}

.form-control, .form-select {
    padding: 0.8rem;
    border-radius: 10px;
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
    border-color: #c8b53e;
    box-shadow: 0 0 0 0.2rem rgba(200, 181, 62, 0.25);
}

.steps-indicator {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
}

.steps-indicator::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background: #e0e0e0;
    z-index: 1;
}

.step {
    position: relative;
    z-index: 2;
    background: white;
    padding: 0 1rem;
    text-align: center;
}

.step-number {
    width: 40px;
    height: 40px;
    background: #e0e0e0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    color: #666;
    font-weight: bold;
    transition: all 0.3s ease;
}

.step.active .step-number {
    background: #c8b53e;
    color: white;
}

.step-title {
    font-size: 0.9rem;
    color: #666;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.service-card {
    position: relative;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    border-color: #c8b53e;
    transform: translateY(-2px);
}

.service-card input {
    position: absolute;
    top: 1rem;
    right: 1rem;
}

.service-label {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
}

.service-label i {
    font-size: 2rem;
    color: #c8b53e;
}

.btn {
    padding: 0.8rem 1.5rem;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary {
    background: #c8b53e;
    border-color: #c8b53e;
}

.btn-primary:hover {
    background: #b3a136;
    border-color: #b3a136;
    transform: translateY(-2px);
}

.btn-secondary {
    background: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    background: #5a6268;
    border-color: #5a6268;
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .step-title {
        display: none;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('reservation-form');
    const steps = document.querySelectorAll('.form-step');
    const stepIndicators = document.querySelectorAll('.step');
    const nextButtons = document.querySelectorAll('.next-step');
    const prevButtons = document.querySelectorAll('.prev-step');
    let currentStep = 1;

    function showStep(stepNumber) {
        steps.forEach(step => step.classList.add('d-none'));
        stepIndicators.forEach(indicator => indicator.classList.remove('active'));
        
        document.getElementById(`step-${stepNumber}`).classList.remove('d-none');
        stepIndicators[stepNumber - 1].classList.add('active');
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep < 3) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    // Filtres de recherche
    const searchForm = document.getElementById('search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Implémenter la logique de filtrage ici
            const filters = {
                ville: document.getElementById('filter-ville').value,
                capacite: document.getElementById('filter-capacite').value,
                budget: document.getElementById('filter-budget').value,
                parking: document.getElementById('filter-parking').checked,
                climatisation: document.getElementById('filter-climatisation').checked,
                cuisine: document.getElementById('filter-cuisine').checked
            };
            // Appeler l'API de filtrage avec les paramètres
            console.log('Filtres:', filters);
        });
    }
});
</script>

@endsection
