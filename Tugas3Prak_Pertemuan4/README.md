# 🚀 Praktikum Framework Pemrograman Web - Pertemuan 4

## 📌 Deskripsi Tugas

Project ini dibuat untuk memenuhi tugas Praktikum Mata Kuliah Framework Pemrograman Web pertemuan keempat. Materi yang diimplementasikan meliputi:

-   Penambahan role baru `'owner'` pada kolom `role` di tabel `users`.
-   Pembuatan `ProductController` dengan method `index` yang menerima parameter angka dari route, kemudian menambahkan angka bebas dan melempar datanya ke view.
-   Pembuatan tampilan Blade untuk menampilkan hasil angka tersebut.
-   Implementasi middleware custom `RoleCheck` yang membatasi akses route hanya untuk user dengan role `'admin'` dan `'owner'`.
-   Pengaturan route yang menghubungkan middleware, controller, dan view sesuai spesifikasi tugas.

Aplikasi ini menggunakan Laravel 12.x dan PHP 8.3.16, dan telah disesuaikan mengikuti instruksi tugas praktikum.

---

## 📂 Struktur Project (Relevan)

project-folder/ ├── app/ │ ├── Http/ │ │ ├── Controllers/ │ │ │ └── ProductController.php │ │ └── Middleware/ │ │ └── RoleCheck.php ├── database/ │ └── migrations/ │ └── 2025_xx_xx_update_role_enum_in_users_table.php ├── resources/ │ └── views/ │ └── product/ │ └── index.blade.php ├── routes/ │ └── web.php ├── .env └── composer.json

---

## ⚙️ Implementasi Fitur

1. **Penambahan Role `owner`**
   Kolom `role` di tabel `users` diubah menggunakan migration agar mendukung nilai `'owner'`.

2. **ProductController**
   Method index menerima parameter angka dari route, menambahkan angka bebas (misalnya +8), dan melempar hasil ke view.

3. **View Blade**
   Menampilkan hasil perhitungan dan role user yang sedang login.

4. **Middleware RoleCheck**
   Membatasi akses hanya untuk role 'admin' dan 'owner'.

5. **Routing**
   Route /product/{angka} hanya bisa diakses oleh user dengan role 'admin' atau 'owner'.

---

## 🖥️ Tampilan Aplikasi

-   Dashboard menampilkan pesan login dan role user.
-   Halaman /product/{angka} menampilkan hasil penjumlahan angka.
-   Akses halaman dibatasi oleh middleware sesuai role.
    PADA LARAVEL 11 (dalam Kolase):

![Screenshot Kolase](D:\GitHub Repo\FrameworkPemrogramanWeb_RepoNabilahAAlma\Tugas3Prak_Pertemuan4\screenshots\ss_pert4_FPW.png)

> **Catatan:** Folder `screenshots/` berisi hasil tangkapan layar aplikasi yang diambil dari browser dan tampilan kode di VS Code.

---

## 📎 Yang Dikumpulkan

1. **Tautan Repository GitHub** – berisi seluruh kode project dan folder `screenshots`.
2. **Screenshot Tampilan Aplikasi** – seperti yang ditampilkan di atas.

👨‍💻 Dibuat oleh
Nama: Nabilah A Alma
NIM:
2310-035
Mata Kuliah: Framework Pemrograman Web

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
