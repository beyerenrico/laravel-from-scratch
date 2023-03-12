<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'required',
                'min:8',
                'max:255'
            ]
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'You have been logged in.');
        }

        throw ValidationException::withMessages([
            'validation' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You have been logged out.');
    }
}
