@extends('layouts.client')

@section('title', 'Votre Réservation')

@section('content')
<div class="reservation-container">
    <div class="reservation-steps">
        <div class="step active">
            <span class="step-number">1</span>
            <span class="step-text">Choisir une salle</span>
        </div>
        <div class="step">
            <span class="step-number">2</span>
            <span class="step-text">Détails de l'événement</span>
        </div>
        <div class="step">
            <span class="step-number">3</span>
            <span class="step-text">Confirmation</span>
        </div>
    </div>

    <div class="search-filters">
        <form action="{{ route('salles.search') }}" method="GET" class="filter-form">
            <div class="form-group">
                <label for="ville">Ville</label>
                <select name="ville" id="ville" class="form-control" required>
                    <option value="">Sélectionnez une ville</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Tanger">Tanger</option>
                </select>
            </div>

            <div class="form-group">
                <label for="type">Type d'événement</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Type d'événement</option>
                    <option value="mariage">Mariage</option>
                    <option value="anniversaire">Anniversaire</option>
                    <option value="conference">Conférence</option>
                    <option value="seminaire">Séminaire</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="invites">Nombre d'invités</label>
                <input type="number" name="invites" id="invites" class="form-control" min="1" required>
            </div>

            <button type="submit" class="search-btn">
                <i class="fas fa-search"></i> Rechercher
            </button>
        </form>
    </div>

    <div class="info-section">
        <div class="info-card">
            <i class="fas fa-calendar-check"></i>
            <h3>Réservation Facile</h3>
            <p>Réservez votre salle en quelques clics</p>
        </div>
        <div class="info-card">
            <i class="fas fa-clock"></i>
            <h3>Disponibilité en Temps Réel</h3>
            <p>Consultez les disponibilités instantanément</p>
        </div>
        <div class="info-card">
            <i class="fas fa-shield-alt"></i>
            <h3>Paiement Sécurisé</h3>
            <p>Transactions sécurisées garanties</p>
        </div>
    </div>
</div>

<style>
.reservation-container {
    max-width: 1000px;
    margin: 40px auto;
    padding: 0 20px;
}

.reservation-steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.step {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #666;
}

.step.active {
    color: #c8b53e;
}

.step-number {
    width: 30px;
    height: 30px;
    background: #f0f0f0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

.step.active .step-number {
    background: #c8b53e;
    color: white;
}

.search-filters {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 40px;
}

.filter-form {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    color: #333;
    font-weight: 500;
}

.form-control {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.form-control:focus {
    border-color: #c8b53e;
    outline: none;
}

.search-btn {
    background: #c8b53e;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
    justify-content: center;
    grid-column: 1 / -1;
}

.search-btn:hover {
    background: #b3a136;
}

.info-section {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 40px;
}

.info-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.info-card i {
    font-size: 40px;
    color: #c8b53e;
    margin-bottom: 15px;
}

.info-card h3 {
    color: #333;
    margin-bottom: 10px;
    font-size: 18px;
}

.info-card p {
    color: #666;
    font-size: 14px;
}

@media (max-width: 768px) {
    .reservation-steps {
        flex-direction: column;
        gap: 15px;
    }

    .filter-form {
        grid-template-columns: 1fr;
    }

    .info-section {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
