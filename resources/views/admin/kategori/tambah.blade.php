@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <form action="{{ route('admin.kategori.simpan') }}" method="post">
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
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Brand">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection