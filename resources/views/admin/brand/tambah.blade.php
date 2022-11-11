@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <form action="{{ route('admin.brand.simpan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Brand</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Brand">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection