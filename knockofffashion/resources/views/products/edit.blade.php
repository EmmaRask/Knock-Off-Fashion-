<x-app-layout>
    <x-slot name="header">
        <h2>Update your product</h2>
    </x-slot>


@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Brand Name:</label>
    <input type="text" name="brand_name" value="{{ old('brand_name', $product->brand_name) }}">
    <br>
    
    <label>Description:</label>
    <textarea name="description">{{ old('description'), $product->description }}</textarea>
    <br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price'), $product->price }}">
    <br>

    <label>Category:</label>
    <input type="text" name="category" value="{{ old('category'), $product->category }}">
    <br>

    <label>Color:</label>
    <input type="text" name="color" value="{{ old('color'), $product->color }}">
    <br>

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock'), $product->stock }}">
    <br>

    <button type="submit">Update Product</button>
</form>
</x-app-layout>