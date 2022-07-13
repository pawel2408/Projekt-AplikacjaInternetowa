<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('/');
    }

    public function store()
    {
        // VALIDATE THE REQUEST
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // ATTEMPT TO AUTHENTICATE AND LOG IN THE USER
        // BASE ON THE PROVIDED CREDENTIALS
        if(auth()->attempt($attributes))
        {
            session()->regenerate();
            
            return redirect('/')->with('success', 'Witaj, ');
        }

        // REDIRECT WITH A SUCCESS FLASH MESSAGE
        return back()
            ->withInput()
            ->withErrors(['email' => 'Dane się nie zgadzają, sprawdź je ponownie!']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/blog')->with('success', 'Do zobaczenia');
    }
}
