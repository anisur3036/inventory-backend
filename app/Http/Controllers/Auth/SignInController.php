<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email'   => 'required',
            'password'=> 'required',
        ]);
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['errors' => ['result'=>'Invalid username/password']], 401);
        }

        return response()->json(compact('token'));
    }
    
}
