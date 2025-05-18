<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['nom', 'prenom', 'telephone', 'password'];

    protected $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }
}
