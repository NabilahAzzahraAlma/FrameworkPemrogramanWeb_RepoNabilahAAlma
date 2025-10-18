<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Product Master') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('product-create') }}"
                    class="mb-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded">+ Add Product</a>
                <table class="min-w-full table-auto border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Unit</th>
                            <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Qty</th>
                            <th class="px-4 py-2">Producer</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border px-4 py-2">{{ $product->product_name }}</td>
                                <td class="border px-4 py-2">{{ $product->unit }}</td>
                                <td class="border px-4 py-2">{{ $product->type }}</td>
                                <td class="border px-4 py-2">{{ $product->qty }}</td>
                                <td class="border px-4 py-2">{{ $product->producer }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('product-edit', $product->id) }}" class="text-blue-600">Edit</a> |
                                    <form action="{{ route('product-destroy', $product->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600"
                                            onclick="return confirm('Delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
