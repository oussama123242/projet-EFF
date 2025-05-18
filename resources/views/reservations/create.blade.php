@extends('layouts.client')

@section('title', 'Réserver une salle')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Formulaire de Réservation</h3>
                    @if($salle)
                        <p class="mb-0 mt-2">Salle sélectionnée : {{ $salle->nom }}</p>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('reservations.store') }}" method="POST" class="reservation-form">
                        @csrf
                        @if($salle)
                            <input type="hidden" name="salle_id" value="{{ $salle->id }}">
                        @else
                            <div class="mb-4">
                                <label for="salle_id" class="form-label">Choisir une salle</label>
                                <select name="salle_id" id="salle_id" class="form-select" required>
                                    <option value="">Sélectionnez une salle</option>
                                    @foreach($salles as $salle)
                                        <option value="{{ $salle->id }}">{{ $salle->nom }} - {{ $salle->ville }}</option>
                                    @endforeach
                                </select>
                            </div>
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

                        <div class="mb-4">
                            <label for="services_additionnels" class="form-label">Services additionnels souhaités</label>
                            <div class="services-grid">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="traiteur" id="service-traiteur">
                                    <label class="form-check-label" for="service-traiteur">Service traiteur</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="decoration" id="service-decoration">
                                    <label class="form-check-label" for="service-decoration">Décoration</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="musique" id="service-musique">
                                    <label class="form-check-label" for="service-musique">Animation musicale</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="photo" id="service-photo">
                                    <label class="form-check-label" for="service-photo">Photographe</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="commentaires" class="form-label">Commentaires ou demandes spéciales</label>
                            <textarea class="form-control" id="commentaires" name="commentaires" rows="4"></textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Envoyer la demande de réservation</button>
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
    border-color: #3498db;
    box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
}

.form-check {
    padding: 0.5rem;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.form-check:hover {
    background: #e9ecef;
}

.btn-primary {
    padding: 1rem 2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
