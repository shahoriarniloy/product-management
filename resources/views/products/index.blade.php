
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Products</title>
</head>
<body>
    <div class=" lg:mx-16 md:mx-16 mx-4 min-h-screen my-16">
        <h1 class="text-3xl font-semibold text-blue-500 text-center mb-8" >Products</h1>

        <table class="w-full p-4 mx-auto rounded-lg shadow-lg border-collapse bg-white text-center">
    <thead>
        <tr class="bg-gray-100">
            <th class="py-3 px-4  text-sm font-medium text-gray-700">Name</th>
            <th class="py-3 px-4  text-sm font-medium text-gray-700">Description</th>
            <th class="py-3 px-4  text-sm font-medium text-gray-700">Price</th>
            <th class="py-3 px-4 text-sm font-medium text-gray-700">Details</th>
            <th class="py-3 px-4 text-sm font-medium text-gray-700">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $id => $product)
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

    </div>
    
</body>
</html>
