<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|min:3|max:14',
            'username' => 'required|min:3|max:14|unique:users,username',
            'email' => 'required|email|max:40|unique:users,email',
            'password' => 'required|min:6|max:22',
            ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been successfully created.');
    }
}
