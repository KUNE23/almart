<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('home.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
       Transaksi::create([
        'id_user' => 1,
        'bayar' => 0,
        'kembalian' => 0,
        'diskon' => 0,
        'total' => 0,
        'status' => 'Belum Selesai',
       ]);
       return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request, $id)
        {   
            $id_produk = Produk::find($id);
            $detail_transaksi = DetailTransaksi::where('id_produk', $id)->get();
            $id_transaksi = Transaksi::find($id);
            $detailtransaksi = DetailTransaksi::where('id_transaksi', $id)->get();
            
            $detailtransaksi1 = DetailTransaksi::where('id_produk', $id)
            ->select('id_produk', 'harga')
            ->groupBy('id_produk', 'harga')   
            ->first(); 

            $subtotal = DB::table('detail_transaksis')
        ->where('id_produk', '=', '')
        ->sum('detail_transaksis.harga');


            return view('home.transaksi.checkout', compact( 'detailtransaksi', 'detailtransaksi1','id_transaksi', 'id_produk','subtotal'));
        }

        public function struk($id)
        {
            $detailtransaksi = DetailTransaksi::find($id);
            $produk = Produk::find($id);
            $transaksi = Transaksi::find($id);
            return view('home.transaksi.struk', compact('transaksi', 'produk', 'detailtransaksi'));
            
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id_transaksi = Transaksi::find($id);
        $id_produk = Produk::find($id);
        $detailtransaksi =  DetailTransaksi::all();

        $subtotal = DB::table('detail_transaksis')
        ->where('id_produk', '=', 1)
        ->sum('detail_transaksis.harga');

        return view('home.transaksi.checkout', compact('id_transaksi', 'detailtransaksi', 'id_produk', 'subtotal'));
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

      
        $transaksi = Transaksi::find($id);

        $transaksi->update([
            'kembalian' => $request->bayar - $request->total + $request->diskon,
            'total' =>$request->total,
            'status' =>'Selesai',
            'bayar' =>$request->bayar,
            'diskon' =>$request->diskon,
        ]);
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //    
    }
}   
