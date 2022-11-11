@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <form action="{{ route('admin.produk.simpan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <select class="form-select" name="brand" id="brand">
                <option disabled selected>-Pilih-</option>
                @foreach($brand as $item)
                <option value="{{ $item->id }}">{{ $item->nama_brand }}</option>
                @endforeach
            </select>
        </div>        
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" name="kategori" id="kategori">
                <option disabled selected>-Pilih-</option>
                @foreach($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Produk">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Produk</label>
            <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga Produk">
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label">Berat Produk</label>
            <input type="number" name="berat" class="form-control" id="berat" placeholder="Berat Produk">
        </div>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Produk</label>
            <input type="number" name="stok" class="form-control" id="stok" placeholder="Stok Produk">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Produk</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Produk</label>
            <input class="form-control" name="gambar" type="file" id="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection