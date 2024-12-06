<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    <div class="max-w-6xl py-16 mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden transition-transform transform hover:shadow-xl">
            <div class="p-8">
                <h1 class="text-3xl font-semibold text-blue-600 mb-6 tracking-tight">Product Name</h1>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">A detailed explanation of the product that outlines its key features and benefits. This section can help persuade potential customers.</p>
            </div>

            <div class="flex flex-col sm:flex-row p-6 gap-8 sm:gap-12">
                <div class="sm:w-1/2 flex flex-col justify-between">
                    <div class="space-y-4">
                        <p class="text-lg text-gray-700"><span class="font-semibold text-gray-900">Product ID:</span> <span class="text-gray-600">{{$product->name}}</span></p>
                        <p class="text-lg text-gray-700"><span class="font-semibold text-gray-900">Price:</span> <span class="text-gray-900">${{$product->price}}</span></p>
                        <p class="text-lg text-gray-700"><span class="font-semibold text-gray-900">Quantity Available:</span> <span class="text-gray-900">{{$product->quantity}}</span></p>
                        <p class="text-lg text-gray-700"><span class="font-semibold text-gray-900">Created At:</span> <span class="text-gray-600">{{$product->created_at}}</span></p>
                        <p class="text-lg text-gray-700"><span class="font-semibold text-gray-900">Last Updated:</span> <span class="text-gray-600">{{$product->updated_at}}</span></p>
                    </div>
                </div>

               
            </div>

            <div class="p-6 bg-gray-50 flex justify-between items-center">
                <button class="bg-blue-500 text-white py-2 px-6 rounded-lg text-lg hover:bg-blue-700 transition-all duration-300">Edit</button>
                <button class="bg-red-500 text-white py-2 px-6 rounded-lg text-lg hover:bg-green-700 transition-all duration-300">Delete</button>
            </div>
        </div>
    </div>

</body>
</html>
