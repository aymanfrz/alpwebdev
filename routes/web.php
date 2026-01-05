<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\EventPaymentController;
use App\Http\Controllers\Admin\EventAdminController;
use App\Models\Event;

Route::get('/', function () {
    $featuredEvents = Event::where('is_featured', true)
        ->take(2)
        ->get();

    return view('home', compact('featuredEvents'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events', [EventController::class, 'index'])
    ->name('events');

Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('eventDetail');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return redirect()->route('home');
    })->name('dashboard');

    Route::get('/admin/events/create', [EventAdminController::class, 'create'])
        ->name('admin.events.create');

    Route::post('/admin/events', [EventAdminController::class, 'store'])
        ->name('admin.events.store');

    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('events', EventAdminController::class);
    });

    Route::get('/admin/events/{event}/edit', [EventAdminController::class, 'edit'])
        ->name('admin.events.edit');

    Route::put('/admin/events/{event}', [EventAdminController::class, 'update'])
        ->name('admin.events.update');

    Route::delete('/admin/events/{event}', [EventAdminController::class, 'destroy'])
        ->name('admin.events.destroy');

    Route::post('/events/{event}/register', [EventRegistrationController::class, 'store'])
        ->middleware('auth')
        ->name('events.register');

    Route::get('/payments/{event}',[EventPaymentController::class, 'create']
    )->name('payments.create');

    Route::get('/payments/{registration}', [EventPaymentController::class, 'create'])
        ->name('payments.create');

    Route::post('/payments/{registration}', [EventPaymentController::class, 'store'])
        ->name('payments.store');


    Route::get('/events/{event}/payment', [EventPaymentController::class, 'create'])
        ->name('events.payment.form');

    Route::post('/events/{event}/payment', [EventPaymentController::class, 'store'])
        ->name('events.payment.store');

    Route::get(
        '/events/{event}/participants',
        [EventController::class, 'participants']
    )->name('events.participants');

    Route::delete(
        '/registrations/{registration}',
        [EventRegistrationController::class, 'destroy']
    )->name('registrations.destroy');
});

require __DIR__ . '/auth.php';
