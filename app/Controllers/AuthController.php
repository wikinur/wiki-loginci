<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Login",
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => "Register",
        ];
        return view('auth/register', $data);
    }
}
