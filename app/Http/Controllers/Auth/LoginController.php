<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // ← هذا مهم بزاف
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/reservations/create';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
