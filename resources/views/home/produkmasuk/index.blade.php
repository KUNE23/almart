@extends('layouts.master')
@section('title','ProdukMasuk')
@section('content')

<div class="conten-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Barang Masuk</h3>
                            <a class="btn btn-primary" href="/produkmasuk/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah Produk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produkmasuk as $produkmasuk)
                                            <tr class="">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $produkmasuk->supplier->nama }}</td>
                                                <td>{{ $produkmasuk->produk->namaproduk }}</td>
                                                <td>{{ $produkmasuk->jumlah }}</td>
                                                <td>
                                                    <a class="btn btn-warning" href="/produkmasuk/show/{{ $produkmasuk->id }}">Edit</a>
                                                    <a class="btn btn-danger" href="/produkmasuk/delete/{{ $produkmasuk->id }}"
                                                    onclick="return confirm('Apakah Data Akan Dihapus?')">Hapus</a>
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