@extends('layouts.client')

@section('title', 'Réservation')

@section('content')
<div class="reservation-page">
    <div class="reservation-header">
        <h2>Réserver une salle</h2>
        <p>Remplissez le formulaire ci-dessous pour réserver votre salle de fête</p>
    </div>

    <form method="POST" action="{{ route('reservations.store') }}" class="reservation-form">
        @csrf
        
        <!-- Informations personnelles -->
        <div class="form-section">
            <h3><i class="fas fa-user"></i> Informations personnelles</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
            </div>
        </div>

        <!-- Détails de l'événement -->
        <div class="form-section">
            <h3><i class="fas fa-calendar-alt"></i> Détails de l'événement</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="type_evenement">Type d'événement</label>
                    <select id="type_evenement" name="type_evenement" required>
                        <option value="">Sélectionnez le type</option>
                        <option value="mariage">Mariage</option>
                        <option value="anniversaire">Anniversaire</option>
                        <option value="conference">Conférence</option>
                        <option value="seminaire">Séminaire</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date de l'événement</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="heure_debut">Heure de début</label>
                    <input type="time" id="heure_debut" name="heure_debut" required>
                </div>
                <div class="form-group">
                    <label for="heure_fin">Heure de fin</label>
                    <input type="time" id="heure_fin" name="heure_fin" required>
                </div>
                <div class="form-group">
                    <label for="nombre_invites">Nombre d'invités</label>
                    <input type="number" id="nombre_invites" name="nombre_invites" min="1" required>
                </div>
            </div>
        </div>

        <!-- Services supplémentaires -->
        <div class="form-section">
            <h3><i class="fas fa-concierge-bell"></i> Services supplémentaires</h3>
            <div class="services-grid">
                <label class="service-option">
                    <input type="checkbox" name="services[]" value="traiteur">
                    <span class="service-content">
                        <i class="fas fa-utensils"></i>
                        <span>Traiteur</span>
                    </span>
                </label>
                <label class="service-option">
                    <input type="checkbox" name="services[]" value="decoration">
                    <span class="service-content">
                        <i class="fas fa-paint-brush"></i>
                        <span>Décoration</span>
                    </span>
                </label>
                <label class="service-option">
                    <input type="checkbox" name="services[]" value="musique">
                    <span class="service-content">
                        <i class="fas fa-music"></i>
                        <span>Musique/DJ</span>
                    </span>
                </label>
                <label class="service-option">
                    <input type="checkbox" name="services[]" value="photo">
                    <span class="service-content">
                        <i class="fas fa-camera"></i>
                        <span>Photographe</span>
                    </span>
                </label>
            </div>
        </div>

        <!-- Message supplémentaire -->
        <div class="form-section">
            <h3><i class="fas fa-comment"></i> Message supplémentaire</h3>
            <div class="form-group">
                <textarea name="message" rows="4" placeholder="Ajoutez des détails supplémentaires sur votre événement..."></textarea>
            </div>
        </div>

        <button type="submit" class="submit-btn">
            <i class="fas fa-paper-plane"></i> Envoyer la demande
        </button>
    </form>
</div>

<style>
.reservation-page {
    max-width: 800px;
    margin: 40px auto;
    padding: 0 20px;
}

.reservation-header {
    text-align: center;
    margin-bottom: 40px;
}

.reservation-header h2 {
    color: #333;
    font-size: 2rem;
    margin-bottom: 10px;
}

.reservation-header p {
    color: #666;
}

.form-section {
    background: white;
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.form-section h3 {
    color: #333;
    font-size: 1.2rem;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.form-section h3 i {
    color: #c8b53e;
}

.form-grid {
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
    color: #555;
    font-weight: 500;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #c8b53e;
    outline: none;
    box-shadow: 0 0 0 2px rgba(200, 181, 62, 0.1);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
}

.service-option {
    cursor: pointer;
}

.service-option input {
    display: none;
}

.service-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    padding: 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.service-content i {
    font-size: 24px;
    color: #666;
}

.service-option input:checked + .service-content {
    border-color: #c8b53e;
    background: rgba(200, 181, 62, 0.1);
}

.service-option input:checked + .service-content i {
    color: #c8b53e;
}

.submit-btn {
    background: #c8b53e;
    color: white;
    border: none;
    padding: 15px 30px;
    border-radius: 8px;
    font-size: 1.1rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 auto;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    background: #b3a136;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .form-grid {
        grid-template-columns: 1fr;
    }

    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .submit-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>
@endsection
