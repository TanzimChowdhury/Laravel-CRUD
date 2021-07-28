<?php

namespace App\Http\Controllers;



use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function login(){
        return view('login');
    }

    public function authenticate(){

       $creds =  request()->validate([
            'username'=>'required',
            'password'=>'required',
        ]);

        if(auth()->attempt($creds)){
            return redirect('/home')->with("login","Successfully logged in, welcome ".auth()->user()->username);
        }

        throw ValidationException::withMessages([
            "loginFailed"=>"Invalid Username/Password"
        ]);
    }

    public function destroy(){
        auth()->logout();
        return redirect('home');
    }

}
