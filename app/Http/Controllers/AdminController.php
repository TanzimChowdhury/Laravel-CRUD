<?php

namespace App\Http\Controllers;

use http\Env\Response;

class AdminController extends Controller
{

    public function view(){
            return view('settings');
    }
}
