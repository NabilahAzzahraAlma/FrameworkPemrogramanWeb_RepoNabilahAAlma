<!DOCTYPE html>
<html>
<head><title>User Greeting</title></head>
<body>
    <h2>Menampilkan sapaan sesuai nama user jika diberi, atau default "Guest".</h2>
    <h1>Hello, {{ $name }}</h1>
    <a href="{{ route('home') }}">Kembali ke Home</a>
</body>
</html>