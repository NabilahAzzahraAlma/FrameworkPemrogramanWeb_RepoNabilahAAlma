<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::resource('product', [ProductController::class, 'index']);
Route::get(uri: '/product', action: [ProductController::class, 'index']);

// 4. Hubungkan middleware, controller, dan view. 
Route::get('/product/{angka}', [ProductController::class, 'index'])
    ->middleware('RoleCheck:admin,owner');
// Buat routes yang hanya bisa diakses oleh 'admin' dan 'owner'.

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

Route::get('/rahasia', function (): string {
    return 'Ini path rahasia';
})->middleware(['auth', 'RoleCheck:admin'])->name('rahasia');

Route::get('/admin', function () {
    return 'Halaman Admin';
})->middleware('rolecheck:admin');

require __DIR__ . '/auth.php';
