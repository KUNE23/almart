<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = Produk::all();

        $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kodeproduk' => 'required',
            'gambar' => 'required|file|mimes:jpg,png,svg,jpeg|max:9048',
        ]);

       $gambarpath = $request->file('gambar')->store('products','public');

 

        Produk::create([
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kodeproduk' => $request->kodeproduk,
            'id_transaksi' => 1,
            'gambar' => $gambarpath,
        ]);
        return redirect('/produk')->with('success','Data Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        return view('home.produk.edit', compact('produk')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::find($id);

        $request->validate([
            'namaproduk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kodeproduk' => 'required',
            'gambar' => 'required|file|mimes:jpg,png.jpeg|max:9048',
        ]);

        $gambarpath = $request->file('gambar')->store('products','public');

        $produk->update([
            'namaproduk' => $request->namaproduk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kodeproduk' => $request->kodeproduk,
            'gambar' => $gambarpath,
        ]);
        return redirect('/produk')->with('success','Data Produk Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk')->with('success','Data Produk Berhasil Di Hapus');
    }
}
