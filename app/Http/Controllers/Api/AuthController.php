<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return [
                'success' => false,
                'message' => $validator->messages()->first()
            ];
        }
        $user = new User();
        $user->fill($validator->validated());
        $user->save();
        return [
            'success' => true,
            'user' => $user
        ];
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',

        ]);
        if ($validator->fails()) {
            return [
                'success' => false,
                'message' => $validator->messages()->first()
            ];
        }

        $user = User::where('email', $request->get('email'))->first();

        if (!$user || !Hash::check($request->get('password'), $user->password)) {
            return [
                'success' => false,
                'message' => 'Invalid Credentials'
            ];
        }

        $token = $user->createToken($user->name . '-AuthToken')->plainTextToken;
        return [
            'token' => $token,
            'user' => $user
        ];
    }
}
