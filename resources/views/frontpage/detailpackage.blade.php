@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Gambar produk -->
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">SKU: {{ $product->sku }}</p>
            <h2 class="text-danger">Rp {{ number_format($product->price, 0, ',', '.') }}</h2>
            <p>{{ $product->description }}</p>
            
            <!-- Tombol beli -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="quantity">Jumlah</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
            </form>
        </div>
    </div>
</div>
@endsection