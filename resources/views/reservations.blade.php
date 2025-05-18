@extends('layouts.client')

@section('title', 'Réservation')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Réserver une salle</h2>
    
    <p class="text-center">Veuillez remplir le formulaire ou nous contacter pour plus d'informations.</p>

    <!-- Exemple de formulaire -->
    <form method="POST" action="#">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date de l'événement</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
    </form>
</div>
@endsection
