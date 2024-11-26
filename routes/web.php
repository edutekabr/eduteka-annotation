<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/criar-conta', [UserController::class, 'create'])->name('create-account');
Route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return 'autenticação do usuário!';
})->name('auth');

Route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');
