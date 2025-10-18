# 🚀 Praktikum Framework Pemrograman Web – Pertemuan 4

## 📌 Deskripsi Tugas

Project ini dibuat untuk memenuhi tugas Praktikum Mata Kuliah Framework Pemrograman Web pertemuan keempat. Materi yang diimplementasikan meliputi:

-   Pembuatan route dinamis `/product/{parameter}` yang menerima angka sebagai parameter.
-   Penanganan parameter di controller untuk menentukan apakah angka tersebut ganjil atau genap.
-   Pengiriman data alert ke view dengan tipe `success` untuk genap dan `warning` untuk ganjil.
-   Pembuatan komponen Blade `<x-alert>` untuk menampilkan pesan dengan styling Bootstrap.
-   Integrasi komponen ke halaman produk agar alert tampil sesuai tipe dan isi pesan.

Aplikasi ini menggunakan Laravel 12.x dan PHP 8.3.16, dan telah disesuaikan mengikuti instruksi tugas praktikum.

---

## 📂 Struktur Project (Relevan)

Tugas4Prak_Pertemuan5/
├── app/
│ └── Http/
│ └── Controllers/
│ └── ProdukController.php
├── resources/
│ └── views/ │
├── produk.blade.php
│ └── components/
│ └── alert.blade.php
├── routes/
│ └── web.php
├── .env
└── composer.json

---

## ⚙️ Implementasi Fitur

-   **Route Dinamis**  
    Route `/product/{angka}` dibuat untuk menerima angka sebagai parameter.

-   **ProdukController**  
    Method `show()` memeriksa apakah angka ganjil atau genap, lalu menentukan tipe alert (`warning` atau `success`) dan isi pesan.

-   **Komponen Alert**  
    Komponen Blade `<x-alert>` dibuat menggunakan `php artisan make:component Alert`, lalu dikustomisasi agar mendukung tipe alert Bootstrap.

-   **View Produk**  
    Halaman `produk.blade.php` menampilkan komponen `<x-alert>` dengan data yang dikirim dari controller.

-   **Bootstrap Styling**  
    Tampilan alert menggunakan kelas Bootstrap seperti `alert-warning` dan `alert-success`.

---

## 🖥️ Tampilan Aplikasi

-   Halaman `/produk/{angka}` menampilkan alert sesuai nilai parameter:
    -   Ganjil → alert kuning (`warning`)
    -   Genap → alert hijau (`success`)
-   Komponen alert muncul di halaman dengan styling Bootstrap.

---

## 📎 Yang Dikumpulkan

-   ✅ Tautan Repository GitHub – berisi seluruh kode project
-   ✅ PDF Screenshot Tampilan Projek

---

## 👩‍💻 Dibuat oleh

-   **Nama**: Nabilah A Alma
-   **NIM**: 2310-035
-   **Mata Kuliah**: Framework Pemrograman Web

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
