<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return view('auth/login');});
Route::get('/register', function () { return view('auth/register');});



// ________________________organisateur______________

Route::get('/organisateur/annocement', function () { return view('organisateur/annocement');});
// Route::get('/organisateur/edite-annonce/{id}', function () { return view('organisateur/edite-annonce');});
// Route::get('/organisateur/reservation', function () { return view('organisateur/reservation');});