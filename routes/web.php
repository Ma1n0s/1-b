<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FilterController;

Route::get('/sanctum/csrf-cookie', function (Request $request) {
    $request->session()->regenerateToken();

    return response('CSRF cookie set.', 200);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'showLogoutForm'])->name('logout');

// Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

Route::get('/registerComp', [\App\Http\Controllers\AuthController::class, 'showRegisterCompForm'])->name('registerComp');
Route::post('/registerComp', [\App\Http\Controllers\AuthController::class, 'registerComp']);

Route::get('/SiteRule', [\App\Http\Controllers\AuthController::class, 'showRegisterCompForm'])->name('registerComp');

