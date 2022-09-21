<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function Login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
          $token =  Auth::user()->createToken('UserLogin');

            return response()->json([
               'user' => Auth::user(),
                'token' => $token->plainTextToken
            ]);
        }

        return response()->json('Invalid info');
    }

}
