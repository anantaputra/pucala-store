@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header d-flex justify-content-between p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize px-3">Daftar Produk</h6>
              </div>
              <div>
                <a href="{{ route('admin.produk.tambah') }}" role="button" class="btn btn-primary">Tambah (+)</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Kategori</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Brand</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($produk))
                    @php
                        $no = 1;
                    @endphp
                    @foreach($produk as $item)
                    <tr>
                        <td>{{ $no; }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->kategori->nama_kategori }}</td>
                        <td>{{ $item->kategori->brand->nama_brand }}</td>
                        <td>Rp{{ number_format($item->harga, 0, 0, '.') }}</td>
                        <td>
                          <img src="{{ asset('produk/'.$item->gambar) }}" alt="" class="w-25">
                        </td>
                        <td></td>
                    </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection