<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold">Add Product</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700">Name:</label>
                <input type="text" name="name" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Collection:</label>
                <input type="text" name="collection" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Category:</label>
                <input type="text" name="category" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Short description:</label>
                <input type="text" name="short_description" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Long description:</label>
                <input type="text" name="long_description" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Year:</label>
                <input type="number" name="year" class="form-input mt-1 block w-full">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Reservation:</label>
                <input type="checkbox" name="reservation" class="form-checkbox mt-1">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Sold:</label>
                <input type="checkbox" name="sold" class="form-checkbox mt-1">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Price:</label>
                <input type="number" step="0.01" name="price" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Image:</label>
                <input type="file" name="image_path" class="form-input mt-1 block w-full">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
