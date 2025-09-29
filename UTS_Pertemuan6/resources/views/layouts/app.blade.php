{{-- soal 4 --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col">

        {{-- Header --}}
        @include('layouts.header')

        {{-- Konten Utama --}}
        <main class="container mx-auto mt-6">
            <div class="w-full max-w-2xl mx-auto">
                @yield('content')
            </div>
        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>
</body>

</html>
