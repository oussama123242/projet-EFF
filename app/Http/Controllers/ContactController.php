<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Préparer les données
        $data = [
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Envoi de l'email HTML via la classe ContactMessage
        Mail::to('admin@example.com')->send(new ContactMessage($data));

        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès.');
    }
}