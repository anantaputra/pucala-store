<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Kategori;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function tambah()
    {
        $brand = Brand::all();
        return view('admin.kategori.tambah', compact('brand'));
    }

    public function simpan(Request $request)
    {
        $kategori = new Kategori();        
        $kategori->brand_id = $request->brand;
        $kategori->nama_kategori = $request->nama;
        $kategori->save();
        return redirect()->route('admin.kategori');
    }
}
