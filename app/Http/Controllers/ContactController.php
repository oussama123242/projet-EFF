<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('client.contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Préparer les données en s'assurant que tout est en string
            $data = [
                'nom' => trim((string) $request->input('nom')),
                'email' => trim((string) $request->input('email')),
                'message' => trim((string) $request->input('message')),
            ];

            // Log des données avant l'envoi
            \Log::info('Tentative d\'envoi de message de contact', [
                'data' => $data,
                'mail_config' => [
                    'driver' => config('mail.default'),
                    'host' => config('mail.mailers.smtp.host'),
                    'port' => config('mail.mailers.smtp.port'),
                    'from_address' => config('mail.from.address'),
                ]
            ]);

            // Envoi de l'email HTML via la classe ContactMessage
            Mail::to('oussamabendoudi29@gmail.com')
                ->send(new ContactMessage($data));

            return redirect()->route('contact.form')
                ->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            // Log détaillé de l'erreur
            \Log::error('Erreur détaillée lors de l\'envoi du message de contact', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'line' => $e->getLine(),
                'file' => $e->getFile(),
                'data' => $data ?? null
            ]);

            return redirect()->route('contact.form')
                ->with('error', 'Une erreur est survenue lors de l\'envoi du message: ' . $e->getMessage());
        }
    }
}