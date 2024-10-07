<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }

    public function store()
    {
        //  Validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //  if wrong credentials given then throw an error
        if (! Auth::attempt($attributes))
        {
            throw ValidationException::withMessages([
                'email' => 'Sorry, email is not valid, please enter a correct email.'
            ]);
        }

        //  If successful log in, regenerate token
        request()->session()->regenerate();

        return redirect('/');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
