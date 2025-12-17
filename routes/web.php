<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
=======
Route::get('home', function () {
>>>>>>> 01e26ee2c4cffa34680b12be24fc1e0170be1855
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
