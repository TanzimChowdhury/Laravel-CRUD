<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
//auth()->logout();
    //Associate a role with the user
   //auth()->login();


    return view('welcome');
});

Route::get('/register', [RegisterController::class,'create'])->middleware('guest');

Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [SessionsController::class,'login'])->middleware('guest');

Route::post('/login', [SessionsController::class,'authenticate']);

Route::get('/app_settings',[AdminController::class,'view'])->middleware('onlyAdmin');

Route::post('/logout', [SessionsController::class,'destroy'])->middleware('auth');




