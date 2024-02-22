<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)

    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect('/users');
        } else {
            return redirect()->back()->withErrors([
                'login' => 'Login ve ya parol sehvdir'
            ]);
        }
    }

    public function loginView()
    {
        return view('backend.users.login_form');
    }


}
