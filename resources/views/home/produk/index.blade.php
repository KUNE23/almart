@extends('layouts.master')
@section('title','Produk')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Produk</h3>
                            <a class="btn btn-primary" href="/produk/tambah">Tambah</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="">
                                                <th scope="col">ID</th>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Kode Produk</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($produk as $produk)
                                            <tr class="">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $produk->namaproduk }}</td>
                                                <td>Rp {{ number_format($produk->harga) }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>{{ $produk->kodeproduk }}</td>
                                                <td class="text-center">
                                                    <img src="{{ asset('/storage/' . $produk->gambar) }}"
                                                    class="rounded" style="width: 150px">
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning" href="/produk/show/{{ $produk->id }}">Edit</a>
                                                    <a class="btn btn-danger" href="/produk/delete/{{ $produk->id }}"
                                                    onclic="return confirm('Apakah Akan Dihapus?')">Hapus</a>
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