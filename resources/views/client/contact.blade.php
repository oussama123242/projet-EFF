@extends('layouts.client')

@section('title', 'Contact')

@section('content')
    <h2>Contactez-nous</h2>
    <p>Pour toute question ou demande d'information, veuillez remplir le formulaire ci-dessous.</p>
    <form action="#" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        
        <label for="message">Message :</label>
        <textarea name="message" id="message" required></textarea>
        
        <button type="submit">Envoyer</button>
    </form>
@endsection
