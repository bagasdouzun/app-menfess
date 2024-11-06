<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/store-signup', [AuthController::class, 'storeSignUp'])->name('storeSignUp');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignIn'])->name('storeSignIn');

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->to('/')->with('success', 'Berhasil logout!');
})->name('logout')->middleware('auth');