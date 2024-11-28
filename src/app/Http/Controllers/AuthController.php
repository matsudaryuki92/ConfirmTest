<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerUser(AuthRequest $request)
    {
        $contact = $request->only('name', 'email', 'password');
        $contact['password'] = Hash::make($contact['password']);
        $user = User::create($contact);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginUser(AuthRequest $request)
    {
        $user = $request->only('email', 'password');
        

        return redirect()->route('auth/admin');
    }
}
