<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Product Management</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg">
    <h1 class="text-4xl font-extrabold text-gray-800 mb-6 border-b-2 pb-2">
        Products
    </h1>

    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Product List</h2>
        <a href="{{ route('product.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out shadow">
            + Add New Product
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border-collapse border border-gray-200 shadow-md rounded-lg">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left border-r">ID</th>
                <th class="py-3 px-6 text-left border-r">Name</th>
                <th class="py-3 px-6 text-left border-r">Price</th>
                <th class="py-3 px-6 text-center border-r">Image</th>
                <th class="py-3 px-6 text-left border-r">Description</th>
                <th class="py-3 px-6 text-center border-r">Edit</th>
                <th class="py-3 px-6 text-center">Delete</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach($products as $product)
                <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-300 ease-in-out">
                    <td class="py-3 px-6 text-left whitespace-nowrap border-r">{{ $product->id }}</td>
                    <td class="py-3 px-6 text-left border-r">{{ $product->name }}</td>
                    <td class="py-3 px-6 text-left border-r">${{ number_format($product->price, 2) }}</td>
                    <td class="py-3 px-6 text-center border-r">
                        <img src="{{ $product->ImageURL }}" alt="{{ $product->name }}" class="w-16 h-16 object-cover mx-auto rounded-md shadow-sm"/>
                    </td>
                    <td class="py-3 px-6 text-left border-r">{{ $product->description }}</td>
                    <td class="py-3 px-6 text-center border-r">
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="text-blue-500 hover:text-blue-700 font-medium">
                            Edit
                        </a>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
