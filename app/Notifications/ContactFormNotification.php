<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactFormNotification extends Notification
{
    use Queueable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouveau message de contact')
            ->greeting('Bonjour!')
            ->line('Vous avez reçu un nouveau message de contact:')
            ->line('Nom: ' . $this->data['nom'])
            ->line('Email: ' . $this->data['email'])
            ->line('Message:')
            ->line($this->data['message'])
            ->salutation('Cordialement');
    }
} 