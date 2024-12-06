<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="py-16 bg-gray-100 font-sans max-w-6xl mx-auto">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl font-semibold text-blue-600 mb-6 tracking-tight">Create New Product</h1>
                <p class="text-gray-600 text-lg leading-relaxed mb-2">Fill out the form below to add a new product to the store.</p>
            </div>

            <form action="{{ route('storeProduct') }}" method="POST" class="p-8 space-y-2" >
                @csrf
                <div class="space-y-2">
                    <label for="name" class="text-lg font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product name">
                </div>

                <div class="space-y-2">
                    <label for="price" class="text-lg font-medium text-gray-700">Price ($)</label>
                    <input type="number" name="price" id="price" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product price">
                </div>

                <div class="space-y-2">
                    <label for="quantity" class="text-lg font-medium text-gray-700">Quantity Available</label>
                    <input type="number" name="quantity" id="quantity" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter product quantity">
                </div>

                <div class="space-y-2">
                    <label for="description" class="text-lg font-medium text-gray-700">Product Description</label>
                    <textarea name="description" id="description" required class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="5" placeholder="Enter product description"></textarea>
                </div>

                

                <div>
                    <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">Create Product</button>
                </div>
            </form>
        </div>

</body>
</html>
