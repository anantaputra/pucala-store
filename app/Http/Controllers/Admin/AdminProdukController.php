<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Produk;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function tambah()
    {
        $brand = Brand::all();
        $kategori = Kategori::all();
        return view('admin.produk.tambah', compact('brand', 'kategori'));
    }

    public function simpan(Request $request)
    {
        $produk = new Produk();        
        $produk->brand_id = $request->brand;
        $produk->kategori_id = $request->kategori;
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->berat = $request->berat;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        if($request->hasFile('gambar')){
            $filename = rand() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/produk', $filename);
            $produk->gambar = $filename;
            $produk->save();
            return redirect()->route('admin.produk');
        }
    }
}
