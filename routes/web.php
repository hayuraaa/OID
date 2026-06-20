<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('tentang', function () {
    return Inertia::render('Tentang');
})->name('tentang');

Route::get('manifesto', function () {
    return Inertia::render('Manifesto');
})->name('manifesto');

Route::get('aktivitas', function () {
    return Inertia::render('Aktivitas');
})->name('aktivitas');

Route::get('aktivitas/konferensi-open-indonesia-2026', function () {
    return Inertia::render('aktivitas/KonferensiOpenIndonesia2026');
})->name('aktivitas.konferensi-open-indonesia-2026');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/settings.php';
// require __DIR__.'/auth.php';

// Fallback: semua route yang tidak dikenal redirect ke beranda
Route::fallback(function () {
    return redirect('/');
});
