<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // return request()->all();
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:7|max:255'
        ]);

        $user = User::create($attributes);

        // LOG USER
        Auth()->login($user);

        return redirect('blog')->with('success', 'Twoje konto zostało utworzone. ');
    }
}
