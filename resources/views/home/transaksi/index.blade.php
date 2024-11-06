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
                            <h3>Halaman Transaksi</h3>
                            <a class="btn btn-primary" href="/transaksi/tambah"
                            onclick="return confirm('Yakin Mau Buat Data Baru ?')">Tambah</a>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="">
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Kasir</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Bayar</th>
                                        <th scope="col">Kembalian</th>
                                        <th scope="col">Diskon</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transaksi as $transaksi)
                                        <tr class="">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->user->nama }}</td>
                                            <td>{{ number_format($transaksi->total) }}</td>
                                            <td>{{ number_format($transaksi->bayar) }}</td>
                                            <td>{{ number_format($transaksi->kembalian) }}</td>
                                            <td>{{ number_format($transaksi->diskon) }}</td>
                                            <td>{{ $transaksi->status }}</td>
                                            <td>{{ $transaksi->created_at }}</td>
                                            <td>
                                                @if($transaksi->status == 'Belum Selesai')
                                                <a class="btn btn-primary" href="/transaksi/checkout/{{ $transaksi->id }}">Selesaikan Transaksi</a>
                                                @else($transaksi->status == 'Selesai')  
                                                <a class="btn btn-info" href="/transaksi/struk/{{ $transaksi->id }}">Cetak Struk</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
