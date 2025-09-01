<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
    <h2>Halaman utama landing page aplikasi <b>website profil pengguna.</b></h2>
        <nav>
            <ul>
                <li><a href="{{ route('about.page') }}">About</a></li>
                <li><a href="{{ route('product.detail', ['id' => 100]) }}">Produk 100</a></li>
                <li><a href="{{ route('user.greeting') }}">User (Guest)</a></li>
                <li><a href="{{ route('user.greeting', ['name' => 'Budi']) }}">User Budi</a></li>
                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
            </ul>
        </nav>
</body>
</html>