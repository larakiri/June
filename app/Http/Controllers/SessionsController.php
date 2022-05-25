<?php

namespace App\Http\Controllers;

class SessionsController extends Controller
{
    public function store()
    {
        
    $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

                return redirect('/')->with('success', 'Welcome Back!');
            
        }

        return back()
        ->withInput()
        ->withErrors(['email' => 'Wrong data!']);

    }

    public function create()
    {
           return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect('/')->with('success', 'See you!');
    }
}
