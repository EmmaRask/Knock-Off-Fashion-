@extends('layouts.app')

@section('content')
<h1>Skapa ny produkt</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Brand Name:</label>
    <input type="text" name="brand_name" value="{{ old('brand_name') }}">
    <br>

    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea>
    <br>

    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ old('price') }}">
    <br>

    <label>Category:</label>
    <input type="text" name="category" value="{{ old('category') }}">
    <br>

    <label>Color:</label>
    <input type="text" name="color" value="{{ old('color') }}">
    <br>

    <label>Stock:</label>
    <input type="number" name="stock" value="{{ old('stock') }}">
    <br>

    <button type="submit">Skapa produkt</button>
</form>
@endsection
