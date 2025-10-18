<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-5 text-2xl font-bold">Create New Product</h2>

                    @if (session('success'))
                        <div class="mb-4 text-green-600 font-semibold">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('product-store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="product_name" class="block text-sm font-medium text-gray-700">Product
                                Name</label>
                            <input type="text" id="product_name" name="product_name"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div>
                            <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                            <select id="unit" name="unit"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                                <option value="" disabled selected>Select a unit</option>
                                <option value="kg">Kilogram</option>
                                <option value="ltr">Liter</option>
                                <option value="pcs">Pieces</option>
                                <option value="box">Box</option>
                            </select>
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" id="type" name="type"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div>
                            <label for="information" class="block text-sm font-medium text-gray-700">Information</label>
                            <textarea id="information" name="information" rows="3"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                        </div>

                        <div>
                            <label for="qty" class="block text-sm font-medium text-gray-700">Quantity</label>
                            <input type="number" id="qty" name="qty"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div>
                            <label for="producer" class="block text-sm font-medium text-gray-700">Producer</label>
                            <input type="text" id="producer" name="producer"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
