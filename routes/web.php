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

Route::get('/layout-login', function () {
    return view('authentication.login');
});

Route::get('/layout-register', function () {
    return view('authentication.register');
});

Route::get('/layout-homepage', function () {
    return view('layout.app');
});
