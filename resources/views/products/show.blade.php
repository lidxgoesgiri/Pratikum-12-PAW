<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                        <p class="text-gray-900">{{ $product->name }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                        <p class="text-gray-900">{{ $product->price }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
                        <p class="text-gray-900">{{ $product->stock }}</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">SKU:</label>
                        <p class="text-gray-900">{{ $product->sku }}</p>
                    </div>
                    
                    <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-800">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
