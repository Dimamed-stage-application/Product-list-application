<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Edit Product</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="container mx-auto mt-10 p-5 bg-white shadow-lg rounded-lg max-w-2xl">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 pb-2">
        Edit Product
    </h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">There were some problems with your input.</span>
            <ul class="mt-2 list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
        @csrf
        @method('put')

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="name" id="name" placeholder="Product Name" value="{{$product->name}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
            <input type="number" step="0.01" name="price" id="price" placeholder="0.00" value="{{$product->price}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
        </div>

        <div class="mb-6">
            <label for="ImageURL" class="block text-gray-700 font-semibold mb-2">Image URL</label>
            <input type="text" name="ImageURL" id="ImageURL" placeholder="https://example.com/image.jpg" value="{{$product->ImageURL}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
            <textarea
                name="description"
                id="description"
                placeholder="Enter product description..."
                rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out"></textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out shadow-md">
                Update Product
            </button>
            <a href="{{ route('product.index') }}" class="text-gray-500 hover:text-gray-700 font-medium transition duration-150 ease-in-out">
                Cancel
            </a>
        </div>
    </form>
</div>

</body>
</html>
