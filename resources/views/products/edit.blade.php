@extends('layouts.layout') 


@section('content')
<div class="lg:mx-16 md:mx-16 mx-4 min-h-screen my-16">
    <h1 class="text-3xl font-semibold text-blue-500 text-center mb-8">Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div class="space-y-2">
            <label for="name" class="text-lg font-medium text-gray-700">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product name">
        </div>

        <div class="space-y-2">
            <label for="price" class="text-lg font-medium text-gray-700">Price ($)</label>
            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product price">
        </div>

        <div class="space-y-2">
            <label for="quantity" class="text-lg font-medium text-gray-700">Quantity Available</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product quantity">
        </div>

        <div class="space-y-2">
            <label for="description" class="text-lg font-medium text-gray-700">Product Description</label>
            <textarea name="description" id="description" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5" placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">Update Product</button>
        </div>
    </form>
</div>

@endsection