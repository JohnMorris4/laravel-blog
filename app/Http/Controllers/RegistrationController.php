<?php

namespace App\Http\Controllers;

use App\User;


class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store() {
        //Validate the request
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //Create and save new user
        $user  = User::create(request(['name', 'email', 'password']));
        //Sign them in
        auth()->login($user);
        //Redirect
        return redirect()->home();
    }
}
