<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Notifications\ContactFormNotification;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('client.contact');
    }

    public function submit(Request $request)
    {
        try {
            // Validation des données
            $validated = $request->validate([
                'nom' => 'required|string|max:255',
                'email' => 'required|email',
                'message' => 'required|string|min:10',
            ]);

            // Préparer les données
            $data = [
                'nom' => $validated['nom'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ];

            // Log les données avant l'envoi
            Log::info('Tentative d\'envoi d\'email', ['email' => $validated['email']]);

            // Créer une instance d'Admin avec l'email de configuration
            $admin = new Admin(config('mail.admin.address', 'admin@example.com'));
            
            // Envoyer la notification
            $admin->notify(new ContactFormNotification($data));

            // Log le succès
            Log::info('Email envoyé avec succès');

            return back()->with('success', 'Votre message a été envoyé avec succès !');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Erreur de validation', ['errors' => $e->errors()]);
            return back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Log l'erreur détaillée
            Log::error('Erreur lors de l\'envoi de l\'email', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()
                ->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.')
                ->withInput();
        }
    }
}