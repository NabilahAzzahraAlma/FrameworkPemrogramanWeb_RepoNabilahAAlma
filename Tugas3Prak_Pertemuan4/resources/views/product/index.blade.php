{{-- 3. Buat tampilan(view) dengan blade untuk menampilkan data(angka) tersebut --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Calculation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">

                    {{-- Hasil perhitungan --}}
                    <div>
                        <p class="text-lg font-semibold">
                            {{ __('Hasil Perhitungan') }}
                        </p>
                        <p class="text-lg">
                            <span class="font-bold text-indigo-900">
                                <p class="text-3xl font-extrabold text-green-600">
                                    {{ $hasil }}
                                </p>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
