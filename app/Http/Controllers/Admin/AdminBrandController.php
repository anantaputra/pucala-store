<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
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
