@extends('layouts.master')
@section('title','Transaksi')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Detail Transaksi</h3>
                        <a class="btn btn-primary" href="/transaksi">Kembali</a>
                        </div>
                        <div class="card-body">
                         <form action="/transaksi/proses/{{ $id_transaksi->id }}" method="post">
                                    @csrf          
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <input
                                            type="hidden"
                                            name="id_transaksi"
                                            value="{{ $id_transaksi->id }}"
                                        />
                                    </div>      
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <input
                                            type="hidden"
                                            name="id_produk"
                                            value="{{ $id_produk ? $id_produk->id : '' }}"
                                        />
                                    </div>      
                                    <div class="mb-3">
                                        <label for="" class="form-label">Kode Produk</label>
                                        <input
                                            type="number"
                                            name="kode_produk"
                                            class="form-control"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder="Kode Produk"
                                        />
                                        @if(session('error'))
                                        <p style="color : red"><i>Produk Tidak Ditemukan</i></p>
                                        @endif
                                    </div>
                                    <div class="col-1">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jumlah</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="jumlah"
                                            id="jumlah"
                                            min="1"
                                            aria-describedby="helpId"
                                            placeholder="1"
                                        />
                                    </div>
                                    <button class="btn btn-primary">Check</button>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                                <th scope="col">Jumlah</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($detailtransaksi as $detailtransaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $detailtransaksi->Produk->namaproduk }}</td>
                                            <td>{{ number_format($detailtransaksi->Produk->harga) }}</td>
                                            <td>{{ number_format($detailtransaksi->jumlah) }}</td>
                                            <td>{{ number_format($detailtransaksi->Produk->harga * $detailtransaksi->jumlah) }}</td>
                                            <td>
                                                <center><a class="fas fa-trash" style="color : red" href="/transaksi/delete/{{ $detailtransaksi->id }}"
                                                onclick="return confirm('Apakah Data Ini Akan Dihapus?')"></a></center></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            <form action="/transaksi/update/{{ $id_transaksi->id }}" method="post">
                                @csrf 
                                <div class="mb-3">
                                    <label for="" class="form-label"></label>
                                    <input
                                        type="hidden"
                                        class="form-control"
                                        name="total"
                                        value="{{ $subtotal }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Bayar</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="bayar"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder="Masukan Nominal Uang"
                                    />
                                    @error('bayar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                </div>
                                <div class="col-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Diskon</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="diskon"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder="Masukan Nominal Diskon"
                                    />
                                 @error('diskon')
                                 <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                 </div>
                                 @enderror
                                </div>
                                </div>
                                Total :
                            <h1 style="color: black">   
                                Rp. {{ number_format($subtotal) }}
                                <br>
                                </h1>
                            <button class="btn btn-primary" type="submit">Check-Out</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection