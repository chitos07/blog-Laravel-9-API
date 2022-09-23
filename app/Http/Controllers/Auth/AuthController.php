<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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


    public function register(Request $request){

        $request->validate([
           'name' => ['required','string'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        event(new Registered($user));
        if($user){
            return response()->json('done');
        }
    }

}
