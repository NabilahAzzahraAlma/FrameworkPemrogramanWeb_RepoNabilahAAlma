# 🚀 Praktikum Framework Pemrograman Web – Pertemuan 7

## 📌 Deskripsi Tugas

Project ini dibuat untuk memenuhi Tugas ke-5 Praktikum Mata Kuliah Framework Pemrograman Web pada pertemuan ketujuh. Materi yang diimplementasikan meliputi:

-   Pembuatan form Master Product untuk menyimpan data ke tabel `products`.
-   Pengembangan fungsionalitas CRUD (Create, Read, Update, Delete) agar data produk dapat:
    -   ✅ Ditampilkan dalam bentuk tabel.
    -   ✅ Diedit jika terjadi kesalahan input.
    -   ✅ Dihapus jika sudah tidak dibutuhkan.
-   Penambahan navigasi berbasis dropdown agar fitur CRUD dapat diakses tanpa mengetik URL manual.
-   Pemisahan proyek tugas dari proyek praktikum untuk menjaga struktur dan fokus pengembangan.

Aplikasi ini dibangun menggunakan Laravel 12.x dan PHP 8.3.16, serta telah disesuaikan dengan instruksi tugas praktikum.

---

## 📂 Struktur Project (Relevan)

Tugas5Prak_Pertemuan7/
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ └── ProductController.php (CRUD -nya)
│ │ └── Middleware/
│ ├── Models/
│ │ └── Products.php (Model Products -nya)
│
├── resources/
│ └── views/
│ └── master-data/
│ └── product-master/
│ ├── index.blade.php (tampilkan tabel produk)
│ ├── create-product.blade.php (form tambah produk)
│ └── edit-product.blade.php (form edit produk)
│
├── routes/
│ └── web.php (rute CRUD)
│
├── database/
│ ├── migrations/
│ │ └── 2025_xx_xx_create_products_table.php (struktur tabel)
│ └── seeders/
│ └── ProductsSeeder.php (data awal (opsional))
│
├── public/
│ └── index.php
│
├── .env
├── composer.json
├── package.json
├── README.md
└── .gitignore

---

## ⚙️ Implementasi Fitur

-   CRUD Produk:

    -   `index()` → Menampilkan semua produk dalam tabel.
    -   `create()` → Menampilkan form tambah produk.
    -   `store()` → Menyimpan data produk ke database.
    -   `edit()` → Menampilkan form edit produk.
    -   `update()` → Memperbarui data produk.
    -   `destroy()` → Menghapus produk dari database.

-   Navigasi:

    -   Dropdown “Data Master” ditambahkan ke layout dashboard.
    -   Link menuju “Lihat Tabel Produk” dan “Tambah Produk Baru” tersedia di dropdown.

-   Validasi:
    -   Form menggunakan `@csrf` dan validasi Laravel untuk keamanan dan stabilitas input.

---

## 🖥️ Tampilan Aplikasi

-   Halaman dashboard menampilkan dropdown “Data Master” untuk akses CRUD.
-   Tabel produk menampilkan semua data yang telah disimpan.
-   Form edit dan tambah produk menggunakan desain responsif dan validasi input.

---

## 📎 Yang Dikumpulkan

-   ✅ Tautan Repository GitHub – berisi seluruh kode project tugas
-   ✅ PDF Screenshot Tampilan Projek – menampilkan halaman dashboard, tabel produk, dan form edit

---

## 👩‍💻 Dibuat oleh

-   Nama: Nabilah A Alma
-   NIM: 2310-035
-   Mata Kuliah: Framework Pemrograman Web
-   Pertemuan: 7
-   Tugas: 5

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
