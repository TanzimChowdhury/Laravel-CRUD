<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function store()
    {
        //register the User

        //Validate the input
        $attr = request()->validate([
                'username' => 'required | min:5 | max:255 | unique:users',
                'email' => 'required | email | max:255  | unique:users',
                'password' => 'required | max:255'
            ]
        );

        //Pipe the user's password
        // setPasswordAttribute method made

        //Create the user
        User::create($attr);

        //Create a flash message
        session()->flash("success","Account Created, Please log in");
        //redirect the user to the login page
        return redirect('/login') ;
    }

    public function create(){
        return view('register');
    }

}
