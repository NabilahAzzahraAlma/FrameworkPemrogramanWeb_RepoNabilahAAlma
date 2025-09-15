<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Perpustakaan" class="w-24 mx-auto mb-2">
        <h1 class="text-2xl font-bold text-indigo-700">Selamat Datang di Sistem Perpustakaan</h1>
        <p class="text-sm text-gray-600">Silakan login untuk mengakses layanan kami</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow-md">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-indigo-600 hover:bg-indigo-700 text-white">
                {{ __('Log in') }}
            </x-primary-button>

        </div>

        <!-- Help footer -->
        <div class="mt-6 text-center text-xs text-gray-500">
            &copy; {{ date('Y') }} Sistem Perpustakaan. Hubungi admin jika ada kendala login.
        </div>

    </form>
</x-guest-layout>
