<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukMasuk;
use App\Models\Supplier;
use App\Models\Produk;

class ProdukMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produkmasuk = ProdukMasuk::all();
        return view('home.produkmasuk.index', compact('produkmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produkmasuk = ProdukMasuk::all();
        $supplier = Supplier::all();
        $produk = Produk::all();
        return view('home.produkmasuk.tambah', compact('produkmasuk','supplier','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'id_supplier' => 'required',
            'id_produk' => 'required',
            'jumlah' => 'required',
        ]);

        // $id = $request->id_produk;
        // $produkmasuk = ProdukMasuk::find($id);
        // $produkmasuk->increment();
        
        Produkmasuk::create([
            'id_supplier' => $request->id_supplier,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
        ]);


        return redirect('/produkmasuk')->with('success','Data Barang Masuk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkmasuk = ProdukMasuk::find($id);
        $produkmasuk->delete();
        return redirect('/produkmasuk')->with('success','Data Barang Masuk Berhasil Dihapus');
    }
}
