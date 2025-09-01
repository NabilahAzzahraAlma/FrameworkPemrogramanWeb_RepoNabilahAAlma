<?php
use Illuminate\Support\Facades\Route;

// Membuat Route Dasar
Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/', 'home')->name('home');

// Membuat route dengan nama (named route),
// Route Named dengan view about
Route::get('/about', function () {
    return view('about');
})->name('about.page');

// Menangkap parameter pada route
// Route dengan parameter wajib (menangkap id produk)
Route::get('/product/{id}', function ($id) {
    return view('product', ['id' => $id]);
})->name('product.detail');

// Route dengan parameter opsional dan default
Route::get('/user/{name?}', function ($name = 'Guest') {
    return view('user', ['name' => $name]);
})->name('user.greeting');

// Grouping route
// Grouping Route dengan prefix 'admin' dan nama prefix 'admin.'
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // pastikan file berada di resources/views/admin/dashboard.blade.php
    })->name('dashboard');

    Route::get('/profile', function () {
        return "Halaman Profil Admin";
    })->name('profile');
});

// Route profile di luar admin
Route::get('/profile', function () {
    return view('profile');
})->name('profile');