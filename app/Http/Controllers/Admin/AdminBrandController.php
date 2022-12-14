<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class AdminBrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brand.index', compact('brand'));
    }

    public function tambah()
    {
        return view('admin.brand.tambah');
    }

    public function simpan(Request $request)
    {
        $brand = new Brand();
        $brand->nama_brand = $request->nama;
        $brand->save();
        return redirect()->route('admin.brand');
    }
}
