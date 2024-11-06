<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\DetailTransaksi;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }   


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $id_produk = Produk::find($id);
        $id_transaksi = Transaksi::find($id);
        $kodeproduk = $request->kode_produk;
        $cekproduk = Produk::where('kodeproduk', $kodeproduk)->first();
        
       
       if($cekproduk) {
           DetailTransaksi::create([
           'id_produk' => $cekproduk->id,
           'jumlah' => $request->jumlah,
           'harga' => $cekproduk->harga,    
           'id_transaksi' => $request->input('id_transaksi')
        ]); 
        // $id_produk->decrement('stok' < $request->jumlah);

        return redirect()->back()->with('success','Data Berhasil Ditambahkan');
    } else {
        return redirect()->back()->with('error');
}   
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
        $detailtransaksi = DetailTransaksi::find($id);
        if($detailtransaksi) {

            $detailtransaksi->delete();

    } else{
        return redirect()->back()->with('error', 'ID Tidak Ditemukan');
    }
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
