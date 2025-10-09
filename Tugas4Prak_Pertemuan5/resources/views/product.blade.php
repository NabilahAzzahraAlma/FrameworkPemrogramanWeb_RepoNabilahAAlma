{{-- 5. Panggil komponen pada halaman produk dengan:
```
<x-alert type="(data alert type yg dikirim)">(data pesan yg dikirim)</x-alert>
``` --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Calculation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-semibold">
                    <div class="container mt-5">
                        <span class="font-bold text-indigo-900">
                            <x-alert type="{{ $type }}">{{ $pesan }}</x-alert></span>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
