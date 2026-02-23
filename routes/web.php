<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home & static pages
Route::get('/', fn() => view('home'));
Route::get('/home', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/services', fn() => view('services'));
Route::get('/contact', fn() => view('contact'));
Route::get('/login', fn() => view('login'));
Route::get('/register', fn() => view('register'));

// Contact form POST route
Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    DB::table('contacts')->insert($validated);

    return redirect('/contact')->with('success', 'Message sent!');
})->name('contact.submit');
// Login routes
Route::post('/login', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    // demo redirect
    return redirect('/home');
})->name('login.submit');

// Register routes
Route::post('/register', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required'
    ]);
    // demo redirect
    return redirect('/home');
})->name('register.submit');
