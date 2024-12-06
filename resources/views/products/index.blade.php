@extends('layouts.layout') 

@section('content')
<div class="mx-auto max-w-6xl">
    
    <div class="min-h-screen my-16">
        <h1 class="text-3xl font-semibold text-blue-500 text-center mb-8">Products</h1>
        <div class="flex justify-between">
            <a href="{{route('view.products.create')}}" class="bg-green-500 rounded-md text-white px-4 py-2 mb-4">
                <button>Add Product</button>
            </a>
            <form method="GET" action="{{ route('view.products.index') }}" class="mb-4">
                <input type="text" name="search" placeholder="Search Product" class="px-4 py-2 border border-gray-300 rounded-md" value="{{ request()->input('search') }}">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Search</button>
            </form>
        </div>

        <table class="w-full p-4 mx-auto rounded-lg shadow-lg border-collapse bg-white text-center">
            <thead>
                <tr class="bg-gray-300">
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Name</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Description</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Price</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Details</th>
                    <th class="py-3 px-4 text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $product)
                <tr class="border-b border-gray-200 hover:bg-gray-50">
                    <td class="py-3 px-4 text-sm text-gray-700">{{$product->name}}</td>
                    <td class="py-3 px-4 text-sm text-gray-600">{{$product->description}}</td>
                    <td class="py-3 px-4 text-sm font-semibold text-gray-800">${{$product->price}}</td>
                    <td class="py-3 px-4">
                        <a href="{{route('view.products.details', $product->id)}}">
                            <button class="px-4 py-2 text-sm font-medium text-blue-500 border border-blue-500 rounded-md hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                Details
                            </button>
                        </a>
                    </td>
                    <td class="py-3 px-4">
                        <div class="flex gap-2 justify-center">
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                    Edit
                                </button>
                            </a>
                            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            
                {{ $data->links() }}
        </div>
        
        
    </div>
    
</div>
    
@endsection

