<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return \Inertia\Inertia::render('Index');
});

Route::get('/dashboard', function () {
    return \Inertia\Inertia::render('New/Dashboard');
});

Route::get('/register', function () {
    return \Inertia\Inertia::render('New/Register');
});

Route::get('/login', function () {
    return \Inertia\Inertia::render('New/Login');
});
