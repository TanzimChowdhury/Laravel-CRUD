<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    public function store()
    {
        //register the User

        //Validate the input
        $attr = request()->validate([
                'username' => 'required | min:5 | max:255 | unique:users',
                'email' => 'required | email | max:255  | unique:users',
                'password' => 'required | max:255',
                'user_type' => 'required'
            ]
        );

//        var_dump(request()->all());
        //Pipe the user's password
        // setPasswordAttribute method made

        //Create the user
        $user = User::create($attr);

        //Assign role to user
        $user->assignRole(request()->get('user_type'));

        //Create a flash message
        session()->flash("success","Account Created, Please log in");
        //redirect the user to the login page
        return redirect('/login') ;
    }

    public function create(){
        return view('register');
    }

}
